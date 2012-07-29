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
<header>
	<div class="container">
		<div id="Logo">
			<a class="text" href="/"><span class="keyboard">Keyboard</span><span class="fu">FU</span></a>
		</div>
		<!--
		<nav>
			<ul>
				<li class="grid_1 articles"><a href="/">Home</a></li>
			</ul>
		</nav>
	-->
	</div>
</header>
<div id="Body">
<?php echo $content; ?>
</div>
<footer>
	<div class="copyright">
		Copyright &copy; 2012 <?php if (date('Y') > 2012) echo '- ' . date('Y'); ?>
	</div>
	<div class="credits">
		<a href="https://github.com/netcarver/textile" target="_blank">Textile</a> by <a href="https://github.com/netcarver/textile" target="_blank">netcarver</a><br>
		<a href="https://github.com/leafo/lessphp" target="_blank">LessPHP</a> by <a href="http://leafo.net" target="_blank">Leafo</a>
	</div>
</footer>
</body>
</html>
