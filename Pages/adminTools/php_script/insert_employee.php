<?php 
require('../../php/connect.php');

$staff_ID = $_POST['staff_ID'];
$nameEmployee = $_POST['nameEmployee'];
$username = $_POST['username'];
$password = $_POST['password'];
$usertype = $_POST['usertype'];
$assigned_area = $_POST['assigned_area'];


$query="INSERT INTO employees (staff_ID,nameEmployee,username,password,usertype,assigned_area) VALUES ('$staff_ID','$nameEmployee','$username','$password','$usertype','$assigned_area')";



$query=mysqli_query($db,$query);
if (!$query)
  {
  echo "Sorry, this website is experiencing problems.";

  //remove this later
  echo("Error description: " . mysqli_error($db));
  }
else{

mysqli_close($db);
header("Location:../show_employee.php");
}
?>