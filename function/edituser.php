<?php
//* Connect to database
include_once "../include/config.php";
$userid = $_POST['userid'];

echo "<script>alert($userid);</script>";