<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', '');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

// enable debugging on localhost
c::set('debug', in_array(
  r::ip(), array('127.0.0.1', '::1')
));

// use languages by default
c::set('languages', array(
  array(
    'code'    => 'en',
    'default' => true,
    'locale'  => 'en_US.utf-8',
    'name'    => 'English',
    'url'     => '/'
  )
));

// set correct timezone
c::set('timezone', 'CET');

// set image compression
c::set('thumbs.quality', 70);
