<?php
/**
 * Created by PhpStorm.
 * User: lameckonyango
 * Date: 4/16/15
 * Time: 4:11 PM
 */

//echo "CON  I am coming Home";
//exit;
$text       = $_REQUEST["text"];
/* Split text input based on asteriks(*)
 * Africa's talking appends asteriks for after every menu level or input
 * One needs to split the response from Africa's Talking in order to determine
* the menu level and input for each level
* */
if(!empty($text)){
    $exploded_text = explode("*", $text);
    // Get menu level from ussd_string reply
    $level = count($exploded_text);
}else{
    $level = 0;
}

switch ($level) {
    case 0:
        $response = getHomeMenu();
        break;

    case 1:
    $response = getCaseNumberLevelone(end($exploded_text));
    break;


 /*   case 2:
        $response = getCaseNumberlevelTwo($exploded_text);
        break;
*/
    default:
        $response = getHomeMenu();
        break;
}
header('Content-type: text/plain');
echo "CON ".$response;
exit;

//First menu function
function getHomeMenu(){
    $response = "Welcome to Case Law Service \n 1.Case Search \n 2.Cause List \n 3.Exit";
    return $response;
}
//second menu function
function getCaseNumberLevelone($choice){
if ($choice == 1) {
    $response = "Enter Case Number";
}
    else if ($choice == 2){
        $response = "Enter Case Number 2";
    }
    return $response;

}
/*
function getCaseNumberlevelTwo($exploded_text){

            $response = "Enter Case Number 2";

    return $response;
}
*/