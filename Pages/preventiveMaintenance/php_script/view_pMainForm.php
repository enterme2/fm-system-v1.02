<?php
require('../php/connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{
$id = $_GET['id'];
}

// Perform an SQL query
$sql = "SELECT * FROM preventivemaintenance WHERE ID = $id";
$result = mysqli_query($db,$sql);
if (!$result) 
    {
    // Oh no! The query failed. 
    echo "Sorry, the website is experiencing problems.";

    // Again, do not do this on a public site, but we'll show you how
    // to get the error information
    echo "Error: Our query failed to execute and here is why: \n";
    echo "Query: " . $sql . "\n";
    echo("Error description: " . mysqli_errno($db));
    echo("Error description: " . mysqli_error($db));
    exit;
}

//

$test=mysqli_fetch_assoc($result);

if (!$result) 
		{
		die('Error: Data not found..');
		}


$hospital = $test['hospital'];
$wrNo = $test['wrNo'];
$dateRequested = $test['dateRequested'];
$timeRequested = $test['timeRequested'];


$targetdate = $test['targetdate'];
if ($targetdate=="0000-00-00")
{ $targetdateView=NULL; }
else{ $targetdateView = date("Y-m-d", strtotime($targetdate)); }

$ageing = $test['ageing'];
$status = $test['status'];

if ($status=="Open")
    {
        $selected1="selected";
        $selected2="";
        $selected3="";  
    }
elseif ($status=="Pending")
    {
        $selected2="selected";
        $selected1="";
        $selected3="";
    }
elseif ($status=="Closed")
    {
        $selected3="selected";
        $selected2="";
        $selected1="";
    }
else
    {
        $selected1="";
        $selected2="";
        $selected3="";
    }
$type = $test['type'];
$assetNo = $test['assetNo'];
$assetDesc = $test['assetDesc'];
$workgroup = $test['workgroup'];
$details = $test['details'];
$taskDesc = $test['taskDesc'];

$startDatetime = $test['startDatetime'];
//if($startDatetime == "1970-01-01 01:00:00"){$startdatetimeView = NULL;}
//else { $startdatetimeView = date("Y-m-d\TH:i:s", strtotime($startDatetime)); }


$endDatetime = $test['endDatetime'];
//if($endDatetime == "1970-01-01 01:00:00"){$enddatetimeView = NULL;}
//else { $enddatetimeView = date("Y-m-d\TH:i:s", strtotime($startDatetime)); }

$actionTaken = $test['actionTaken'];

$actualclosedDate = $test['actualclosedDate'];
if ($actualclosedDate=="0000-00-00")
{ $actualclosedDateView=NULL; }
else{ $actualclosedDateView = date("Y-m-d", strtotime($actualclosedDate)); }

$justificationOutstanding = $test['justificationOutstanding'];
$pendingJustification = $test['pendingJustification'];
    if($pendingJustification=="Asset Not Found")
    {
        $selectedJustification1="selected";
        $selectedJustification2="";
        $selectedJustification3="";
        $selectedJustification4="";  
    }
    elseif($pendingJustification=="Asset Under Repair")
    {
        $selectedJustification2="selected";
        $selectedJustification1="";
        $selectedJustification3="";
        $selectedJustification4=""; 
    }
    elseif($pendingJustification=="Reschedule")
    {
        $selectedJustification3="selected";
        $selectedJustification2="";
        $selectedJustification1="";
        $selectedJustification4=""; 
    }
    else
    {
        $selectedJustification3="";
        $selectedJustification2="";
        $selectedJustification1="";
        $selectedJustification4="selected"; 
    }


mysqli_close($db);
?>