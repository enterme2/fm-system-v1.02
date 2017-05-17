<?php
include('../php/login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: ../dashboard/profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/w3.css">
<link rel="stylesheet" href="../../css/w3-theme-blue.css">
<link rel="stylesheet" href="../../css/font-awesome.css">


<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-large">
    <img class="w3-left" src="../../img/AWS Sdn Bhd Logo2.jpg" alt="AWS Logo" style="width:100px;height:42.5px;">
    <a href="../../index.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home</a>
  </div>
</div>

<!--content-->
<div class="w3-main w3-padding-64" style="margin-left:30% ">

  <div class="w3-row w3-container w3-margin-bottom">
    <div class="w3-col m7">
      <div class="w3-container">
      <div class="w3-container w3-red w3-center"><h4>You had been logged out</h4></div>
          <div class="w3-padding-16 w3-container w3-center">
            <img class="w3-round w3-image" src="../../img/AWS Sdn Bhd Logo3.jpg">
          </div>
          <form class="w3-container" method="post" action="">
              <label><b>Username</b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" id="username" required>
              <label><b>Password</b></label>
              <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" id="password" required>
              <span class="w3-center"><p class="w3-text-red"><?php echo $error; ?></p></span>

              <button class="w3-button w3-block w3-theme w3-section w3-padding" name="submit" type="submit">Login</button>

          </form>
      </div>
    </div>
  </div>
</div>








</body>
</html>
