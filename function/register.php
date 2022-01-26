<?php
//* Connect to database
include_once "../include/config.php";

$matricid = $_POST["matricid"];
$usertype = $_POST["userrole"];
$userrole = $_POST["usertype"];

$register = "INSERT INTO userinfo (matricid, userrole,usertype) VALUES ($matricid, $userrole, $usertype)";
if(mysqli_query($conn,$register))
{
    echo "<script>console.log('$matricid');</script>";
}
else
{
    echo "Error: " . $register . "<br>" . mysqli_error($conn);
}
