<?php
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

switch (trim(strtolower($level))) {

    case 0:
        $response = getHomeMenu();
        break;
    case 1:
        $response = firstMenuSwitch(end($exploded_text));
        break;
    case 2:
        $response = "Exit";

        break;

    default:
        $response = "This is x levels higher than the home menu";
        break;

}

header('Content-type: text/plain');
echo "CON ".$response;
exit;



function getHomeMenu(){
    $response = "Welcome to Case Law Service \n 1.Case Search \n 2.Cause List \n 3.Exit";
    return $response;
}



function firstMenuSwitch($choice){
    switch (trim(strtolower($choice))) {

        case 1:
            $response = "Enter Case Number";

            break;
        case 2:
            $response = "Enter Case Parties";

            break;

        default:
            $response = "Invalid Entry.".PHP_EOL.getHomeMenu();

            break;

    }
return $response;
}