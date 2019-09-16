<?php

$default_lat = 23.1;
$default_lon = 90.8;

$user_lat;
// $user_lat = 9.9;

// $lat = isset($user_lat) ? $user_lat : $default_lat;

// Alternative way , we use NULL COALESCE Operator ??

$lat = $user_lat ?? $default_lat;

echo $lat.PHP_EOL;