<?php

$toemail = "Nick@businessonmarketst.com";
$name = $_REQUEST['name'];
$fromemail = $_REQUEST['email'];
$message = $_REQUEST['message'];

$headers = "From:" . $fromemail;

$siteURL = $_REQUEST['currentpageurl'];

mail($toemail,'Contact Form Email',$message,$headers);
header("Location:".$siteURL); 

?>