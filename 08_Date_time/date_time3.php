<?php
echo time()."\n";

echo mktime(0,0,0,10,5,2019).PHP_EOL;

date_default_timezone_set('Asia/Dhaka');
echo mktime(0,0,0,10,5,2019).PHP_EOL;
echo gmmktime(0,0,0,10,5,2019).PHP_EOL;

echo (33600-12000)/(60*60)."\n";




