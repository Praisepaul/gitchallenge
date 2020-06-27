<?php
$email=$POST["emailaddress"];
$to="praise20024christ@gmail.com";
$subject="New Email Address for mailing list";
$message="A New visitor to your site.\n";

$user= "$email";
$usersubject="Thank You";
$userheaders="From:you@youremailaddress.com\n";
mail($to,$subject,$message,$headers);
mail($user,$usersubject,$userheaders);
?>