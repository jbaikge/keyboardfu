<!DOCTYPE html>
<html>
<head>
<?php echo Meta::toString(); ?>
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
		<h1><?php e($community_name); ?></h1>
		<p class="lead">Something pontiferous should go here. "The following vetting process is to insure all members of the <?php e($community_name); ?> are indeed members of the <?php echo $faction; ?> faction."</p>
		<div class="row">
			<div class="span3 invite-sidebar">
				<ul class="nav nav-list invite-sidenav">
					<li><a href="#qualifications"><i class="icon-chevron-right"></i> Qualifications</a></li>
					<li><a href="#authentication"><i class="icon-chevron-right"></i> Authentication</a></li>
					<li><a href="#activation-code"><i class="icon-chevron-right"></i> Activation Code</a></li>
					<li><a href="#announce"><i class="icon-chevron-right"></i> Announce Your Code</a></li>
					<li><a href="#wait"><i class="icon-chevron-right"></i> Await Confirmation</a></li>
					<li><a href="#what-next"><i class="icon-chevron-right"></i> What Next?</a></li>
				</ul>
			</div>
			<div class="span9">
				<section id="qualifications">
					<h2>Qualifications</h2>
					<ol>
						<li>You must be a member of the <?php echo $faction; ?> faction in Ingress</li>
						<li>You must only possess a single Ingress account</li>
						<li>By continuing with the vetting process, you agree to all of the above. If a moderator determines misbehavior, he or she reserves the right to remove you from the community</li>
					</ol>
				</section>
				<section id="authentication">
					<h2>Authentication</h2>
<?php if (isset($user)) { ?>
					<div class="row">
						<div class="span2">
							<img src="<?php e($user->picture); ?>" class="img-polaroid" width="100%">
						</div>
						<div class="span7">
							<h3><?php e($user->name); ?></h3>
							<p class="text-success">Authentication successful, continue to the next step</p>
						</div>
					</div>
<?php } else { ?>
					<p>Authenticate your Google account to receive your activation code. We only need your Google+ name. If the grant request does not look like below, something fishy is going on and you should contact us.</p>
					<p><img src="/ingress/images/auth-shot.png" class="img-polaroid" width="100%"></p>
					<p><a class="btn btn-large btn-primary" href="<?php e($auth_url); ?>">Authenticate</a></p>
<?php } ?>
				</section>
				<section id="activation-code">
					<h2>Activation Code</h2>
<?php if (isset($user)) { ?>
					<p>Your activation code is: <code><?php e($user->code); ?></code></p>
					<p>Copy the code above and continue to the next step</p>
<?php } else { ?>
					<p>You must authenticate to receive your activation code</p>
<?php } ?>
				</section>
				<section id="announce">
					<h2>Announce Your Code</h2>
<?php if (isset($user)) { ?>
					<ol>
						<li>Click Announce, and log in if necessary</li>
						<li>Once the map loads, click <strong>Faction</strong> in the lower left <em>COMM</em> area of the screen</li>
						<li>Paste the code in the bottom of the <em>COMM</em> window and click <strong>Transmit</strong></li>
					</ol>
					<p><a class="btn btn-large btn-primary" href="http://www.ingress.com/intel?latE6=<?php echo $lat; ?>&amp;lngE6=<?php echo $lon; ?>&amp;z=16" target="_blank">Announce</a></p>
<?php } else { ?>
					<p>You must authenticate to announce your code</p>
<?php } ?>
				</section>
				<section id="wait">
					<h2>Await Confirmation</h2>
					<p>Moderators will monitor faction chat for the code you entered above.</p>
					<p>Please make sure you clicked <strong>Ask to Join</strong> on the community page, otherwise, moderators will have no way to let you in!</p>
				</section>
				<section id="what-next">
					<h2>What Next?</h2>
					<ul>
						<li>Be sure to announce your Ingress username and your stomping ground(s)</li>
						<li>Read through past posts, especially tips and tricks</li>
						<li>Ask for help, Ingress is a team sport, no single player is too big or too small</li>
					</ul>
				</section>
			</div>
		</div>
	</div>
	<script>
	$('a#oauth').click(function() {
		_gaq.push(['_trackEvent', 'Getting started', 'Download', 'Download compiled'])
	})
	</script>
</body>
</html>
