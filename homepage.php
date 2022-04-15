<?php
require 'includes/config.php';
if(!empty($_SESSION["id"])){
   header("Location: donardashboard.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM donors WHERE email = '$usernameemail' ");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: donardashboard.php");
    }
    else{
      echo
      "<script> alert('login unsuccessful, invalid password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>


<!DOCTYPE html>
<html>
<head>
  
<link rel="stylesheet" href="css/homestyle.css">

<meta name="viewport" content="width=device-width, initial-scale=1 ,shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

</head>

<body style="background-color:grey;height: 2890px;overflow-x: hidden;">

<button class="button" onclick="openWin()">ABOUT US</button>
<button class="button button2" onclick = "openWin6()">ACHIEVEMENTS</button>
<button class="button button3" onclick="openWin2()">FIND BLOOD DONORS</button>
<button class="button button5" onclick = "openWin7()">CONTACT US</button>

<img src="images/KRP Blood Bank-logos_black.png" alt="logo" style="width:100px;height:100px;position: relative;left:-770px">

<img src="images/register.gif" alt="register" style="position: relative;top:600px; left:-850px">

<button class="regbut" onclick="openWin4()"> REGISTER AS A DONOR </button>

<form class="" action="" method="post" autocomplete="off">
<div class="container" style = "position:absolute; left:1200px; top:590px; background-color: lightblue;"> Donor Login <br> <br> 
  <label>Email : </label>   
  <input type="text" placeholder="Enter Email" name="email" required>  
  <label>Password : </label>   
  <input type="password" placeholder="Enter Password" name="password" required>  
  <button type="submit" class="zigg" name="submit"> Login </button>   
  <input type="checkbox" checked="checked"> Remember me   
  <a href="#"> Forgot password? </a>
</div>
</form>

<img src="images/114b4949772999.58be6bb04dd9f.gif" style="height: 50%; width: 40%; position: absolute; top:1150px; left:290px;">

<img src="images/donationFact.webp" alt="sol" style="position: absolute; top:1960px ;left:1050px">

<img src="images/btype.png" alt="sol" style="position: absolute; top:2365px ;left:25px">

<div class="myDiv">
  <h2 style="text-align: center;">Our Top Donors</h2>
  <ol>
    <li>Rohit Sharma, Mumbai</li>
    <li>Anushka Sharma, Delhi</li>
    <li>Shah Rukh Khan, Kolkata</li>
    <li>Banwar Singh Shikawat, Punjab</li>
    <li>Tom Cruise, USA</li>
    <li>Vladmir Putin, Russia</li>
  </ol>
</div>

<img src="images/e29e1d49772999.58be6bafd484d.gif" style="height: 35%; width: 49%; position: absolute; top:1960px; left: 25px">

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="images/zimma2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="images/zimma1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="images/zimma3.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="images/zimma4.jpg" style="width:100%">
  <!-- <div class="text" style="color:black; position: relative; top:-30px">KRP Blood Bank Drawing Competition Winner 2022</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="images/zimma5.jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center; position: relative; top:10px">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span>  
</div>

<script>

function openWin() {
  window.open("aboutus.html");
}

function openWin7() {
window.open("Contact us.html");
}

function openWin6() {
window.open("achiementss.html");
}

function openWin2() {
  window.open("FindBloodDonors.html");
}

function openWin3() {
  window.open("donardashboard.php");
}

function openWin4() {
  window.open("donor-registration.php");
}

// var slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//   showSlides(slideIndex += n);
//   if (slideIndex > slides.length) {slideIndex = 1}  
// }

// function currentSlide(n) {
//   showSlides(slideIndex = n);
//   if (slideIndex > slides.length) {slideIndex = 1}  
// }

// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("mySlides");
//   var dots = document.getElementsByClassName("dot");
//   if (n > slides.length) {slideIndex = 1}    
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";  
//   }
//   for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";  
//   dots[slideIndex-1].className += " active";
// }

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}   
  
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000);
}

</script>

</body>
</html> 
