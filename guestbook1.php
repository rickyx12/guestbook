<?php
include("db.php");
$guest = new db();
$user = $_POST['user'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$guest->addGuest($user,$subject,$message);

?>
