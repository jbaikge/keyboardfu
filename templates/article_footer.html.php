<?php
// Fall out of the template if it's a single-page article
if ($article->pages == 1) {
	return;
}
?>
<footer>
	<nav>
		<ol>
<?php echo $paging_links; ?>
		</ol>
	</nav>
</footer>
