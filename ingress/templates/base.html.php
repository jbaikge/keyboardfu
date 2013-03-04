<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php e($title); ?> - Google+ Community Vetting</title>
	<link href="http://commondatastorage.googleapis.com/ingress/css/style.css" rel="stylesheet">
	<link href="http://commondatastorage.googleapis.com/ingress/css/basic.css" rel="stylesheet">
	<style type="text/css">
		h2 {
			padding-top:25px;
			padding-bottom:0;
		}
		li {
			margin-bottom:0.5em;
		}
		.container {
			width:960px;
			margin:0 auto;
		}
		.plext_tab_title {
			cursor:default;
		}
	</style>
	<link rel="shortcut icon" href="//<?php echo $_SERVER['SERVER_NAME']; ?>/favicon.ico">
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
	<div class="container">
		<header class="<?php echo strtoupper($faction); ?>">
			<h1><?php e($title); ?></h1>
			<p class="lead">The following vetting process is to ensure all members of the <?php e($title); ?> Google+ Community are indeed members of the <?php echo $faction; ?>.</p>
		</header>
		<section id="qualifications">
			<h2>Qualifications</h2>
			<ul>
				<li>You must be a member of the <?php echo $faction; ?> faction in Ingress</li>
				<li>You must only possess a single Ingress account</li>
				<li>By continuing with the vetting process, you agree to all of the above. If a moderator determines misbehavior, he or she reserves the right to remove you from the community</li>
			</ul>
		</section>
		<section id="authentication">
			<h2>Authentication</h2>
			<ol>
				<li>Ask to join the <a href="<?php e($link); ?>" target="_blank"><span class="color_orange">[ <?php e($title); ?> Google+ Community ]</span></a></li>
				<li>
					Announce your Google+ name in <span class="plext_tab_title tab_selected">Faction</span> chat, <a href="http://www.ingress.com/intel?latE6=<?php echo $lat; ?>&amp;lngE6=<?php echo $lon; ?>&amp;z=16" target="_blank"><span class="color_orange">[ at <?php printf("%0.6f, %0.6f", $lat/1e6, $lon/1e6); ?> ]</span></a>
					<blockquote>
						<p><span class="plext_tab_title">All</span><span class="plext_tab_title tab_selected">Faction</span> - Be sure the upper-right area of the COMM window looks like this</p>
						<p><span class="plext_tab_title tab_selected">All</span><span class="plext_tab_title">Faction</span> - Not this</p>
					</blockquote>
				</li>
				<li>A moderator will verify your name in <span class="plext_tab_title tab_selected">Faction</span> chat and match it with your Google+ name on your community application, then approve you</li>
			</ol>
		</section>
		<section id="what-next">
			<h2>Once You're In</h2>
			<ul>
				<li>Be sure to announce your Ingress username and your stomping ground(s)</li>
				<li>Read through past posts, especially tips and tricks</li>
				<li>Ask for help, Ingress is a team sport, no single player is too big or too small</li>
			</ul>
		</section>
	</div>
</body>
</html>
