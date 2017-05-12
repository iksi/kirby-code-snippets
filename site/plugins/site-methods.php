<?php

/**
 * Returns a Field object with the window title
 */
site::$methods['windowTitle'] = function($site) {
  $page = $site->page();

  $pageTitle = $page->title()->value();
  $siteTitle = $site->title()->value();

  if($page->isHomepage()) {
    $windowTitle = $siteTitle;
  } else {
    $windowTitle = "{$pageTitle} - {$siteTitle}";
  }

  return new Field($site, 'windowTitle', $windowTitle);
};
