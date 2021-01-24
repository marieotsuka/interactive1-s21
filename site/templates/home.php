<?php snippet('header') ?>

	<main class="main homepage" role="main"> 

	<?php foreach(page('calendar')->children()->sortBy('order', 'desc')->limit(1) as $week): ?>
		<div class="circle">
			<h3 style="padding: 20px 0px 10px;">Currently → <?php echo $week->title() ?>: <?php echo $week->topic() ?></h3>
			<?php echo $week->text()->kirbytext() ?>
		</div>
	<?php endforeach ?>

		<div class="syllabus">
			<h1 id="title">Interactive 1</h1>
			<div class="links">
				<?= $page->links()->kirbytext() ?>
			</div>
			<?= $page->intro()->kirbytext() ?>
			<span class="show-more">Show more</span>
		
			<div class="more">
				<?= $page->more()->kirbytext() ?>
			</div>
		</div>

		<div class="links people">
			<h3>People</h3>
			<?= $page->people()->kirbytext() ?>
		</div>

	</main>

<?php snippet('footer') ?>