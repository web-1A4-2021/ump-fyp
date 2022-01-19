<?php
//connect to databse
include_once '../include/config.php';
session_start();

$matricid = $_POST['matricid'];
$password = $_POST['pwd'];
$usertype =$_POST['usertype'];
//$userid = $_POST['user_id'];

$login = mysqli_query($conn,"select * from userinfo where matricid='$matricid' and password='$password' and usertype='$usertype'");
$check = mysqli_num_rows($login);//number of row

if($check>0)
{
    $data = mysqli_fetch_assoc($login);
    if($data['userrole']=='adm')
    {
        $_SESSION['matricid'] = $matricid;
		$_SESSION['userrole'] = "admin";
        header("location:../admin/admin.php");//admin page
    }
    elseif($data['userrole']=='coo')
    {
        $_SESSION['matricid'] = $matricid;
		$_SESSION['userrole'] = "coo";
        header("location:../");// coordinator page
    }
    elseif($data['userrole']=='sup'){
        $_SESSION['matricid'] = $matricid;
		$_SESSION['userrole'] = "sup";
        header("location:../suphome.php");//supervisor page
    }
    elseif($data['userrole']=='eva'){
        $_SESSION['matricid'] = $matricid;
		$_SESSION['userrole'] = "admin";
        header("location:../evaluationpage.php");//evaluator page
    }
    elseif($data['userrole']=='fyp1'){
        //fyp1 page
    }
    elseif($data['userrole']=='fyp2'){
        //fyp2 page
    }
    elseif($data['userrole']=='lec'){
        //lecturer page
    }    
    elseif($data['userrole']=='std'){
        $_SESSION['matricid'] = $matricid;
		$_SESSION['userrole'] = "std";
        header("location:../studenthome.php");
        //student page
    }
    else{
        header("location:../index.php");
    }
}
else{
    header("location:../index.php");
}

if($check==2)
{
    $data = mysqli_fetch_assoc($login);
    
    $_SESSION['user']= $userid;
    header("location:../studenthome.php");
 
  
    //echo $data['matricid'];
}


    