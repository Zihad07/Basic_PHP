<?php
class MyException extends Exception{}
class NetworkException extends Exception{}

function testException(){
    // throw new NetworkException();


    echo 1/0;
}


try{
    testException();
}catch(MyException $e){
    echo "MyException Caught\n";
}catch(NetworkException $e){
    echo "NetworkExcepion Caught\n";
}catch(Exception $e){

    // echo "Exception Caught\n";
    // if($e->getMessage() != ""){
    //     echo $e->getTrace();
    //     echo $e->getTraceAsString();
    //     echo $e->getMessage();
    // }
}finally{
    echo "\nCleaned Up.";
}