<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo Meta::getTitle(); ?></title>
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/html5.css">
	<![endif]-->
<?php echo Meta::toString(); ?>
</head>
<body>
<div id="Header" class="container_12">
	<div id="Logo" class="grid_5 suffix_7">
		<a href="/">KeyboardFu</a>
	</div>
	<nav class="grid_12">
		<ul>
			<li><a href="/articles">Articles</a></li>
			<li><a href="/portfolio">Portfolio</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="/contact">Contact</a></li>
		</ul>
	</nav>
</div>
<div class="container_12">
<?php echo $content; ?>
</div>
<footer class="container_12">
	<p>Copyright &copy; 2012 <?php if (date('Y') > 2012) echo '- ' . date('Y'); ?></p>
</footer>
</body>
</html>
