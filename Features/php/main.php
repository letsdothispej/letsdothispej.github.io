<?php
date_default_timezone_set('Asia/Manila');

$to = "pheej.azanes@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: azanespaul@gmail.com";

mail($to,$subject,$txt,$headers);
?>
