<?php
//get data from form  

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email= $_POST['email'];
$message= $_POST['msg'];
$to = "razhakhan.19.cse@anits.edu.in";
$subject = "Mail From website";
$txt ="FirstName = ". $fname . "\r\n LastName = " . $lname . "\r\n Email = " . $email . "\r\n Message =" . $message;
$headers = "From: razhagarrix@gmail.com" . "\r\n" .
"CC: mkoushik.19.cse@anits.edu.in";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
echo
"<script> alert('Message Sent'); </script>";
// echo
// "<script > window.location.href='../homepage.php'; </script>";

echo
"<script > window.close(); </script>";
// header("Location:homepage.php");
?>