<?php snippet('header') ?>

  <?php snippet('menu') ?>
  <main class="main" role="main">

    <?php foreach($pages->visible() as $section): ?>
      <?php if(file_exists($kirby->roots->snippets() . '/' . $section->content()->name() . '.php')): ?>
        <?php snippet($section->content()->name(), array('section' => $section)); ?>
      <?php else: ?>
          <?php snippet('default', array('section' => $section)); ?>
      <?php endif ?>
    <?php endforeach ?>

  </main>

<?php snippet('footer') ?>
