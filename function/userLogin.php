<?php
//connect to databse
include_once '../include/config.php';
session_start();

$matricid = $_POST['matricid'];
$password = $_POST['pwd'];
$usertype =$_POST['usertype'];
$userid = $_POST['user_id'];

$login = mysqli_query($conn,"select * from login where matricid='$matricid' and password='$password'");
$check = mysqli_num_rows($login);

if($check>0)
{
    $data = mysqli_fetch_assoc($login);
    //echo $data['matricid'];
    header("location:../admin/admin.php");
}
if($check==1)
{
    $data = mysqli_fetch_assoc($login);
    
    $_SESSION['user']= $userid;
    header("location:../suphome.php");
 
  
    //echo $data['matricid'];
}

if($check==2)
{
    $data = mysqli_fetch_assoc($login);
    
    $_SESSION['user']= $userid;
    header("location:../studenthome.php");
 
  
    //echo $data['matricid'];
}


    