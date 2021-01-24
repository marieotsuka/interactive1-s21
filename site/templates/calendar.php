<?php snippet('header') ?>

    <main class="main" role="main"> 

    <h1 id="title"><?= $page->title()->html() ?></h1>

    <ul class="calendar">

        <?php foreach($page->children()->visible()->sortBy('order', 'desc') as $week): ?>
        <li class="calendar-row <?php if($week->current() == '1'): ?> current-week <?php endif ?>">
            <div class="days">
                <?php echo $week->dates()->html() ?>
            </div>
            <div class="title">
                <span class="week"><?php echo $week->title()->html() ?></span><span class="topic"><?php echo $week->topic()->html() ?></span>
            </div>
            <div class="body">
                <?php echo $week->text()->kirbytext() ?>
            </div>
        </li>
        <?php endforeach ?>
    </ul>

    </main>

<?php snippet('footer') ?>