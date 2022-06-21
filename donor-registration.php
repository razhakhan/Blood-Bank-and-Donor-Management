<?php
require 'includes/config.php';
if(isset($_POST["submit"])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $numb = $_POST['phno'];
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
    if(! (preg_match('/^[6-9][0-9]{9}$/', $numb)) ) {
      echo
      "<script> alert('invalid phone number'); </script>";
    }
    if( !is_numeric($date[0]) || !is_numeric($date[1]) || !is_numeric($date[2]) || ! (checkdate ($date[1] ,$date[0] ,$date[2])) )
    {
        echo "<script> alert('invalid date format'); </script>";
    }
    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        echo
      "<script> alert('Password should be at least 8 characters, at least one number, one upper case letter and one special character.'); </script>";
    }
    if($password == $confirmpassword){
      $query = "INSERT INTO donors VALUES('', '$firstname', '$lastname', '$email', '$numb', '$password', '$dob', '$gender', '$bloodgrp', '$state', '$city', '$address', 0)";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";

      echo
      "<script > self.close(); window.parent.close();
      window.open('index.php'); </script>";
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
        <input type="text" id="fname" name="firstname" value="<?php echo isset($_POST["firstname"]) ? $_POST["firstname"] : ''; ?>" >
      </div>
   </div>
    <div class="row">
       <div class="col-25">
        <label for="lname">Last Name</label>
       </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" value="<?php echo isset($_POST["lastname"]) ? $_POST["lastname"] : ''; ?>">
      </div>
    </div>
    <div class="row">
        <div class="col-25">
          <label for="emailid">Email</label>
        </div>
        <div class="col-75">
          <input type="text" id="emailid" name="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">
        </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="phno">Phone No.</label>
      </div>
      <div class="col-75">
        <input type="tel" id="phno" name="phno" value="<?php echo isset($_POST["phno"]) ? $_POST["phno"] : ''; ?>">
      </div>
  </div>
    <div class="row">
        <div class="col-25">
          <label for="password">Password</label>
        </div>
        <div class="col-75">
          <input type="password" id="password" name="password" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>" style="width:564px;height: 40px;">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
          <label for="cpassword">Confirm Password</label>
        </div>
        <div class="col-75">
          <input type="password" id="cpassword" name="cpassword" value="<?php echo isset($_POST["cpassword"]) ? $_POST["cpassword"] : ''; ?>" style="width:564px;height: 40px;">
        </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="dob">DOB (dd-mm-yyyy)</label>
      </div>
      <div class="col-75">
        <input type="text" id="dob" name="dob" value="<?php echo isset($_POST["dob"]) ? $_POST["dob"] : ''; ?>">
      </div>
  </div>
    <div class="row">
      <div class="col-25">
        <label for="gender">Gender</label>
      </div>
      <div class="col-75">
       <label class="radio-inline">
       <input type="radio" value= "m" name="optradio" <?php  if(isset($_POST["optradio"] )) if($_POST["optradio"]=='m') echo 'checked';?>> Male
       </label>
       <label class="radio-inline">
       <input type="radio" value="f" name="optradio" <?php if (isset($_POST["optradio"])) if($_POST["optradio"]=='f') echo 'checked';?>> Female
       </label>
       <label class="radio-inline">
       <input type="radio" value="o" name="optradio" <?php if(isset($_POST["optradio"])) if($_POST["optradio"]=='o') echo 'checked';?>> Others
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
        <textarea id="Address" name="Address"  style="height:100px" value="<?php echo isset($_POST["Address"]) ? $_POST["Address"] : ''; ?>"></textarea>
      </div>
    </div>
    <div class="Button">
        <input type="submit" name="submit">
      </div>
  </form>
  </div>
</body>
</html>