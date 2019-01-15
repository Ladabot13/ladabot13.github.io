<?php

if($_POST){
$name = $_POST['name'];
$email = $_POST['email'];
$subject = "RAK EM UP";
$message = "$name, you have been challeneged to a game of pool!";

mail($email,$subject,$message);
}
?>