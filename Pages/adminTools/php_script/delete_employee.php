<?php

// connect to the database

include('../../php/connect.php');



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['id']) && is_numeric($_GET['id']))

{

// get id value

$id = $_GET['id'];



// delete the entry
$query="DELETE FROM employees WHERE ID=$id";
$result = mysqli_query($db,$query);

if (!$result)
  {
  echo "Sorry, this website is experiencing problems.";

  //remove this later
  header("Location: ../showAll_pMaintenance.php");
  }

else

// if id isn't set, or isn't valid, redirect back to view page

{

header("Location: ../show_employee.php");

}
}

mysqli_close($db);
?>