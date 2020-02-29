<?php

$name=$_POST['name'];

$email=$_POST['email'];

$userDefinedSubject=$_POST['dropdown'];

$whichApp=$_POST['app'];

$message=$_POST['message'];

$formcontent="From: $name \nMessage: $message \nRegarding: $whichApp";

$subject="[Harvard Referencing App] " . $userDefinedSubject . " regarding " . $whichApp;

$mailheader="From: $email \r\n";

mail("jimbillroo@gmail.com",$subject,$formcontent,$mailheader) or die("Error!");

header('Location:http://hrapp.oilyfish.club/contact-us/');

