<?php

include('../../php/connect.php');

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
$endDatetime = $_POST['endDatetime'];
$actionTaken = $_POST['actionTaken'];
$actualclosedDate = $_POST['actualclosedDate'];
$justificationOutstanding = $_POST['justificationOutstanding'];
$pendingJustification = $_POST['pendingJustification'];

if($timeRequested == '' || $timeRequested == NULL){
$query="INSERT INTO preventivemaintenance (hospital,wrNo,dateRequested,timeRequested,targetdate,ageing,status,type,assetNo,assetDesc,workgroup,details,taskDesc,startDatetime,endDatetime,actionTaken,actualclosedDate,justificationOutstanding,pendingJustification) VALUES ('$hospital',
'$wrNo','$dateRequested',NULL,'$targetdate','$ageing','$status','$type','$assetNo','$assetDesc','$workgroup','$details','$taskDesc','$startDatetime','$endDatetime','$actionTaken','$actualclosedDate','$justificationOutstanding','$pendingJustification')";
}
else{
$query="INSERT INTO preventivemaintenance (hospital,wrNo,dateRequested,timeRequested,targetdate,ageing,status,type,assetNo,assetDesc,workgroup,details,taskDesc,startDatetime,endDatetime,actionTaken,actualclosedDate,justificationOutstanding,pendingJustification) VALUES ('$hospital',
'$wrNo','$dateRequested','$timeRequested','$targetdate','$ageing','$status','$type','$assetNo','$assetDesc','$workgroup','$details','$taskDesc','$startDatetime','$endDatetime','$actionTaken','$actualclosedDate','$justificationOutstanding','$pendingJustification')";
}
$query=mysqli_query($db,$query);
 
 if (!$query) 
  {
  echo "Sorry, this website is experiencing problems.";

  //remove this later
  echo("Error description: " . mysqli_error($db));
  }
  else{

mysqli_close($db);
header("Location:../showAll_pMaintenance.php");
  }



?>