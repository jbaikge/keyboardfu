<?php
header("Content-Type: text/css");

$source = realpath($_SERVER["PATH_TRANSLATED"]);
$source_modified = filemtime($source);

$compiled_dir = __DIR__ . '/cache/css/';
$compiled_filename = sha1($source);
$compiled_path = $compiled_dir . $compiled_filename;
$compiled_cache = $compiled_dir . 'cache.php';

if (!is_dir($compiled_dir)) {
	mkdir($compiled_dir);
	chmod($compiled_dir, 0777);
}

if (file_exists($compiled_cache)) {
	include($compiled_cache);
} else {
	$cache = array();
}
$original_cache = $cache;


// No missing indexes on my watch
if (!isset($cache[$source])) {
	$cache[$source] = array('modified' => 0);
}
// Scrub @import'd files to see if any have changed
if (isset($cache[$source]['files']) && count($cache[$source]['files']) > 1) {
	foreach ($cache[$source]['files'] as $filename) {
		if (!isset($cache[$filename]) || !file_exists($filename) || filemtime($filename) > $cache[$filename]['modified']) {
			// Force a cache miss
			$cache[$source]['modified'] = 0;
			break;
		}
	}
}

// Fall-through to spit out pre-compiled CSS or regenerate, store and spit out
switch (true) {
	case $source_modified == $cache[$source]['modified']:
		header('Content-Length: ' . filesize($compiled_path));
		$fh = fopen($compiled_path, 'r');
		fpassthru($fh);
		fclose($fh);
		break;
	case !file_exists($compiled_path):
	case $source_modified != $cache[$source]['modified']:
		# Preload class since we know we'll need it. No need to use the autoloader
		require(__DIR__ . '/lib/lessphp/lessc.inc.php');
		$less = new lessc($source);
		#$less->setFormatter("compressed");
		try {
			$compiled = $less->parse();
			header('Content-Length: ' . strlen($compiled));
			echo $compiled;
			file_put_contents($compiled_path, $compiled);

			$parsed = $less->allParsedFiles();
			$cache[$source]['files'] = array_keys($parsed);
			foreach ($parsed as $filename => $timestamp) {
				$cache[$filename]['modified'] = $timestamp;
			}
		} catch (Exception $e) {
			$msg = str_replace('"', '\\"', $e->getMessage());
			echo 'body:before {
				white-space: pre;
				font-family: monospace;
				content: "' . $msg . '";
			}';
		}
		break;
}

// Only store cached information if it's changed.
if ($cache != $original_cache) {
	file_put_contents($compiled_cache, '<?php $cache = ' . var_export($cache, true) . ';');
}
