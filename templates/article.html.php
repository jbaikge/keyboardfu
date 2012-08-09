<section class="article">
	<aside>
		<div><?php echo FString::date($article->published); ?></div>
	</aside>
	<article>
<?php
if ($page > 1) {
	echo "\t\t<h1>{$article->title}</h1>\n";
}
echo FTemplate::fetch($article->getPage($page));

?>
	</article>
<?php
if ($article->pages > 1) {
?>
	<footer>
		<nav>
			<ol><?php echo $paging_links; ?></ol>
		</nav>
	</footer>
<?php
} // $article->pages > 1
?>
</section>
