<?php snippet('header') ?>


  <main class="main">

    <h1 id="title"><?= $page->title()->html() ?></h1>
    
    <?php echo $page->text()->kirbytext() ?>

    <ul class="projects">

    <?php foreach($page->children()->visible()->filterBy('project', '1')->sortBy('title') as $text): ?>
      <li class="project-row">
        <a href="<?php echo $text->url() ?>" class="project">
            <?php echo $text->title()->html() ?>
        </a>
      </li>
    <?php endforeach ?>
    </ul>


    <h1 id="ex-title">Exercises</h1>

    <ul class="exercises">
    <?php foreach($page->children()->visible()->filterBy('project', '0')->sortBy('title') as $text): ?>
      <li class="project-row">
        <a href="<?php echo $text->url() ?>" class="project">
            <?php echo $text->title()->html() ?>
        </a>
      </li>
    <?php endforeach ?>

    </ul>

  </main>

<?php snippet('footer') ?>