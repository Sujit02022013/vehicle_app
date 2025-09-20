<?php
// Given array of strings

$strings = ["Bangladesh", "Laravel", "PHP", "Assignment"];

// Function to count consonants in a string
 function countConsonants ($str){

  // convert string to lower case for easy comarison
  $lower = strtolower($str);

  //Define vowels
  $vowels = ['a', 'e', 'i', 'o', 'u'];

  $count = 0;

  //Loop through each character

  for ($i=0; $i< strlen($lower); $i++) {
    $char = $lower[$i];
    //Check if the character not a vowel
    if(ctype_alpha($char) && !in_array($char, $vowels)) {
      $count++;
    }
  }
  return $count;
 }

 // Process each string

 foreach ($strings as $str){
  $consonantCount = countConsonants($str);
  $uppercase = strtoupper($str);

  //Output in browser

  echo "Original String: $str, Consonant Count: $consonantCount, Uppercase String: $uppercase<br>";

 }




?>