<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location:../loggedOut/loggedOut.php"); // Redirecting To Home Page
}
?>