<?php
echo 'You have been logged out. <a href="main.php">Go back</a>';
session_start();
session_destroy();
?>
