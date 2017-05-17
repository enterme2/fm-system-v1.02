<?php 
require('../../php/connect.php');

$id = $_POST['id'];


$hospital = $_POST['hospital'];
$complaintNo = $_POST['complaintNo'];
$dateRequested = $_POST['dateRequested'];
$timeRequested = $_POST['timeRequested'];
$reference = $_POST['reference'];
$complaintDetails = $_POST['complaintDetails'];
$actionTaken = $_POST['actionTaken'];
$name = $_POST['name'];
$dateCompleted = $_POST['dateCompleted'];
$status = $_POST['status'];

if($timeRequested == '' || $timeRequested == NULL){
$query="UPDATE complaint SET 
hospital = '$hospital',
complaintNo = '$complaintNo',
dateRequested = '$dateRequested',
timeRequested = NULL,
reference = '$reference',
complaintDetails = '$complaintDetails',
actionTaken = '$actionTaken',
name = '$name',
dateCompleted = '$dateCompleted',
status = '$status'
WHERE ID='$id' ";
}
else{
$query="UPDATE complaint SET 
hospital = '$hospital',
complaintNo = '$complaintNo',
dateRequested = '$dateRequested',
timeRequested = '$timeRequested',
reference = '$reference',
complaintDetails = '$complaintDetails',
actionTaken = '$actionTaken',
name = '$name',
dateCompleted = '$dateCompleted',
status = '$status'
WHERE ID='$id' ";
}

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
header("Location:../showAll_complaint.php");
}
?>