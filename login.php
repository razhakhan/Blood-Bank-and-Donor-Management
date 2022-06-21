<?php
require 'includes/config.php';
if(!empty($_SESSION["id"])){
   header("Location: donardashboard.php");
}

if(isset($_POST["submit"])){
  $usernameemail = $_POST["uname"];
  $password = $_POST["psw"];
  if($usernameemail=='admin@gmail.com' && $password=='Admin@123')
  {
    header("Location: admin/Admin.html");
  } 
  else

  {
  $result = mysqli_query($conn, "SELECT * FROM donors WHERE email = '$usernameemail' ");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      if ( isset ($_POST['remember'] ))
      {
	      setcookie('email', $usernameemail, time()+86400*30);
	      setcookie('pass', $password, time()+86400*30);
      }
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
}}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/loginstyle.css">
</head>
<body >
<h2>Login Form</h2>

<form action="" method="post">
  <div class="imgcontainer">
    <img src="images/loginpic.png" width=400 height=500 alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="text" id="uname" name="uname" required value=<?php if( isset($_COOKIE['email']) ) echo $_COOKIE['email']; else echo ""?>>

    <label for="psw"><b>Password</b></label>
    <input type="password" id="psw" name="psw" required value=<?php if( isset($_COOKIE['pass']) ) echo $_COOKIE['pass']; else echo ""?> >
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <span class="psw"><a href="forgotpassword.html">Forgot password?</a></span>
    <button type="submit" name="submit">Login</button>
  </div>
</form>
</body>
</html>