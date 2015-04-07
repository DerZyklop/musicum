<section id="<?= $section->uid() ?>">
  <div class="content-wrap">
    <h2><?= $section->title() ?></h2>
    <p><?= kirbytext($section->text()) ?></p>
  </div>
</section>
