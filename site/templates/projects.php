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
    <p>Some of the exercises have to do with working on your class site itself. For others, you should have a link to the exercise results from your class website, listed below. 
    </p>
    <ul>
      <li>Collective Alphabet</li>
      <li>Figma Sketches for Project 1</li>
      <li>Inspector Exercise Screenshot</li>
      <li>CSS Still Life with :hover state</li>
      <li>Poster Exercise</li>
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

    <h1 id="ex-title">Codecademy</h1>
    <p>On your class site, please also provide a link to your <a href="https://www.codecademy.com">Codecademy</a> Badges. To find your Badges URL, log into Codecademy, then click on your icon to go to <strong>Profile > Badges</strong>
    </p>

  </main>

<?php snippet('footer') ?>