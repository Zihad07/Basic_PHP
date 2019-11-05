<?php 

// update Cookie
// setcookie('username','Shuvo',time()+5);
// Delete Cookie
// setcookie('username','',time()-3660);
if(count($_COOKIE) > 0){
    echo 'There are '.count($_COOKIE). ' cookies saved<br>';
    print_r($_COOKIE);
}else{
    echo 'There are no cookies saved<br>';
}
    
if(isset($_COOKIE['username'])){
    echo 'User '.$_COOKIE['username'].' is set<br>';
}else{
    echo 'User is not set';
}




?>