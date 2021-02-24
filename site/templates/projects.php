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
    <p>You should have the following links from your class website:
    </p>
    <ul>
      <li>Collective Alphabet</li>
      <li>Figma Sketches for Project 1</li>
      <li>Inspector Exercise Screenshot</li>
      <li>CSS Still Life with :hover state</li>
    </ul>
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