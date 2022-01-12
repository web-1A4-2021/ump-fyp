<?php
//connect to databse
include_once '../include/config.php';

$matricid = $_POST['matricid'];
$password = $_POST['pwd'];
$usertype =$_POST['usertype'];

$login = mysqli_query($conn,"select * from login where matricid='$matricid' and password='$password'");
$check = mysqli_num_rows($login);

if($check>0)
{
    $data = mysqli_fetch_assoc($login);
    //echo $data['matricid'];
    header("location:../admin/admin.php");
}