<?php


$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$phone = $_POST['phone'];

$email = "meredithlada@gmail.com";
$subject = "Event Inquiry: " + $_POST['subject'];
$message = "$name, you have been challeneged to a game of pool!";


mail("meredithlada@gmail.com",$subject,$message);

?>
