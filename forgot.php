<?php 
  if(isset($_POST["recover"])){
    include('includes/config.php');
    $email = $_POST["email"];
    $sql = mysqli_query($conn, "SELECT * FROM donors WHERE email='$email'");
    mysqli_close($conn);
    $query = mysqli_num_rows($sql);
    $fetch = mysqli_fetch_assoc($sql);
    if(mysqli_num_rows($sql) <= 0){
?>
      <script>
        alert("<?php  echo "Sorry, no emails exists "?>");
      </script>
<?php
    }else{
      $token = bin2hex(random_bytes(50));
      // session_start ();
      $_SESSION['token'] = $token;
      $_SESSION['email'] = $email;
      require "mail/phpmailer/PHPMailerAutoload.php";
      $mail = new PHPMailer;
      $mail->isSMTP();
      $mail->Host='smtp.gmail.com';
      $mail->Port=587;
      $mail->SMTPAuth=true;
      $mail->SMTPSecure='tls';
      $mail->Username='razhagarrix@gmail.com';
      $mail->Password='sickboi';
      $mail->setFrom('razhagarrix@gmail.com', 'Password Reset');
      $mail->addAddress($_POST["email"]);
      $mail->isHTML(true);
      $mail->Subject="Recover your password";
      $mail->Body="<b>Dear User</b>
      <h3>We received a request to reset your password.</h3>
      <p>Kindly click the below link to reset your password</p>
      http://localhost/STT/reset_psw.php
      <br><br>
      <p>With regrads,</p>
      <b>Share The Taste</b>";
      if(!$mail->send()){
?>
        <script>
          alert("<?php echo " Invalid Email "?>");
        </script>
<?php
      }else{
?>
        <script>
          window.location.replace("notification.html");
        </script>
<?php
      }
    }
  }
?>

<!DOCTYPE html>
  <head>
    <title>Share The Taste</title>
    <link rel="stylesheet" style="text/css" href="style1.css">
    <link rel="icon" type="text/css" href="favicon.ico">
  </head>
  <body>
    <header>
      <div class="main">
        <div class="logo"><img src="logo.png"></div>
        <ul>
          <li ><a href="home.php">HOME</a></li>
          <li><a href="login.php">LOG IN</a></li>
          <li><a href="signup.php">SIGN UP</a></li>
        </ul>
      </div>
    </header>
    <div class="signupbox">
      <div class="center">
        <h1>Find Your Account</h1>
        <form action=# method="post">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          <div class="txt_field">
            <label>Email ID</label><br><br>
            <input type="text" required name="email" placeholder="Enter Email Id">
            <span></span>
          </div>
          <input type="submit" name="recover" value="submit">
          <label>   &nbsp;</label>
        </form>
      </div>
    </div>
  </body>
</html>