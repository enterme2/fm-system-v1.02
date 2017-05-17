<?php
include('connect.php');
session_start(); // Starting Session
$error=NULL; // Variable To Store Error Message
$detectError= FALSE;

if (isset($_POST['submit'])) 
	{
	if (empty($_POST['username']) || empty($_POST['password'])) 
	{
	$error = "Username or Password is invalid";
	}
	else
	{
	// Define $username and $password
	$detectError=FALSE;
	$username=$_POST['username'];
	$password=$_POST['password'];
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	//$connection = mysql_connect("localhost", "root", ""); //include('connect.php')
	// To protect MySQL injection for Security purpose
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysqli_real_escape_string($db,$username);
	$password = mysqli_real_escape_string($db,$password);

	// SQL query to fetch information of registerd users and finds user match.
	//$sql = "SELECT * FROM employees WHERE username=$username AND password=$password";
	//$result = $db->query($sql)
	$query = mysqli_query($db,"SELECT * FROM employees WHERE password='$password' AND username='$username'");
	$rows = mysqli_num_rows($query);
	if ($rows == 1) {
	$detectError=FALSE;
	$_SESSION['login_user']=$username; // Initializing Session
	header("location: ../dashboard/profile.php"); // Redirecting To Other Page
	} 
	else {
	$detectError=TRUE;
	$error = "Username or Password is invalid";
	//echo "<script type='text/javascript'>alert('$detectError');</script>";
	}
	mysqli_close($db); // Closing Connection
	}
}
?>