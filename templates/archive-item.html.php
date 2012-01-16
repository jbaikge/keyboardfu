<article>
	<h2><?php e($article->title); ?></h2>
	<?php echo $article->abstract; ?>
	<footer>
		<time>Published: <?php echo FString::date($article->published); ?></time>
		<div class="readMore"><a href="/<?php echo $article->url; ?>">Read More</a></div>
	</footer>
</article>
