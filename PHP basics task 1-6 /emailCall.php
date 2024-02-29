<?php

require('creds.php');
require('EmailValidator.php');

$email = $_POST["email"];
// Create an object of EmailValidator class.
$Ev = new EmailValidator();
// Call the ValidateEmail function with the email and api key.
// It will either return true or false.
$result=$Ev->validateEmail($email, $api_key);
// If the result is true it prints that it is valid , else it prints not valid.
if($result==true){
  echo "$email is a valid email address";
}
else{
  echo "$email is a not valid email address";
}