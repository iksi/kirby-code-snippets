<!doctype html>
<html lang="<?php echo $site->language() ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>
      <?php echo $site->fullTitle()->html() ?>
    </title>
    <?php if(!$page->isErrorPage() && !$page->description()->empty()): ?>
    <meta name="description" content="<?php echo $page->description() ?>">
    <?php endif ?>
    <?php echo css('assets/css/dist/styles.min.css') ?>
  </head>
<body>
