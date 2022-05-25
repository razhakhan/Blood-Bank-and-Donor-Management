<?php
$link = mysqli_connect("localhost", "root", "", "donorsdb");
 
// Check connection
if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST["submit"])){
  $email = $_POST['email'];
  $sel = mysqli_query($link, "SELECT * FROM donors WHERE email = '$email'");
	if (mysqli_num_rows($sel) > 0) {
		$sql = "DELETE FROM donors WHERE email='$email' ";
    if(mysqli_query($link, $sql)){
    
      echo "<script> alert('Donor removed successfully'); </script>";
    }
	}
  else{
    // echo "<script> alert(' Donor doesn't exist'); </script>"  ;
    echo "Donor doesn't exist"  ;  
}
}
mysqli_close($link);


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style>
.container {
  border-radius: 5px;
  background-color: #ac9d9e;
  padding: 24px;
  background-image: url('Registerasdonar .jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: 50% 100%;
  
}

.wrapper{
 width: 320px;
 height:420px;
 background:transparent;
 transform: translateY(-110%);
 border-color:"black";
 margin-left:120%;
 border-radius: 15px;
 box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}
.wrapper .title{
 font-size: 35px;
 font-weight: 600;
 text-align: center;
 line-height: 100px;
 color: #fff;
 user-select: none;
 border-radius: 15px 15px 0 0;
 background: linear-gradient(-155deg, Darkslateblue, CornflowerBlue);
}
.wrapper form{
 padding: 10px 30px 50px 30px;
 }
.wrapper form .field{
 height: 50px;
 width: 100%;
 margin-top: 20px;
 position: relative;
}
.wrapper form .field input{
 height: 100%;
 width: 100%;
 outline: none;
 font-size: 17px;
padding-left: 20px;
border: 1px solid lightgrey;
border-radius: 25px;
transition: all 0.3s ease;
}
.wrapper form .field input:focus,
form .field input:valid{
border-color: #4158d0;
 }
.wrapper form .field label{
position: absolute;
top: 50%;
left: 20px;
color: #999999;
font-weight: 400;
font-size: 17px;
pointer-events: none;
transform: translateY(-50%);
transition: all 0.3s ease;
 }
form .field input:focus ~ label,
form .field input:valid ~ label{
top: 0%;
font-size: 16px;
color: #4158d0;
background: #fff;
transform: translateY(-50%);
}
form .content{
display: flex;
width: 100%;
height: 50px;
font-size: 16px;
align-items: center;
}
f
form .content input{
width: 15px;
height: 15px;
background: red;
}
form .content label{
      font-weight:600;
color: Maroon;
user-select: none;
padding-left: 5px;
}
form .content .pass-link{
color: "";
}
form .field input[type="submit"]{
color: #fff;
border: none;
padding-left: 0;
margin-top: -10px;
font-size: 20px;
font-weight: 500;
cursor: pointer;
background: linear-gradient(-155deg, Darkslateblue, CornflowerBlue);
transition: all 0.3s ease;
}
form .field input[type="submit"]:active{
transform: scale(0.95);
}
form .signup-link{
color:Maroon;
margin-top: 20px;
text-align: center;
 }
form .pass-link a,
form .signup-link a{
color:#20b2aa;
text-decoration: none;
}
form .pass-link a:hover,
form .signup-link a:hover{
text-decoration: underline;
}
</style>
</head>
<body>
<h1 style="text-align:center"> Remove Donar </h1>
<div class="container"> 
<a href="javascript:void(0);" class="icon" onclick="myFunction()"></a>
<i class="fa fa-bars"></i>
</a>
<form action="" method="post" style="text-align: center; " >
<div class="field">
<input type="text" name="email" required>
<label>Email Address</label>
</div>
<br>
<div class="field">
<input type="submit"  name="submit" value="SUBMIT">
</div>

</form>
</div>
</div>
</div>
</div>
</body>
</html>