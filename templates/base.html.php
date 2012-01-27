<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo Meta::getTitle(); ?></title>
	<link rel="shortcut icon" href="//<?php echo $_SERVER['SERVER_NAME']; ?>/favicon.ico">
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/html5.css">
	<![endif]-->
<?php echo Meta::toString(); ?>
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
			<li class="grid_1 about"><a href="/coming-soon">About</a></li>
			<li class="grid_1 contact"><a href="/coming-soon">Contact</a></li>
		</ul>
	</nav>
</div>
<div id="Body" class="container_12">
<?php echo $content; ?>
</div>
<footer class="container_12">
	<p>Copyright &copy; 2012 <?php if (date('Y') > 2012) echo '- ' . date('Y'); ?></p>
</footer>
</body>
</html>
