<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$customersubject= $_POST['subject'];
$message= $_POST['message'];
$to = "jaiinterio21@gmail.com";
$subject = "Mail From Jai";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Subject =" . $customersubject;
$headers = "From: noreply@jaiinterio.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:contact.html");
?>