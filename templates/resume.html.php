<!DOCTYPE html>
<html>
<head>
	<title>Jacob Tews - Resume</title>
	<meta charset="UTF-8">
	<link href="http://fonts.googleapis.com/css?family=Trykker|Federo" rel="stylesheet">
	<style type="text/css">
		@media screen {
			/* Turn page into paper */
			html {
				background:#CCC;
			}
			body {
				background:#FFF;
				box-shadow:0 0 0.5em 0 #333;
				margin:1em auto;
				padding:0.5in;
				width:7.5in;
			}
		}
		body {
			color:#222;
			font-family:Trykker, serif;
			font-size:0.70em;
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
			padding-left:75%;
		}
		section h1 {
			font-size:2em;
		}
		#Contact {
			width:25%;
			float:right;
		}
		#Contact dt {
			color:#888;
			height:1.5em;
			margin-bottom:-1.5em;
		}
		@media print {
			#Contact dt {
				/* Tricks the browser printers into printing a lighter gray */
				color:#CCC;
			}
		}
		#Contact dd {
			min-height:1.5em;
			margin-left:5em;
			padding-left:0;
		}
		#Objective {
			float:left;
			width:72%;
		}
		#Experience {
			clear:both;
			padding-top:0.001em;
		}
		#Experience article {
			clear:both;
		}
		#Experience header div {
			clear:right;
			float:right;
			padding-bottom:0.75em;
			width:25%;
		}
		#Experience hgroup h3 {
			color:#BBB;
			margin-top: -1em;
		}
		#Experience header div,
		#Experience header a {
			color:#888;
		}
		@media print {
			#Experience header div,
			#Experience header a {
				/* Tricks the browser printers into printing a lighter gray */
				color:#CCC;
			}
		}
		#Experience header .position {
			font-size:1.15em;
		}
		#Experience article > p,
		#Experience article > ul {
			-moz-box-sizing:border-box;
			 box-sizing:border-box;
			width:72%;
		}
		#Proficiency {
			overflow:hidden;
			width:100%;
		}
		#Proficiency h2 {
			margin-top:0em;
		}
		#Proficiency dl {
			margin:0;
		}
		#Proficiency dt {
			float:left;
			width:50%;
		}
		#Proficiency dd {
			float:left;
			font-size:1.25em;
			margin:0;
			text-align:left;
			width:50%;
		}
		#Languages {
			width:50%;
			float:left;
		}
		#Languages dl {
			float:left;
			width:50%;
		}
		#Software, #Platforms {
			float:left;
			width:25%;
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
		<dt>Github</dt>
		<dd><a href="http://git.io/__" target="_blank">http://git.io/__</a></dd>
		<dt>Address</dt>
		<dd>Available upon request</dd>
	</dl>
</section>
<section id="Objective">
	<h1>Objective</h1>
	<article>
		<p>Exercise programming prowess with copious amounts of problem solving in exploratory projects which utilize: Go, PHP, dynamic data, distributed computing, and web frontends.</p>
	</article>
