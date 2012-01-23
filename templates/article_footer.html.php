<?php
// Fall out of the template if it's a single-page article
if ($article->pages == 1) {
	return;
}
?>
<footer>
	<nav>
		<ol>
<?php
foreach (range(1, $article->pages) as $num) {
	if ($num == $page) {
		printf("\t\t\t<li>%d</li>\n", $num);
	} else {
		printf("\t\t\t<li><a href=\"/%s/%d/\">%d</a></li>\n", $article->url, $num, $num);
	}
}
?>
		</ol>
	</nav>
</footer>
