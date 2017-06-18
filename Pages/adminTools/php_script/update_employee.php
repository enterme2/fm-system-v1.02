<?php 
require('../../php/connect.php');

$id = $_POST['id'];


$staff_ID = $_POST['staff_ID'];
$nameEmployee = $_POST['nameEmployee'];
$username = $_POST['username'];
$password = $_POST['password'];
$usertype = $_POST['usertype'];
$assigned_area = $_POST['assigned_area'];


$query="UPDATE employees SET 
staff_ID = '$staff_ID',
nameEmployee = '$nameEmployee',
username = '$username',
password = '$password',
usertype = '$usertype',
assigned_area = '$assigned_area'
WHERE id='$id' ";


$query=mysqli_query($db,$query);
if (!$query)
  {
  echo "Sorry, this website is experiencing problems.";

  //remove this later
  echo("Error description: " . mysqli_error($db));
  }
else{
mysqli_free_result($query);
mysqli_close($db);
header("Location:../show_employee.php");
}
?>