</section>
<section id="Experience">
	<h1>Experience</h1>
	<article>
		<header>
			<hgroup>
				<h2>300Brand</h2>
				<h3>Formerly O'Keeffe &amp; Company</h3>
			</hgroup>
			<div class="position"><strong>Lead Developer</strong><br>System Administrator<br>Database Administrator</div>
			<div class="dates">March, 2009 - Present</div>
			<div class="location">Alexandria, VA</div>
			<div class="url"><a href="http://300brand.com" target="_blank">http://300brand.com</a></div>
		</header>
		<ul>
			<li>Maintained websites for 30 internal and external clients</li>
			<li>Developed ticket management website for internal projects:
				<ul>
					<li>Replaced email for work tasks</li>
					<li>Increased visibility for employee workloads</li>
					<li>Decreased overlooked and erroneous tasks</li>
					<li>Decreased "ownership" of entire sites - task history helped distribute workloads across team</li>
				</ul>
			</li>
			<li>Hired and managed developers with varying skill levels and skill sets</li>
			<li>Converted site file management of all sites from FTP to Subversion</li>
			<li>Completed development of PHP 5.3+ framework after four years of development to aid in rapid development of websites and supporting CLI scripts:
				<ul>
					<li>Heavy concentration on performance through trace analysis to optimize memory and time usage</li>
					<li>"Stay out of your way" mentality allowed new developers to write PHP instead of work around the framework</li>
					<li>May, 2012 - Released framework to open source community: <a href="http://github.com/jbaikge/framework" target="_blank">http://github.com/jbaikge/framework</a></li>
				</ul>
			</li>
			<li>Utilized Subversion to implement an infinite nightly database backup system where developers could extract all or part of a production database at any point in the past</li>
			<li>Set up staging server for internal and external review of site changes:
				<ul>
					<li>Subversion post-commit hooks update files server</li>
					<li>New branches become subdomains of the site domain (new-branch.clientdomain.com)</li>
					<li>Aforementioned nightly database backups pushed into staging server to keep development data fresh</li>
				</ul>
			</li>
		</ul>
	</article>
	<article>
		<header>
			<h2>Web Teks, Inc.</h2>
			<div class="position"><strong>Lead Developer</strong><br>Database Administrator<br>System Administrator</div>
			<div class="dates">March, 2006 - May, 2009</div>
			<div class="location">Chesapeake, VA</div>
			<div class="url"><a href="http://www.webteks.com" target="_blank">http://www.webteks.com</a></div>
		</header>
		<ul>
			<li>Converted site file management of all sites from FTP to Subversion</li>
			<li>Managed maintenance and build-outs for over 150 clients</li>
			<li>Optimized internal PHP4 framework to utilize enhancements in PHP5</li>
			<li>Utilized CSS to make site layouts lightweight and Section 508 compliant</li>
			<li>Improved developer's usage of the DOM to use fewer elements and create better structured pages</li>
			<li>Diagrammed database layouts to help developers visualize structures and utilize more normalized data</li>
			<li>Managed server operations for eight (8) Linux hosting servers:
				<ul>
					<li>Configured Apache for new sites upon deployment</li>
					<li>Database server security and administration</li>
					<li>Built and configured new servers when needed</li>
					<li>Mail server administration (exim)</li>
				</ul>
			</li>
			<li>Migrated over 150 websites from a sparse web server environment to a consolidated, load balanced environment:
				<ul>
					<li>Configured upload file synchronization between web servers with unison</li>
					<li>Migrated dangling FTP-only sites to Subversion to keep code consistent</li>
					<li>Configured database master/slave relationship</li>
				</ul>
			</li>
			<li>Optimized major client site to run on one server with a load below 1.00 under heavy traffic instead of four servers with a load above 50.00</li>
			<li>Created a page-flipping system utilizing both Flash and server-side processes to convert PDF documents into zoomable and flippable documents</li>
			<li>Utilized Subversion's capabilities to create a defacement resistance system</li>
			<li>Created a fax service with SOAP, 2D barcodes, and fax modems to allow clients to fax documents into the server and associate the documents with specific items on a website</li>
			<li>Developed desktop application to drag and drop files and send to a secure server for processing by a robotic CD burner and labeler</li>
		</ul>
	</article>
	<article>
		<header>
			<h2>Virginia Beach City Public Schools</h2>
			<div class="position"><strong>Assistant Webmaster</strong></div>
			<div class="dates">October, 2004 - March, 2006</div>
			<div class="location">Virginia Beach, VA</div>
			<div class="url"><a href="http://www.vbschools.com" target="_blank">http://www.vbschools.com</a></div>
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
<section id="Proficiency">
	<h1>Skill Proficiencies</h1>
	<article id="Languages">
		<h2>Languages</h2>
		<dl>
			<dt>HTML4/5        </dt><dd><?php stars(5); ?></dd>
			<dt>JavaScript     </dt><dd><?php stars(5); ?></dd>
			<dt>PHP            </dt><dd><?php stars(5); ?></dd>
			<dt>Shell Scripting</dt><dd><?php stars(5); ?></dd>
			<dt>SQL            </dt><dd><?php stars(5); ?></dd>
		</dl>
		<dl>
			<dt>ASP Classic    </dt><dd><?php stars(4); ?></dd>
			<dt>Go             </dt><dd><?php stars(4); ?></dd>
			<dt>Java           </dt><dd><?php stars(3); ?></dd>
			<dt>Python         </dt><dd><?php stars(2); ?></dd>
			<dt>C              </dt><dd><?php stars(2); ?></dd>
		</dl>
	</article>
	<article id="Software">
		<h2>Software</h2>
		<dl>
			<dt>Subversion     </dt><dd><?php stars(5); ?></dd>
			<dt>Git            </dt><dd><?php stars(4); ?></dd>
			<dt>MySQL          </dt><dd><?php stars(4); ?></dd>
			<dt>Mercurial (hg) </dt><dd><?php stars(3); ?></dd>
			<dt>SQLServer      </dt><dd><?php stars(2); ?></dd>
		</dl>
	</article>
	<article id="Platforms">
		<h2>Platforms</h2>
		<dl>
			<dt>Linux          </dt><dd><?php stars(5); ?></dd>
			<dt>Mac            </dt><dd><?php stars(3); ?></dd>
			<dt>Windows        </dt><dd><?php stars(3); ?></dd>
		</dl>
	</article>
</section>
</body>
</html>

