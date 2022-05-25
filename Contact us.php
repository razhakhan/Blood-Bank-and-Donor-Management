<?php
$link = mysqli_connect("localhost", "root", "", "donorsdb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$result = mysqli_query($link, "SELECT * FROM contactus WHERE id = 1");
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/contactusstyle.css">
</head>
<body style="background-color:Tomato;">

<h2 style="text-align: center;"><b>Contact Us</b></h2>
<!--p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p-->

<div class="container">
  
  <form action="mail/mail.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="First Name" required>
      </div>
   </div>
    <div class="row">
       <div class="col-25">
        <label for="lname">Last Name</label>
       </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Last Name" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
       <label for="phno">Phone Number</label>
      </div>
     <div class="col-75">
       <input type="text" id="phno" name="phno" placeholder="Phone Number" required>
     </div>
   </div>
    <div class="row">
        <div class="col-25">
          <label for="emailid">Email</label>
        </div>
        <div class="col-75">
          <input type="text" id="emailid" name="email" placeholder="Email" required>
        </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="msg">Message</label>
      </div>
      <div class="col-75">
        <textarea id="msg" name="msg" style="height:100px"></textarea required>
      </div>
    </div>
    <div class="Button">
        <input type="submit" value="SEND">
      </div>

  </form>
  <div class="row">
    <div class="col-25">
      <h2>Also Contact Us at:</h2>
       <h3> Email : <?php echo $row["email"];?> </h3>
       <h3> Phone no: <?php echo $row["phoneno"]; ?> </h3>
        
    </div> 
  </div>
</body>
</html>
