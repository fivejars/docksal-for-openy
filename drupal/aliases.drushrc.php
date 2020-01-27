<?php

$aliases['default'] = [
  'root' => '/var/www/docroot',
  'uri' => 'http://' . $_SERVER['VIRTUAL_HOST'],
];

foreach (['rose', 'lily', 'carnation'] as $theme) {
  $aliases[$theme] = $aliases['default'];
  $aliases[$theme]['uri'] = 'http://' . $theme . '.' . $_SERVER['VIRTUAL_HOST'];
}
