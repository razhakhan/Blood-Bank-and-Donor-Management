<?php
//get data from form  

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$phno = $_POST['phno'];
$email= $_POST['email'];
$message= $_POST['msg'];
$to = "razhagarrix@gmail.com";
$subject = "Mail From website";
$txt ="FirstName = ". $fname . "\r\n LastName = " . $lname . "\r\n Email = " . $email . "\r\n Message =" . $message;
$headers = "From: razhakhan.19.cse@anits.edu.in" . "\r\n" .
"CC: tpavani.19.cse@anits.edu.in";

if(! (preg_match('/^[6-9][0-9]{9}$/', $phno) ) ) {
    echo
    "<script> alert('invalid phone number'); </script>";
    echo "<script> window.open('../Contact us.html', '_self'); </script>";
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo
    "<script> alert('invalid email format'); </script>";
    echo "<script> window.open('../Contact us.html', '_self'); </script>";
}
else {
    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
    }
    //redirect
    echo
    "<script> alert('Message Sent'); </script>";
    // echo
    // "<script > window.location.href='../homepage.php'; </script>";

    echo
    "<script >
    window.close();
    window.close();
    window.open('../index.php'); 
    </script>";

    // header("Location:homepage.php");
}
?>