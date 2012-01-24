<div class="grid_8">
	<?php echo FTemplate::fetch('cache/static/index.html.php'); ?>
</div>
<aside class="grid_4">
	<div id="LatestArticle" class="sideBox">
		<label for="LatestArticle">Latest Article</label>
		<?php echo FTemplate::fetch('templates/archive-item.html.php', array('article' => &$latest)); ?>
	</div>
</aside>
