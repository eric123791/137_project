<?php
//processFeedback.php

//Construct the message to be sent to the business
$messageToBusiness =
    "From: " .$_POST['name']."\r\n" .
    "E-mail address: ".$_POST['email']."\r\n".
    "Confirmation: ".$_POST['ticketType']." Tickets \r\n".
    "Detail: \r\n".
    "Dates: " .$_POST[date]."\r\n".
    "Team: " .$_POST[team]."\r\n".
    "Number of Tickets: " .$_POST[numTickets]."\r\n".

//Send the e-mail feedback message to the business (but here, to the webbook site)
$headerToBusiness = "From: $_POST[email]\r\n";
mail("hhsin@uci.edu", "Confirmation: ".$_POST['ticketType']." Tickets \r\n", $messageToBusiness, $headerToBusiness);

//Construct the confirmation message to be e-mailed to the client
$messageToClient =
    "Dear ".$_POST['name']. ",\r\n".
    "The following sale was received from you by TicketzHub:\r\n\r\n".
    $messageToBusiness.
    "------------------------\r\nThank you for the support.\r\n" .
    "The TicketzHub team\r\n------------------------\r\n";
    $messageToClient .= "P.S. We will contact you later with more information on your product.";

//Send the confirmation message to the client
$headerToClient = "From: hhsin@uci.edu\r\n";
mail($_POST['email'], "Confirmation: ".$_POST['ticketType']." Tickets \r\n" , $messageToClient, $headerToClient);

//Transform the confirmation message to the client into XHTML format and display it
$display = str_replace("\r\n", "<br />\r\n", $messageToClient);
$display =
    "<html><head><title>Your Message</title></head><body><tt>".
    $display.
    "</tt></body></html>";
echo $display;

//Log the message in a file called feedback.txt on the web server
$fileVar = fopen("../data/saleorder.txt", "a")
    or die("Error: Could not open the log file.");
fwrite($fileVar, "\n-------------------------------------------------------\n")
    or die("Error: Could not write to the log file.");
fwrite($fileVar, "Date received: ".date("jS \of F, Y \a\\t H:i:s\n"))
    or die("Error: Could not write to the log file.");
fwrite($fileVar, $messageToBusiness)
    or die("Error: Could not write to the log file.");
?>
