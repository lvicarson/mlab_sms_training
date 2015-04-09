<?php

//echo "Hello World";
//Declaring variables
//$i =1;
//echo $i;
//$name = "steve";
//echo $name;

$phone_no = array("123132131","123123123");
$message = "Download songs from wwww.sing.com";
//I want to reach all my customers via SMS
//noun: customers, SMS
//Verb: reach
//Customer: phone_number
//SMS:message, recipients
//actors: customer, owner (admin), staff,
//admin, staff should have the ability to send a message, upload a number

function showOutput(output){
  if(is_array(output)){
    print_r($output);
    }
 else{
     echo $output;
    }
}
?>