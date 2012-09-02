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
			margin-left:4.5em;
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
			padding-top:0.75em;
		}
		#Experience header > hgroup {
			float:left;
		}
		#Experience header h2 {
			margin-top:0;
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
		#Experience article > p,
		#Experience article > ul,
		#Work article > ul {
			clear:left;
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
		<p>Exercise currently mastered skills, while growing abilities, to build successful exploratory projects which utilize Go, PHP, dynamic data, distributed computing, and Web frontends.</p>
	</article>
</section>
<section id="Experience">
	<h1>Experience</h1>
	<article>
		<header>
			<hgroup>
				<h2>300Brand</h2>
				<h3>Lead Web Developer</h3>
			</hgroup>
			<div class="position">Additional Roles:<br>System Administrator<br>Database Administrator</div>
			<div class="formerly">Formerly O'Keeffe &amp; Company</div>
			<div class="dates">March, 2009 - Present</div>
			<div class="location">Alexandria, VA</div>
			<div class="url"><a href="http://300brand.com" target="_blank">http://300brand.com</a></div>
		</header>
		<ul>
			<li> Lead developer on various teams to concept, design, develop, and maintain websites for more than 30 internal and external clients:
				<ul>
					<li>Actively represented the development teams in client conferences in-person and over the phone; communicated directly with client representatives and account leads</li>
					<li>Converted site file management of all sites from FTP to Subversion</li>
				</ul>
			</li>
			<li>Developed PHP 5.3+ framework for company websites:
				<ul>
					<li>Enhanced performance through trace analysis to optimize memory and time usage; achieved 100kb and 40ms initialization</li>
					<li>May, 2012 - Released framework to open source community:<br><a href="http://github.com/jbaikge/framework" target="_blank">http://github.com/jbaikge/framework</a></li>
				</ul>
			</li>
			<li>Developed and launched multi-functional creative traffic and ticket management system:
				<ul>
					<li>Delivered alternative to email to enable better cross-team visibility and historical referencing</li>
					<li>Improved team productivity by providing workload visibility, lowering erroneous communication and increasing work distribution</li>
				</ul>
			</li>
			<li>Grew development team by 300%:
				<ul>
					<li>Managed staffing, including requirements assessment; acquisition; and training</li>
					<li>Managed development team's day-to-day, as well as ongoing job performance and growth, including metrics tracking; team communications and progress reports; and annual reviews</li>
					<li>Utilized IRC and IRC bots to communicate development actions</li>
				</ul>
			</li>
			<li>Leveraged existing technology to maximize the company's return on investment
				<!--
				<ul>
					<li>Developers could pull a copy of the production database at any point in history</li>
					<li>Only diffs stored, keeping storage requirements low</li>
				</ul>
				-->
			</li>
			<li>Evaluated technology and implemented the organization's first ever staging server
				<!--
				<ul>
					<li>Subversion post-commit hooks pushed changes to server</li>
					<li>New branches become subdomains of the site domain (new-branch.clientdomain.com)</li>
					<li>Databases always kept fresh by using the latest nightly backup</li>
					<li>DNS configuration allowed internal and external review of changes</li>
				</ul>
				-->
			</li>
		</ul>
	</article>
	<article>
		<header>
			<hgroup>
				<h2>Web Teks, Inc.</h2>
				<h3>Lead Web Developer</h3>
			</hgroup>
			<div class="position">Additional Roles:<br>Database Administrator<br>System Administrator</div>
			<div class="dates">March, 2006 - May, 2009</div>
			<div class="location">Chesapeake, VA</div>
			<div class="url"><a href="http://www.webteks.com" target="_blank">http://www.webteks.com</a></div>
		</header>
		<ul>
			<li>Converted site file management of all sites from FTP to Subversion</li>
			<li>Managed maintenance and build-outs for over 150 clients</li>
			<li>Optimized internal PHP4 framework to utilize enhancements in PHP5</li>
			<li>Managed server operations for eight (8) Linux hosting servers:
				<ul>
					<li>Configured Apache for new sites upon deployment</li>
					<li>Database server security and administration</li>
					<li>Built and configured new servers when needed</li>
					<li>Mail server administration (exim)</li>
				</ul>
			</li>
			<li>Migrated over 150 websites from a sparse Web server environment to a consolidated, load balanced environment:
				<ul>
					<li>Configured upload file synchronization between Web servers with unison</li>
					<li>Migrated dangling FTP-only sites to Subversion to keep code consistent</li>
					<li>Configured database master/slave with an extra chained slave to take backups from</li>
				</ul>
			</li>
			<li>Optimized major client site to run on one server with a load below 1.00 under heavy traffic instead of four servers with a load above 50.00</li>
			<li>Utilized Subversion's capabilities to create a defacement resistance system</li>
			<li>Created a fax service with SOAP, 2D barcodes, and fax modems to allow clients to fax documents into the server and associate the documents with specific items on a website</li>
			<li>Developed desktop application to drag and drop files and send to a secure server for processing by a robotic CD burner and labeler</li>
		</ul>
	</article>
	<article>
		<header>
			<hgroup>
				<h2>Virginia Beach City Public Schools</h2>
				<h3>Assistant Webmaster</h3>
			</hgroup>
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
<section id="Work">
	<h1>Work Samples</h1>
	<article>
		<p>The following are examples of recent development websites:</p>
		<ul>
			<li>GTSY - Good To See You; A social network to support an internal G-1 priority mission within the U.S. Army</li>
			<li>495 Express Lanes - <a href="http://495expresslanes.com" target="_blank">http://495expresslanes.com</a></li>
			<li>MeriTalk - <a href="http://meritalk.com" target="_blank">http://meritalk.com</a></li>
			<li>PRSourceCode - <a href="http://prsourcecode.com" target="_blank">http://prsourcecode.com</a></li>
			<li>Telework Exchange - <a href="http://teleworkexchange.com" target="_blank">http://teleworkexchange.com</a></li>
		</ul>
	</article>
</section>

<section id="Proficiency">
	<h1>Skill Proficiencies</h1>
	<article id="Languages">
		<h2>Languages</h2>
		<dl>
			<dt>CSS2/3         </dt><dd><?php stars(5); ?></dd>
			<dt>HTML4/5        </dt><dd><?php stars(5); ?></dd>
			<dt>JavaScript     </dt><dd><?php stars(5); ?></dd>
			<dt>PHP            </dt><dd><?php stars(5); ?></dd>
			<dt>Shell Scripting</dt><dd><?php stars(5); ?></dd>
			<dt>SQL            </dt><dd><?php stars(5); ?></dd>
			<dt>XML            </dt><dd><?php stars(5); ?></dd>
		</dl>
		<dl>
			<dt>ASP Classic    </dt><dd><?php stars(4); ?></dd>
			<dt>Go             </dt><dd><?php stars(4); ?></dd>
			<dt>XSLT           </dt><dd><?php stars(4); ?></dd>
			<dt>Java           </dt><dd><?php stars(3); ?></dd>
			<dt>Python         </dt><dd><?php stars(2); ?></dd>
			<dt>C              </dt><dd><?php stars(2); ?></dd>
		</dl>
	</article>
	<article id="Software">
		<h2>Software</h2>
		<dl>
			<dt>MySQL          </dt><dd><?php stars(5); ?></dd>
			<dt>Sublime Text 2 </dt><dd><?php stars(5); ?></dd>
			<dt>Subversion     </dt><dd><?php stars(5); ?></dd>
			<dt>Vim            </dt><dd><?php stars(5); ?></dd>
			<dt>Git            </dt><dd><?php stars(4); ?></dd>
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

