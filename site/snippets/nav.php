<nav>
  <ul>
    <?php foreach($pages->visible() as $subpage): ?>
    <li>
      <a href="<?php echo $subpage->url() ?>">
        <?php echo $subpage->title()->html() ?>
      </a>
    <?php endforeach ?>
  </ul>
</nav>
