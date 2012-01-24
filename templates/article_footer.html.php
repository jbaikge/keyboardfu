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
if ($page == 1) {
	echo "\t\t\t<li>&laquo; Prev</li>\n";
} else {
	printf("\t\t\t<li><a href=\"/%s/%d\">&laquo; Prev</a></li>\n", $article->url, $page - 1);
}

foreach (range(1, $article->pages) as $num) {
	if ($num == $page) {
		printf("\t\t\t<li>%d</li>\n", $num);
	} else {
		printf("\t\t\t<li><a href=\"/%s/%d\">%d</a></li>\n", $article->url, $num, $num);
	}
}

if ($page == $article->pages) {
	echo "\t\t\t<li>Next &raquo;</li>\n";
} else {
	printf("\t\t\t<li><a href=\"/%s/%d\">Next &raquo;</a></li>\n", $article->url, $page + 1);
}
?>
		</ol>
	</nav>
</footer>
