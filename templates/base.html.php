<!DOCTYPE html>
<html lang="en">
<head>
<?php echo Meta::toString(); ?>
	<link rel="shortcut icon" href="//<?php echo $_SERVER['SERVER_NAME']; ?>/favicon.ico">
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/html5.css">
	<![endif]-->
	<?php if ($_ENV['config']['mode.production']) { ?><script>
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-28514996-1']);
		_gaq.push(['_setDomainName', 'keyboardfu.com']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script><?php } // mode.production ?>
</head>
<body>
<div id="Header" class="container_12">
	<div id="Logo" class="grid_5 suffix_3">
		<a href="/">KeyboardFu</a>
	</div>
	<nav>
		<ul>
			<li class="grid_1 articles"><a href="/<?php echo date('Y'); ?>">Articles</a></li>
			<li class="grid_1 portfolio"><a href="/coming-soon">Portfolio</a></li>
			<li class="grid_1 about"><a href="/about">About</a></li>
			<li class="grid_1 contact"><a href="/coming-soon">Contact</a></li>
		</ul>
	</nav>
</div>
<div id="Body" class="container_12">
<?php echo $content; ?>
</div>
<footer class="container_12">
	<div class="grid_6 copyright">
		<p>Copyright &copy; 2012 <?php if (date('Y') > 2012) echo '- ' . date('Y'); ?></p>
	</div>
	<div class="grid_6 credits">
		<p><strong>Icon theme:</strong> <em>ecqlipse</em> by <a href="http://chrfb.deviantart.com/gallery/#/dtr7yy" target="_blank">~chrfb</a></p>
	</div>
</footer>
</body>
</html>
