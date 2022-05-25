<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/home2.css">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("images/bg4.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>  
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">KRPD BLOOD BANK</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="aboutus.html" class="w3-bar-item w3-button"><i class="fa fa-info-circle"></i> ABOUT</a>
      <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> LOGIN</a>
      <a href="FindBloodDonors.html" class="w3-bar-item w3-button"><i class="fa fa-search-plus"></i> FIND BLOOD DONORS</a>
      <a href="acheivements2.html" class="w3-bar-item w3-button"><i class="fa fa-star"></i> ACHIEVEMENTS </a>
      <a href="Contact us.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT US</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="aboutus.html" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>
  <a href="FindBloodDonors.html" onclick="w3_close()" class="w3-bar-item w3-button">FIND BLOOD DONORS</a>
  <a href="acheivements2.html" onclick="w3_close()" class="w3-bar-item w3-button">ACHIEVEMENTS</a>
  <a href="Contact us.php" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT US</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Wish to donate blood/Plasma ?</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium" style="text-shadow: 2px 2px black">Wish to donate blood/Plasma ?</span><br>
    <span class="w3-large">Register yourself as a voluntary blood donor</span>
    <p><a href="donor-registration.php" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">SIGN UP</a></p>
  </div> 
  <!-- <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div> -->
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px; background-color:mistyrose" id="about">
  <h3 class="w3-center">DONATE BLOOD, SAVE LIVES</h3>
  <p class="w3-center w3-large">It costs nothing to give blood and stay healthy</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
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

<!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a> -->
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
window.open("Contact us.php");
}

function openWin6() {
window.open("acheivements2.html");
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
  </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="w3-container" style="padding:128px 16px; background-color:lavender">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>We're the best</h3>
      <p>We are the global leaders of blood donation campaigns,<br>saved hundreds of lives and still counting</p>
      <p>You've landed on the most trustworthy, award winning blood donation website,<br>loved by hundreds of happy users</p>
      <p><a href="acheivements2.html" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Achiements</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="images/114b4949772999.58be6bb04dd9f.gif" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px; background-color:papayawhip" id="team">
  <h3 class="w3-center">Top Donors</h3>
  <p class="w3-center w3-large">The torchbearers of our society</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/blood-donor.jpg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>Rohit Sharma</h3>
          <p class="w3-opacity">Mumbai</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/blood-donor.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Shah Rukh Khan</h3>
          <p class="w3-opacity">Kolkata</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/blood-donor.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Tom Cruise</h3>
          <p class="w3-opacity">USA</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/blood-donor.jpg" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3>Vladmir Putin</h3>
          <p class="w3-opacity">Russia</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">100+</span>
    <br>Donors
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">175+</span>
    <br>Donations Done
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">200+</span>
    <br>Happy Users
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">50+</span>
    <br>Blood Donation Camps
  </div>
</div>

<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px; background-color:linen" id="work">
  <h3 class="w3-center">FACTS ABOUT BLOOD DONATION</h3>
  <p class="w3-center w3-large">48% of the Indian population is eligible to give blood, only 6% actually donates.</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l6 m6">
      <img src="images/btype.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Compatible blood type donors">
    </div>
    <div class="w3-col l6 m6">
      <img src="images/donationFact.webp" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Save lives">
    </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="w3-container w3-padding-64" style="background-color:honeydew">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>You can make a difference</h3>
      <p>The gift of blood helps save lives, and the demand for blood and blood products is great.<br> 
      Every 2 seconds, someone in India needs blood, and more than 50,000 units of blood <br>
      are needed each year at each small hospital.</p>
      <p>Hurry up ! Register as a donor on our website and start donating.</p>
      <p><a href="donor-registration.php" class="w3-button w3-black"><i class="fa fa-th"> </i>SIGN UP</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="images/e29e1d49772999.58be6bafd484d.gif" width="700" height="394">
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <!-- <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p> -->
</footer>
 
<script>

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
