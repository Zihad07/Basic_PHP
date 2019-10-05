
<?php

// set time zone
$defult_Time_zone = date_default_timezone_get();
echo $defult_Time_zone.PHP_EOL;
date_default_timezone_set("Asia/Dhaka");
echo date('l').PHP_EOL;
echo date('dS F,Y').PHP_EOL;
echo date('d m, y').PHP_EOL;
echo date('dS m, y').PHP_EOL;
echo date('dS F, Y').PHP_EOL;
echo date('dS F, Y h:i:s a').PHP_EOL;
echo date('dS F, Y H:i:s a').PHP_EOL;
echo date('dS F, Y H:i:s a',time()+24*60*60).PHP_EOL;
echo date('z').PHP_EOL;