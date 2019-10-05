<?php

echo mktime(0,0,0,9,29,2018).PHP_EOL;
echo strtotime('29 September, 2018').PHP_EOL;

echo time()."\n";
echo strtotime('now')."\n";

echo strtotime('+3days')."\n";

echo (strtotime("+3days") - strtotime('now')) / (86400).PHP_EOL;
echo (strtotime("+2weeks 3days") - strtotime('now')) / (86400).PHP_EOL;
echo (strtotime("+2weeks 3days 24hours") - strtotime('now')) / (86400).PHP_EOL;
echo (strtotime("+2weeks 3days 24hours 86400seconds") - strtotime('now')) / (86400).PHP_EOL;
