<?php
include('connect.php');
session_start();// Starting Session

// Storing Session
$user_check=$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($db,"SELECT nameEmployee,username,usertype FROM employees WHERE username='$user_check'");
if (!$ses_sql){
	  echo "Sorry, this website is experiencing problems.";
  	  echo("Error description: " . mysqli_error($db));
}
else{
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
$employee_name=$row['nameEmployee'];
$user_type=$row['usertype'];
$_SESSION['user_type']=$user_type;
}

if(!isset($login_session)){
mysqli_close($db); // Closing Connection
header('Location: ../loggedOut/loggedOut.php'); // Redirecting To Home Page
}
?>