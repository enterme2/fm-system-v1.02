<?php
require('../php/connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{
$id = $_GET['id'];
}

// Perform an SQL query
$sql = "SELECT * FROM employees WHERE ID = $id";
if (!$result = $db->query($sql)) {
    // Oh no! The query failed. 
    echo "Sorry, the website is experiencing problems.";

    // Again, do not do this on a public site, but we'll show you how
    // to get the error information
    echo "Error: Our query failed to execute and here is why: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $db->errno . "\n";
    echo "Error: " . $db->error . "\n";
    exit;
}


$test = $result->fetch_assoc();

if (!$result) 
		{
		die('Error: Data not found..');
		}

$staff_ID = $test['staff_ID'];
$nameEmployee = $test['nameEmployee'];
$username = $test['username'];
$password = $test['password'];
$usertype = $test['usertype'];
$assigned_area = $test['assigned_area'];
if($usertype=="Admin")
    {
        $selected1="";
        $selected2="selected";
        $selected3="";  
    }
    elseif($usertype=="Technician")
    {
        $selected2="";
        $selected1="";
        $selected3="selected";
    }
    else
    {
        $selected1="selected";
        $selected2="";
        $selected3="";
    }

$result->free();
$db->close();

?>