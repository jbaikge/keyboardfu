<section class="article">
	<aside>
		<div class="date">
			<span class="month"><?php echo FString::date($article->published, 'M'); ?></span>
			<span class="day"><?php echo FString::date($article->published, 'd'); ?></span>
			<span class="year"><?php echo FString::date($article->published, 'Y'); ?></span>
		</div>
		<div class="author"><?php echo $article->author; ?></div>
		<div class="email"><span><?php echo 'jake'; ?></span><span><?php echo 'keyboardfu.com'; ?></span></div>
		<div class="tagHeading">Tags</div>
		<ol class="tags">
<?php foreach ($article->tags as $tag) { ?>
			<li><a href="/tag/<?php echo rawurlencode($tag); ?>"><?php e($tag); ?></a></li>
<?php } ?>
		</ol>
		<div class="comments"><a href="<?php echo $article->url; ?>#Comments">Comments</a></div>
	</aside>
	<article>
<?php
if ($page > 1) {
	echo "\t\t<h1>{$article->title}</h1>\n";
}
echo FTemplate::fetch($article->getPage($page));

?>
	<div id="Comments"></div>
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
