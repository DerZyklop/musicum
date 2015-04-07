<section id="<?= $section->uid() ?>" class="fullsize"
  <?php if ($section->hasImages()): ?>
    style="background-image: url(<?= $section->images()->first()->url() ?>);"
  <?php endif ?>
>
  <div class="content-wrap">
    <h2><?= $section->title() ?></h2>
    <div class="arrow-down">
        <?php $p = $pages->find('start') ?>
        <?php if ($p->next()->isVisible()): ?>
          <a class="arrow-down-inner smooth-scroll<?php e($section->isOpen(), ' active') ?>" href="#<?php echo $section->next()->uri() ?>"></a>
        <?php endif ?>
    </div>
  </div>
</section>
