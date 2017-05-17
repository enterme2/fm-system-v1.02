<?php
include('Pages/php/login.php'); // Includes Login Script
if(isset($_SESSION['login_user']))
{header("location: Pages/dashboard/profile.php");}
?>

<!DOCTYPE html>
<html>
<head>
<title>FSM System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/w3-theme-blue.css">
<link rel="stylesheet" href="css/font-awesome.css">
<script type="text/javascript" src="js/togglecontent.js"></script>
</head>
<body onload="showLogin();">
<!--<img class="w3-left-align" src="img/AWS Sdn Bhd Logo.PNG" alt="AWS Logo" style="max-width: 50%;max-width: 50%;">-->
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <img class="w3-left" src="img/AWS Sdn Bhd Logo2.jpg" alt="AWS Logo" style="width:100px;height:42.5px;">
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home</a>
    <a onclick="document.getElementById('loginform').style.display='block'" class="w3-bar-item w3-button w3-hover-white w3-right">Login</a>
  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" style="z-index:3;width:250px;margin-top:43px;" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <!--
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Link</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Link</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Link</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Link</a>
  -->
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!--content-->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Facilities Services Management System</h1>
      <p>Restricted to employees only.</p>
      <!--<button class="w3-button w3-round w3-theme w3-hover-aqua" onclick="window.location='loginForm.php'">Enter</button>-->
    </div>
<input type="hidden" id="detectError" value="<?php echo $detectError ?>" />
<div id="loginform" class="w3-modal">

    <div class="w3-modal-content w3-round w3-card-4 w3-animate-zoom" style="max-width:400px">
      <div class="w3-center w3-padding-32 w3-container">
        <img class="w3-round w3-image" src="img/AWS Sdn Bhd Logo3.jpg" style="width:100%;max-width:300px;max-height: 200px;">
      </div>

        <span onclick="document.getElementById('loginform').style.display='none'" class="w3-button w3-circle w3-large w3-hover-red w3-display-topright w3-ripple" title="Close"><i class="fa fa-times"></i></span>


      <form class="w3-container" method="POST" action="">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" id="username" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" id="password" required>
          <span class="w3-center"><p class="w3-text-red"><?php echo $error; ?></p></span>
          <button class="w3-button w3-block w3-theme w3-section w3-padding" name="submit" type="submit">Login</button>
        </div>
      </form>

      <!--<div class="w3-container w3-border-top w3-padding-16 w3-light-grey"></div>-->

    </div>
  </div>

  </div>

</div>


<script type="text/javascript" src="js/sidebar.js"></script>
</body>
</html> 