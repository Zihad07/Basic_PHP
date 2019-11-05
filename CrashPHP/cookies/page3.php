<?php 

$user = [
    'name'=>'nahid',
    'email'=>'nahid@gmail.com',
    'password'=>'1234'

];

$user = json_encode($user);

setcookie('user',$user,time()+8);

print_r($user);

$user = json_decode($user,true);
print_r($user);



?>