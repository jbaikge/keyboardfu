	<aside id="ArticleAside">
		<section class="recent">
			<h1>Recent</h1>
			<dl>
<?php foreach (Archive::getInstance()->getLastN($_ENV['config']['latest']) as $a) { ?>
				<dt><a href="<?php e($a->url); ?>"><?php e($a->title); ?></a></dt>
				<dd><?php echo FString::date($a->published); ?></dd>
<?php } ?>
			</dl>
		</section>
		<section class="archives">
			<h1>Archives</h1>
			<ol>
<?php foreach (Archive::getInstance()->getCalendarTree() as $month => $count) { ?>
				<li><a href="<?php echo FString::date($month, "Y/m"); ?>"><?php echo FString::date($month, 'M Y'); ?></a><sup><?php echo $count; ?></sup></li>
<?php } ?>
			</ol>
		</section>
		<section class="tags">
			<h1>Tags</h1>
			<ol>
<?php foreach (Tags::getInstance() as $tag) { ?>
				<li><a href="/tag/<?php echo rawurlencode($tag); ?>"><?php e($tag); ?></a></li>
<?php } ?>
			</ol>
		</section>
	</aside>
