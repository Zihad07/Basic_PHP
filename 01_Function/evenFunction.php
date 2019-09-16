<?php
/**
 * Determines if the argument is even or odd.
 */

 function isEven($n){
     return ($n % 2 == 0) ? true : false;
 }

 /**
  * Determain n factorails
  */

  function factorial($n){

     if(gettype($n)!="integer"){
         return "Invalid.";
     }
      $result = 1;
    

      while($n){
          $result *= $n--;
      }

      return $result;
  }

  /**
  * Robot serve function
  * with default value.
  */

  function serve($foodType="Tea", $numberOfItems = "1 cup"){
    echo "{$numberOfItems} of {$foodType} has/have been served".PHP_EOL;
  }

  /**
  * Unlimitade prameter sum
  */

  function sum(int ...$number):int{
    $result = 0;
    for($index = 0; $index < count($number); $index++){
      $result += $number[$index];
    }

    return $result;
  }

