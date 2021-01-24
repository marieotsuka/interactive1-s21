<?php snippet('header') ?>

  <main class="main" role="main">

	<h1 id="title"><?= $page->title()->html() ?></h1>

    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>