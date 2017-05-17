<?php

include('../../php/connect.php');

$hospital = $_POST['hospital'];
$wrNo = $_POST['wrNo'];
$dateRequested = $_POST['dateRequested'];
$timeRequested = $_POST['timeRequested'];
$targetDate = $_POST['targetDate'];
//$ageing = $_POST['ageing'];
$status = $_POST['status'];
$requestor = $_POST['requestor'];
$category = $_POST['category'];
$assetNo = $_POST['assetNo'];
$workgroup = $_POST['workgroup'];
$details = $_POST['details'];
$startDatetime = $_POST['startDatetime'];
$endDatetime = $_POST['endDatetime'];
$actionTaken = $_POST['actionTaken'];
$actualclosedDate = $_POST['actualclosedDate'];
$justificationOutstanding = $_POST['justificationOutstanding'];
$pendingJustification = $_POST['pendingJustification'];


if($timeRequested == '' || $timeRequested == NULL){
$action="INSERT INTO workrequest (hospital,wrNo,dateRequested,timeRequested,targetDate,status,requestor,category,assetNo,workgroup,details,startDatetime,endDatetime,actionTaken,actualclosedDate,justificationOutstanding,pendingJustification) VALUES ('$hospital','$wrNo','$dateRequested',NULL,'$targetDate','$status','$requestor','$category','$assetNo','$workgroup','$details','$startDatetime','$endDatetime','$actionTaken','$actualclosedDate','$justificationOutstanding','$pendingJustification')";
}
else{
$action="INSERT INTO workrequest (hospital,wrNo,dateRequested,timeRequested,targetDate,status,requestor,category,assetNo,workgroup,details,startDatetime,endDatetime,actionTaken,actualclosedDate,justificationOutstanding,pendingJustification) VALUES ('$hospital','$wrNo','$dateRequested','$timeRequested','$targetDate','$status','$requestor','$category','$assetNo','$workgroup','$details','$startDatetime','$endDatetime','$actionTaken','$actualclosedDate','$justificationOutstanding','$pendingJustification')";
}
$query=mysqli_query($db,$action);
if (!$query)
  {
  echo "Sorry, this website is experiencing problems.";

  //remove this later
  echo("Error description: " . mysqli_error($db));
  }
else{
mysqli_free_result($query);
mysqli_close($db);
header("Location:../showAll_wRequest.php");
}
?>