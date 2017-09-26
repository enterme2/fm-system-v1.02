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
<!--
<style type="text/css">
 .hideform{ 
   display: none;

 }
 .container:hover .hideform{
    display : block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
 }
 .container:hover .logohide{
   display : none;
 }

</style>
-->
</head>
<body style="background-color: #e6f7ff;">

<div style="background-color: #e6f7ff;">
<div class="w3-top w3-container w3-theme w3-center w3-padding-16">
   <span style="font-size: 20px ;margin-left: auto;margin-right: auto" ><b>Facilities Management System</b></span>
</div>
<!--content-->
<div class="w3-padding-32"></div>

      <div class="w3-center w3-padding-64 w3-container w3-animate-opacity" id="companylogo" onmouseover="hide();show();" style="margin-left: auto;margin-right: auto ;width: 100%; max-width:500px;max-height: 400px">
        <img class="w3-round w3-image" src="img/AWS Sdn Bhd Logo3.jpg" >
      </div>     


      <div class="w3-animate-opacity" style="margin-right: auto;margin-left: auto;width: 100%;max-width:500px;max-height: 400px;display: none;background-color: #ffffff;" id="loginform2">

      <div class="w3-padding-32" style="background-color: #e6f7ff;"></div>
        <form class="w3-border w3-container w3-card" method="POST" action="" >
        <div class="w3-padding-16"></div>
            <label><b>Username</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" id="username" required>
            <label><b>Password</b></label>
            <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" id="password" required>
            <span class="w3-center"><p class="w3-text-red"><?php echo $error; ?></p></span>
            <button class="w3-button w3-round w3-block w3-theme w3-section w3-padding" style="width: 50%;margin-left: auto;margin-right: auto" name="submit" type="submit">Login</button>
        <div class="w3-padding-16"></div>
        </form>
      </div>

</div> 






<script type="text/javascript">
var form = document.getElementById('loginform2');
var logo = document.getElementById('companylogo');

function hide() 
{
    logo.style.display = "none";

}

function show() 
{
    form.style.display = "block";
}

</script>


<script type="text/javascript" src="js/sidebar.js"></script>
</body>
</html> 