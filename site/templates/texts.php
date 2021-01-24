<?php snippet('header') ?>
   	
	<main class="main">
	   	<h1 id="title"><?= $page->title()->html() ?></h1>

    	<?php echo $page->text()->kirbytext() ?>

		<ul class="library">

		<?php foreach($page->children()->visible()->sortBy('author_last', 'author_first', 'title') as $text): ?>
			<li class="library-row">
				<a href="<?php echo $text->url() ?>" class="library-item">
		    		<span class="title"><?php echo $text->author_last()->html() ?>, <?php echo $text->title()->html() ?></span>
		    		<div class="year"><?php echo $text->year()->html() ?></div>
		  		</a>
			</li>
		<?php endforeach ?>
		</ul>
	</main>
<?php snippet('footer') ?>