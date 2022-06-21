<?php
//get data from form  
$link = mysqli_connect("localhost", "root", "", "donorsdb");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


if(isset($_POST["submit"])) {
    $email = $_POST['email'];
    $sel = mysqli_query($link, "SELECT * FROM donors WHERE email = '$email'");
    if (mysqli_num_rows($sel) > 0) {
        $row = mysqli_fetch_assoc($sel);
        $pass = $row["password"];
        $to = "razhagarrix@gmail.com";
        $subject = "Your Password for KRPD Blood Bank";
        $txt ="Email = " . $email . "\r\n Your Password is =" . $pass;
        $headers = "From: razhakhan.19.cse@anits.edu.in" . "\r\n" .
        "CC: tpavani.19.cse@anits.edu.in, pdineshkumar.19.cse@anits.edu.in";
        if($email!=NULL){
            mail($to,$subject,$txt,$headers);
        }
        //redirect
        echo
        "<script> alert('Password Sent'); </script>";
        // echo
        // "<script > window.location.href='../homepage.php'; </script>";

        echo
        "<script>
        window.close();
        window.close();
        window.open('../index.php'); 
        </script>";

        // header("Location:homepage.php");

    }
    else{
        echo "<script> alert('Email doesn't exist, User not registered'); </script>";
       //echo "Donor doesn't exist"  ;  
     }
}
?>