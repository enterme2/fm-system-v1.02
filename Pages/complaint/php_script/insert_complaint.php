<?php

include('../../php/connect.php');


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
$action="INSERT INTO complaint (
hospital,
complaintNo,
dateRequested,
timeRequested,
reference,
complaintDetails,
actionTaken,
name,
dateCompleted,
status
) VALUES ('$hospital',
'$complaintNo',
'$dateRequested',
 NULL,
'$reference',
'$complaintDetails',
'$actionTaken',
'$name',
'$dateCompleted',
'$status')";
}
else{
$action="INSERT INTO complaint (
hospital,
complaintNo,
dateRequested,
timeRequested,
reference,
complaintDetails,
actionTaken,
name,
dateCompleted,
status
) VALUES ('$hospital',
'$complaintNo',
'$dateRequested',
'$timeRequested',
'$reference',
'$complaintDetails',
'$actionTaken',
'$name',
'$dateCompleted',
'$status')";
}
$query=mysqli_query($db,$action);
if (!$query)
  {
  echo "Sorry, this website is experiencing problems.";

  //remove this later
  echo("Error description: " . mysqli_error($db));
  }
else{

mysqli_close($db);
header("Location:../showAll_complaint.php");
}
?>