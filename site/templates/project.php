<?php snippet('header') ?>

  <main class="main" role="main">

	<h1 id="title"><?= $page->title()->html() ?></h1>
    
    <?php echo $page->text()->kirbytext() ?>
    
  </main>
  
<?php snippet('footer') ?>