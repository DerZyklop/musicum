<nav role="navigation">
  <ul class="menu cf">
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <?php if ($p->isVisible()): ?>
        <a class="smooth-scroll<?php e($p->isOpen(), ' active"') ?>" href="#<?php echo $p->uri() ?>"><?php echo $p->title()->html() ?></a>
      <?php endif ?>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
