<?php
require 'includes/config.php';
if(!empty($_SESSION["id"])){
  header("Location: homepage.php");
}
if(isset($_POST["submit"])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $number = $_POST['phno'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['cpassword'];
    $dob = $_POST['dob'];
    $gender = $_POST['optradio'];
    $bloodgrp = $_POST['bloodgroup'];
    $state = $_POST['stt'];
    $city = $_POST['state'];
    $address = $_POST['Address'];
    $duplicate = mysqli_query($conn, "SELECT * FROM donors WHERE email = '$email' ");
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $date=explode("-",$_POST['dob']);
    $specialChars = preg_match('@[^\w]@', $password);
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Email already exists, please login'); </script>";
  }
  else{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo
      "<script> alert('invalid email format'); </script>";
    }
    elseif(! (preg_match('/^[6-9][0-9]{9}$/', $number)) ) {
      echo
      "<script> alert('invalid phone number'); </script>";
    }
    elseif( !is_numeric($date[0]) || !is_numeric($date[1]) || !is_numeric($date[2]) || ! (checkdate ($date[1] ,$date[0] ,$date[2])) )
    {
        echo "<script> alert('invalid date format'); </script>";
    }
    elseif(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        echo
      "<script> alert('Password should be at least 8 characters, at least one number, one upper case letter and one special character.'); </script>";
    }
    elseif($password == $confirmpassword){
      $query = "INSERT INTO donors VALUES('', '$firstname', '$lastname', '$email', '$number', '$password', '$dob', '$gender', '$bloodgrp', '$state', '$city', '$address')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";

      echo
      "<script > window.close(); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/regstyle.css">
<script src="js/cities.js"></script>
</head>

<body style="background-color:powderblue;">

<h2 style="text-align: center;"><b>DONOR REGISTRATION</b></h2>
<!--p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p-->

<div class="container">
  
  <form class="" action="" method="post" autocomplete="off">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="First Name">
      </div>
   </div>
    <div class="row">
       <div class="col-25">
        <label for="lname">Last Name</label>
       </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Last Name">
      </div>
    </div>
    <div class="row">
        <div class="col-25">
          <label for="emailid">Email</label>
        </div>
        <div class="col-75">
          <input type="text" id="emailid" name="email" placeholder="Email">
        </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="phno">Phone No.</label>
      </div>
      <div class="col-75">
        <input type="tel" id="phno" name="phno" placeholder="Phone Number">
      </div>
  </div>
    <div class="row">
        <div class="col-25">
          <label for="password">Password</label>
        </div>
        <div class="col-75">
          <input type="password" id="password" name="password" placeholder="   Password" style="width:564px;height: 40px;">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
          <label for="cpassword">Confirm Password</label>
        </div>
        <div class="col-75">
          <input type="password" id="cpassword" name="cpassword" placeholder=" Confirm Password" style="width:564px;height: 40px;">
        </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="dob">DOB</label>
      </div>
      <div class="col-75">
        <input type="text" id="dob" value="" name="dob" placeholder="dd-mm-yyyy">
      </div>
  </div>
    <div class="row">
      <div class="col-25">
        <label for="gender">Gender</label>
      </div>
      <div class="col-75">
       <label class="radio-inline">
       <input type="radio" value= "m" name="optradio" checked>Male
       </label>
       <label class="radio-inline">
       <input type="radio" value="f" name="optradio">Female
       </label>
       <label class="radio-inline">
       <input type="radio" value="o" name="optradio">Others
       </label>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="bloood group"> Blood group </label>
      </div>
      <div class="col-75">
        <select class="" id="bloodgroup" name="bloodgroup" >
          <option value="O+">O+</option>
          <option value="A+">A+</option>
          <option value="B+">B+</option>
          <option value="AB+">AB+</option>
          <option value="O-">O-</option>
          <option value="A-">A-</option>
          <option value="B-">B-</option>
          <option value="AB-">AB-</option>

        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="stt"> State </label>
      </div>
      <div class="col-75">
      <select onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control" required></select>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="state"> City </label>
      </div>
      <div class="col-75">
    <select id ="state" name="state" class="form-control" required></select>
    <script language="javascript">print_state("sts");</script>
    </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Address">Address</label>
      </div>
      <div class="col-75">
        <textarea id="Address" name="Address"  style="height:100px"></textarea>
      </div>
    </div>
    <div class="Button">
        <input type="submit" name="submit">
      </div>
  </form>
  </div>
</body>
</html>