<article class="grid_9">
<?php
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
