<?php
require('../php/connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{
$id = $_GET['id'];
}

// Perform an SQL query
$sql = "SELECT * FROM complaint WHERE ID = $id";
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
$complaintNo = $test['complaintNo'];
$dateRequested = $test['dateRequested'];
$timeRequested = $test['timeRequested'];

$reference = $test['reference'];
$complaintDetails = $test['complaintDetails'];
$actionTaken = $test['actionTaken'];
$name = $test['name'];
$dateCompleted = $test['dateCompleted'];

$status = $test['status'];
if($status=="")
    {
        $selected1="";
        $selected2="";
        $selected3="";
    }
elseif ($status=="Open")
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


mysqli_free_result($result);
mysqli_close($db);
?>