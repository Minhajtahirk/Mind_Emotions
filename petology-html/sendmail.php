<?php
//get data from form  
$name = $_POST['name'];
$phone = $_POST['phone'];
$email= $_POST['email'];
$message= $_POST['msg'];
$to = "minhajtahir2020@gmail.com";
$subject = "Mail From Mind and Emotions";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Phone Number =" .$phone;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>