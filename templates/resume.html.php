<!DOCTYPE html>
<html>
<head>
	<title>Jacob Tews - Resume</title>
	<meta charset="UTF-8">
	<link href="http://fonts.googleapis.com/css?family=Trykker|Metrophobic|Federo" rel="stylesheet">
	<style type="text/css">
		@media screen {
			/* Turn page into paper */
			html {
				background:#CCC;
			}
			body {
				background:#FFF;
				box-shadow:0 0 0.5em 0 #333;
				height:10in;
				margin:1em auto;
				padding:0.5in;
				width:7.5in;
			}
		}
		body {
			color:#222;
			font-family:Trykker, serif;
			font-size:0.75em;
			line-height:1.5em;
		}
		a {
			color:#222;
			text-decoration:none;
		}
		h1, h2, h3, h4, h5, h6 {
			font-family:"Federo", sans;
		}
		header > h1 {
			font-size:2.5em;
			margin-top:0;
			padding-left:67%;
		}
		#Contact {
			width:33%;
			float:right;
		}
		#Contact dt {
			color:#888;
			height:1.5em;
			margin-bottom:-1.5em;
		}
		#Contact dd {
			min-height:1.5em;
			margin-left:5em;
			padding-left:0;
		}
		#Objective {
			float:left;
			width:64%;
		}
		#Experience {
			clear:both;
		}
		#Experience article {
			clear:both;
		}
		#Experience article header div {
			clear:right;
			float:right;
			width:33%;
		}
		#Experience article header div,
		#Experience article header a {
			color:#888;
		}
		#Experience article p,
		#Experience article ul {
			-moz-box-sizing:border-box;
			 box-sizing:border-box;
			width:64%;
		}
	</style>
</head>
<body>
<!--
Before anyone says anything about multiple h1s in a document, please run this
thing through w3's validator.
-->
<header>
	<h1>Jacob Tews</h1>
</header>
<section id="Contact">
	<dl>
		<dt>Phone</dt>
		<dd>571.572.9577</dd>
		<dt>Email</dt>
		<dd><a href="mailto:jake@keyboardfu.com">jake@keyboardfu.com</a></dd>
		<dt>Website</dt>
		<dd><a href="http://keyboardfu.com" target="_blank">http://keyboardfu.com</a></dd>
		<dt>Address</dt>
		<dd>Available upon request</dd>
	</dl>
</section>
<section id="Objective">
	<h1>Objective</h1>
	<article>
		<p>Continue along the path of programming Zen through exploratory projects utilizing: Go, PHP, data management, distributed computing, web frontends, Linux backends, and massive amounts of brain power.</p>
	</article>
</section>
<section id="Experience">
	<h1>Experience</h1>
	<article>
		<header>
			<h2>300Brand</h2>
			<div class="dates">May, 2009 - Present</div>
			<div class="url"><a href="http://300brand.com" target="_blank">http://300brand.com</a></div>
			<div class="location">Alexandria, VA</div>
			<div class="position">Lead Developer, Database Administrator, System Administrator</div>
		</header>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</article>
	<article>
		<header>
			<h2>Web Teks, Inc.</h2>
			<div class="dates">March, 2006 - May, 2009</div>
			<div class="url"><a href="http://www.webteks.com" target="_blank">http://www.webteks.com</a></div>
			<div class="location">Chesapeake, VA</div>
			<div class="position">Lead Developer, Database Administrator, System Administrator</div>
		</header>
		<ul>

		</ul>
	</article>
	<article>
		<header>
			<h2>Virginia Beach City Public Schools</h2>
			<div class="dates">October, 2004 - March, 2006</div>
			<div class="url"><a href="http://www.vbschools.com" target="_blank">http://www.vbschools.com</a></div>
			<div class="location">Virginia Beach, VA</div>
			<div class="position">Assistant Webmaster</div>
		</header>
		<ul>
			<li>Refactored entire backend of website consisting of 3800 pages to make website more Web Standards Compliant and rely on CSS instead of HTML design elements</li>
			<li>Created e-commerce applications using PayPal and ASP</li>
			<li>Created database applications using Microsoft Access with ASP</li>
			<li>Worked with ActionScript in Flash and integrated ASP-generated XML into applications</li>
			<li>Integrated XML with ASP for structured data listings (schools, statistics, employees)</li>
		</ul>
	</article>
</section>
</body>
</html>
