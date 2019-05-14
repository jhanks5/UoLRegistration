<?php
session_start();
session_destroy();
header("location: index.php"); //redirect back to login page
exit;
?>