<?php

//Write a function that checks if a string is all lower case.


function palindromeDetector(){
  if(isset($_POST['string'])) {
  $string = $_POST['string'];
  $lowerCase = strtolower($string);
  $rstring = strrev ($lowerCase);
  if($lowerCase == $rstring) {
    echo "<br><em><u>" . $string ."</em></u> is a Palindrom!";
  } else {
    echo "<br><em><u>" . $string . "</em></u> is not a Palindrom";
  }
}
}
