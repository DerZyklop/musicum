<section id="<?= $section->uid() ?>">

  <div class="content-wrap">
    <h2><?= $section->title() ?></h2>
    <?php foreach (yaml($section->Videolist()) as $youtubeID): ?>
      <?= kirbytext('(youtube: https://www.youtube.com/watch?v=' .
        $youtubeID . ' width: 100% height: 500px)') ?>
    <?php endforeach ?>
    <p><?= kirbytext($section->text()) ?></p>
  </div>

</section>
