<?php
//* Connect to database
include_once "../include/config.php";

$matricid = $_POST["matricid"];
$userrole = $_POST["userrole"];
$usertype = $_POST["usertype"];
"<script>console.log('$matricid');</script>";

$query = "INSERT INTO userinfo (matricid, userrole,usertype) VALUES ('$matricid', '$userrole', '$usertype');";
$register = mysqli_query($conn,$query);
if($register)
{
    echo "<script>Alert(User '$matricid' Registered);</script>";
    header("location:../admin/admin.php?new=true");
}
else
{
    echo "<br>Error: ".$register."<br>".mysqli_error($conn);
}
