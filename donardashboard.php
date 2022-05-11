<?php
require 'includes/config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM donors WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: homepage.php");
}
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
<body>

<h2><b>DONOR DASHBOARD</b></h2>
<!--p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p-->

<div class="container">
  
  <form action="/action_page.php">
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
          <input type="text" id="emailid" name="lastname" value=<?php echo $row["email"]; ?>>
        </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="dateofbirth">DOB</label>
      </div>
      <div class="col-75">
        <input type="text" id="dob" name="DOB" value=<?php echo $row["dob"]; ?>>
      </div>
  </div>
    <div class="row">
      <div class="col-25">
        <label for="gender">Gender</label>
      </div>
      <div class="col-75">
       <label class="radio-inline">
       <input type="radio" name="optradio" <?php if ($row["gender"]=='m' ) echo 'checked'?> >Male
       </label>
       <label class="radio-inline">
       <input type="radio" name="optradio" <?php if ($row["gender"]=='f' ) echo 'checked'?> >Female
       </label>
       <label class="radio-inline">
       <input type="radio" name="optradio" <?php if ($row["gender"]=='o' ) echo 'checked'?> >Others
       </label>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="bloood group"> Blood group </label>
      </div>
      <div class="col-75">
        <select id="blood group" name="blood group">
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
        <label for="Address">Address</label>
      </div>
      <div class="col-75">
        <textarea id="Address" name="Address"  style="height:100px" ><?php echo $row["address"];?></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Save changes">
    </div>
    <div class="row">
      <h2><a style="position: absolute; top:2%; left: 93%" href="logout.php">Logout</a></h2>
    </div>

  </form>
  </div>
</body>
</html>