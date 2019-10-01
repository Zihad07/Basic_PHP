<?php
setcookie('array[name]','Sayem','/07_cookie/other_cookie',time()+5);
setcookie('array[id]','101','/07_cookie/other_cookie',time()+5);
// setcookie('array',json_encode(array('name'=>'nahid','email'=>'nahid@gmail.com')),'/07_cookie/other_cookie',time()+5);
setcookie('active','cookie active',time()+5);
echo $_COOKIE['active'];