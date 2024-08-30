<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$number= $POST['phone'];

$to = "leenanancys@mail.com";
$subject = "Mail From FranchExpress.com";

$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Phone no =" .$phone;

$headers = "From: noreply@FranchExpress.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:indexcopy.html");
?>