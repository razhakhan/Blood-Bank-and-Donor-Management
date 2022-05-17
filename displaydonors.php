<?php
require 'includes/config.php';

// $result = mysqli_query($conn, "SELECT * FROM donors WHERE id = $id");
// $row = mysqli_fetch_assoc($result);

if(isset($_POST["submit"])){
    $bloodgrp = $_POST["country"];
    $state = $_POST["stt"];
    $city = $_POST["state"];
    $result = mysqli_query($conn, "SELECT * FROM donors ");
?>
      

<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="css/dispstyle.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Find Donors</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/modern-business.css" rel="stylesheet">
<style>
.button {
  background-color: darkred;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<script>
    function openWin() {
        window.close();
        window.open('FlagContactUs.php');
    }
</script> 
<body>

<h2><b>AVAILABLE DONORS : </b></h2>
</br>
</br>
<!--p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p-->

<div class="container">
    <dic class="row">
    <?php 
        if(mysqli_num_rows($result) > 0) {
                foreach($result as $res) { ?>
                    <div class="col-lg-4 col-sm-6 portfolio-item">
                    <!-- col-lg-4 col-sm-6 portfolio-item -->
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top img-fluid" src="images/blood-donor.jpg" alt="" ></a>
                        <div class="card-block">
                            <h4 class="card-title"><?php echo $res["firstname"]; echo $res["lastname"];?></h4>
                            <p class="card-text"> <b> Email :</b> <?php echo $res["email"];?> </p>
                            <p class="card-text"> <b> Phone Number :</b> <?php echo $res["number"];?></p>
                            <p class="card-text"> <b> Gender :</b> <?php echo $res["gender"];?></p>
                            <p class="card-text"> <b> Date of Birth :</b> <?php echo $res["dob"];?> </p>
                            <p class="card-text"> <b> Address :</b> <?php echo $res["address"];?></p>
                            <form action="displaydonors.php" method="post">
                            <button onclick="openWin()" type="submit" name="button1" class="button">Flag as fake/wrong details</button>
                            </form>
                        </div>
                    </div>
                    </div>
                <?php }
        }
else {
    echo "no records found";
} 
} ?>
</div>
</div>
</body>

</html>