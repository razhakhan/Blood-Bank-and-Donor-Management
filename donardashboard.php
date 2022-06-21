<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "donorsdb");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($mysqli, "SELECT * FROM donors WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
  }
else{
    header("Location: index.php");
}

if(isset($_POST["submit"])) {
  // Attempt update query execution
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $numb = $_POST['phno'];
  $pass = $_POST['password'];
  $cpass = $_POST['cpassword'];
  $dob = $_POST['dob'];
  $gender = $_POST['optradio'];
  $bloodgrp = $_POST['bloodgroup'];
  $state = $_POST['stt'];
  $city = $_POST['state'];
  $address = $_POST['Address'];
  $nod=$_POST['nod'];
  $duplicate = mysqli_query($mysqli, "SELECT * FROM donors WHERE email = '$email' ");
  $date=explode("-",$_POST['dob']);


  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo
      "<script> alert('invalid email format'); </script>";
  }
  elseif(! (preg_match('/^[6-9][0-9]{9}$/', $numb)) ) {
      echo
      "<script> alert('invalid phone number'); </script>";
  }
  elseif( !is_numeric($date[0]) || !is_numeric($date[1]) || !is_numeric($date[2]) || ! (checkdate ($date[1] ,$date[0] ,$date[2])) )
  {
        echo "<script> alert('invalid date format'); </script>";
  }
  elseif($pass != $cpass){
    echo
    "<script> alert('Password Does Not Match'); </script>";
  }
  else {
    $sql = "UPDATE donors SET firstname='$firstname', lastname='$lastname', email='$email', number=$numb, password='$pass', dob='$dob', gender='$gender', bloodgrp='$bloodgrp', state='$state', city='$city', address='$address', nod=$nod WHERE id=$id ";
    if($mysqli->query($sql) === true){
        echo "<script> alert('Update Successful'); </script>";
        // echo "<script> window.close(); </script>";
        echo "<script> location.href = 'donardashboard.php'; </script>";
    } else{
        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    }
  }
}

$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/dashstyle.css">
  <style>
    .container {
      border-radius: 5px;
      /*background-color: #ac9d9e;*/
      padding: 24px;
      background-image: url('images/saveblood.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: 50% 50%;
    }
  </style>
</head>
<script src="js/cities.js">
</script>


<body>

<h2><b>DONOR DASHBOARD</b></h2>
<!--p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p-->

<div class="container">
  
  <form class="" action="" method="post" autocomplete="off">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" value=<?php echo $row["firstname"]; ?>>
      </div>
   </div>
    <div class="row">
       <div class="col-25">
        <label for="lname">Last Name</label>
       </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" value=<?php echo $row["lastname"]; ?>>
      </div>
    </div>
    <div class="row">
        <div class="col-25">
          <label for="emailid">Email</label>
        </div>
        <div class="col-75">
          <input type="text" id="emailid" name="email" value=<?php echo $row["email"]; ?>>
        </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="phno">Phone No.</label>
      </div>
      <div class="col-75">
        <input type="tel" id="phno" name="phno" value=<?php echo $row["number"]; ?>>
      </div>
    </div>
    <div class="row">
        <div class="col-25">
          <label for="password">Password</label>
        </div>
        <div class="col-75">
          <input type="password" id="password" name="password" value=<?php echo $row["password"]; ?> style="width:564px;height: 40px;">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
          <label for="cpassword">Confirm Password</label>
        </div>
        <div class="col-75">
          <input type="password" id="cpassword" name="cpassword" value=<?php echo $row["password"]; ?> style="width:564px;height: 40px;">
        </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="dob">DOB</label>
      </div>
      <div class="col-75">
        <input type="text" id="dob" name="dob" value=<?php echo $row["dob"]; ?>>
      </div>
  </div>
    <div class="row">
      <div class="col-25">
        <label for="gender">Gender</label>
      </div>
      <div class="col-75">
       <label class="radio-inline">
       <input type="radio" value="m" name="optradio" <?php if ($row["gender"]=='m' ) echo 'checked'?> >Male
       </label>
       <label class="radio-inline">
       <input type="radio" value="f" name="optradio" <?php if ($row["gender"]=='f' ) echo 'checked'?> >Female
       </label>
       <label class="radio-inline">
       <input type="radio" value="o" name="optradio" <?php if ($row["gender"]=='o' ) echo 'checked'?> >Others
       </label>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="bloood group"> Blood group </label>
      </div>
      <div class="col-75">
        <select id="blood group" name="bloodgroup">
          <option value="O+" <?php if ($row["bloodgrp"]=='O+' ) echo 'selected'?> >O+</option>
          <option value="A+" <?php if ($row["bloodgrp"]=='A+' ) echo 'selected'?> >A+</option>
          <option value="B+" <?php if ($row["bloodgrp"]=='B+' ) echo 'selected'?> >B+</option>
          <option value="AB+" <?php if ($row["bloodgrp"]=='AB+' ) echo 'selected'?> >AB+</option>
          <option value="O-" <?php if ($row["bloodgrp"]=='O-' ) echo 'selected'?> >O-</option>
          <option value="A-" <?php if ($row["bloodgrp"]=='A-' ) echo 'selected'?> >A-</option>
          <option value="B-" <?php if ($row["bloodgrp"]=='B-' ) echo 'selected'?> >B-</option>
          <option value="AB-" <?php if ($row["bloodgrp"]=='AB-' ) echo 'selected'?> >AB-</option>

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
        <textarea id="Address" name="Address"  style="height:100px" ><?php echo $row["address"];?></textarea>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="nod">No. of Donations</label>
      </div>
      <div class="col-75">
        <input type="int" id="nod" name="nod" value=<?php echo $row["nod"]; ?>>
        <b>(In case you update this field, kindly email us the valid proofs to get featured on the top donor list)</b>
      </div>
  </div>

    <div class="row">
      <input name="submit" type="submit" value="Save changes">
    </div>
    <div class="row">
      <h2><a style="position: absolute; top:2%; left: 93%" href="logout.php">Logout</a></h2>
    </div>

  </form>
  </div>

</body>
</html>