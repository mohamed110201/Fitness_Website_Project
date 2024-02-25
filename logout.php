<?php
session_start();
session_unset();
session_destroy();
header('location:login.php');
echo '<script> alert("You are signed out")</script>';
exit();

?>