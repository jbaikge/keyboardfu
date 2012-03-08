<article>
	<header>
		<h2><?php e($article->title); ?></h2>
		<time><?php echo FString::date($article->published); ?></time>
	</header>
	<?php echo $article->abstract; ?>
	<footer>
		<div class="readMore"><a href="/<?php echo $article->url; ?>">Read More</a></div>
	</footer>
</article>
