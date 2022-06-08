<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];  
$serviceCode = $_POST["serviceCode"];  
$text = $_POST["text"];
//This is the first menu screen
if ( $text == "" ) {
$response  = "CON Hi welcome to Chinhoyi City Council online platform. \n";
$response .= "1. Enter 1 to continue";
}
// Menu for a user who selects '1' from the first menu
// Will be brought to this second menu screen
else if ($text == "1") {
$response  = "CON  Please enter your meter number \n";
$response .= "1. Amy Mufunda 1234567A meter \n";
}
//Menu for a user who selects '1' from the second menu above
// Will be brought to this third menu screen
else if ($text == "1*1") {
$response = "CON You want to recharge your meter \n";
$response .= "Please Enter 1 to confirm \n";
}
else if ($text == "1*1*1") {
$response = "CON Enter recharge amount \n";
$response .= " \n";
$response .= "Enter 0 to cancel";
}
else if ($text == "1*1*1*10") {
$response = " You have successfully recharged your meter with RTGS$10";
}
else if ($text == "1*1*1*0") {
$response = "END Your recharge session was cancelled";
}
//echo response
header('Content-type: text/plain');
echo $response
?>