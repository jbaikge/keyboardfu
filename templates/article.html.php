<article class="grid_9">
<?php
if ($page > 1) {
	echo "<h1>{$article->title}</h1>\n";
}
echo $body;

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
</article>
<aside class="grid_3">
	Aside content
</aside>
