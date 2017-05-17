<?php 
require('../../php/connect.php');

$id = $_POST['id'];


$hospital = $_POST['hospital'];
$wrNo = $_POST['wrNo'];
$dateRequested = $_POST['dateRequested'];
$timeRequested = $_POST['timeRequested'];
$targetdate = $_POST['targetdate'];
$ageing = $_POST['ageing'];
$status = $_POST['status'];
$type = $_POST['type'];
$assetNo = $_POST['assetNo'];
$assetDesc = $_POST['assetDesc'];
$workgroup = $_POST['workgroup'];
$details = $_POST['details'];
$taskDesc = $_POST['taskDesc'];

$startDatetime = $_POST['startDatetime'];
if($startDatetime == ""){$startDatetime = NULL;}

$endDatetime = $_POST['endDatetime'];
if($endDatetime == ""){$endDatetime = NULL;}

$actionTaken = $_POST['actionTaken'];
$actualclosedDate = $_POST['actualclosedDate'];
$justificationOutstanding = $_POST['justificationOutstanding'];
$pendingJustification = $_POST['pendingJustification'];

if($timeRequested == '' || $timeRequested == NULL){
$query="UPDATE preventivemaintenance SET 
hospital = '$hospital',
wrNo = '$wrNo',
dateRequested = '$dateRequested',
timeRequested = NULL,
targetdate = '$targetdate',
ageing = '$ageing',
status = '$status',
type = '$type',
assetNo = '$assetNo',
assetDesc = '$assetDesc',
workgroup = '$workgroup',
details = '$details',
taskDesc = '$taskDesc',
startDatetime = '$startDatetime',
endDatetime = '$endDatetime',
actionTaken = '$actionTaken',
actualclosedDate = '$actualclosedDate',
justificationOutstanding = '$justificationOutstanding',
pendingJustification = '$pendingJustification'
WHERE id='$id' ";
}
else {
$query="UPDATE preventivemaintenance SET 
hospital = '$hospital',
wrNo = '$wrNo',
dateRequested = '$dateRequested',
timeRequested = '$timeRequested',
targetdate = '$targetdate',
ageing = '$ageing',
status = '$status',
type = '$type',
assetNo = '$assetNo',
assetDesc = '$assetDesc',
workgroup = '$workgroup',
details = '$details',
taskDesc = '$taskDesc',
startDatetime = '$startDatetime',
endDatetime = '$endDatetime',
actionTaken = '$actionTaken',
actualclosedDate = '$actualclosedDate',
justificationOutstanding = '$justificationOutstanding',
pendingJustification = '$pendingJustification'
WHERE id='$id' ";
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
header("Location:../showAll_pMaintenance.php");
}
?>