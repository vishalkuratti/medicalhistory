<?php
session_start();
session_unset();
session_destroy();
ob_start();
header("location:log.php");
ob_end_flush();
include 'connect.php';
exit();
?>
