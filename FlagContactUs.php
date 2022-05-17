<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/contactusstyle.css">
</head>
<body style="background-color:Tomato;">

<h2 style="text-align: center;"><b>Flag Fake/Wrong Donor Details for Removal</b></h2>
<!--p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p-->

<div class="container">
  
  <form action="mail/mail.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">Your First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="First Name" required>
      </div>
   </div>
    <div class="row">
       <div class="col-25">
        <label for="lname">Your Last Name</label>
       </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Last Name" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
       <label for="phno">Your Phone Number</label>
      </div>
     <div class="col-75">
       <input type="text" id="phno" name="phno" placeholder="Phone Number" required>
     </div>
   </div>
    <div class="row">
        <div class="col-25">
          <label for="emailid">Your Email</label>
        </div>
        <div class="col-75">
          <input type="text" id="emailid" name="email" placeholder="Email" required>
        </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="msg">Fake/Wrong Donor info</label>
      </div>
      <div class="col-75">
        <textarea id="msg" name="msg" style="height:100px" placeholder="Enter the details of the fake/wrong donor details you've discovered (name, email, phone no. are must)" ></textarea required>
      </div>
    </div>
    <div class="Button">
        <input type="submit" value="SUBMIT">
      </div>
  </form>
  </div>
</body>
</html>
