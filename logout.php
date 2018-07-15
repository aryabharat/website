<?php


session_start();
if( !isset($_SESSION['Name']) AND empty($_SESSION['Name']))
    header("location: index.php");
echo 'You have been logged out. <a href="index.php">Go back</a>';
session_destroy();
?>
