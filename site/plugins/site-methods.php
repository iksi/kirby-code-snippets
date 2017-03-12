<?php

/**
 * returns a Field object with the fullTitle for the in title bar
 */
site::$methods['fullTitle'] = function($site) {
  $page = $site->page();
  $pageTitle = $page->title()->value();
  $siteTitle = $site->title()->value();

  if ($page->isHomepage()) {
    $fullTitle = $siteTitle;
  } else {
    $fullTitle = "$pageTitle – $siteTitle";
  }

  return new Field($site, 'fullTitle', $fullTitle);
};
