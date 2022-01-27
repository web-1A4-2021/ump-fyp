<?php
//* connect to databse
include_once "../include/config.php";
session_start();

$matricid = $_POST['matricid'];
$password = $_POST['pwd'];
$usertype =$_POST['usertype'];

$login = mysqli_query($conn,"SELECT * FROM userinfo WHERE matricid='$matricid' and password='$password' and usertype='$usertype'");
$check = mysqli_num_rows($login);//number of row
//! Landing page for coo,fyp1,fyp2,lec,std
//TODO Update coo, fyp1, fyp2, lec, std
if($check>0)
{
    $data = mysqli_fetch_assoc($login);
    if($data['userrole']=='adm')
    {
        $_SESSION['matricid'] = $matricid;
		$_SESSION['userrole'] = "adm";
        header("location:../admin/admin.php");//* admin page
    }
    else if($data['userrole']=='coo')
    {
        $_SESSION['matricid'] = $matricid;
		$_SESSION['userrole'] = "coo";
        header("location:../search_student.php");//* coordinator page
    }
    else if($data['userrole']=='sup'){
        $_SESSION['matricid'] = $matricid;
		$_SESSION['userrole'] = "sup";
        header("location: ../suphome.php");//*supervisor page
    }
    else if($data['userrole']=='eva'){
        $_SESSION['matricid'] = $matricid;
		$_SESSION['userrole'] = "eva";
        header("location:../evaluationpage.php");//*evaluator page
    }
    else if($data['userrole']=='fyp1'){
        $_SESSION['matricid'] = $matricid;
		$_SESSION['userrole'] = "fyp1";
        header("location:../");//* fyp1 page
    }
    else if($data['userrole']=='fyp2'){
        $_SESSION['matricid'] = $matricid;
		$_SESSION['userrole'] = "fyp2";
        header("location:../");//* fyp2 page
    }
    else if($data['userrole']=='lec'){
        $_SESSION['matricid'] = $matricid;
		$_SESSION['userrole'] = "fyp1";
        header("location:../");//* lecturer page
    }    
    else if($data['userrole']=='std'){
        
        $_SESSION['User'] = $matricid;
		$_SESSION['userrole'] = "std";

        
        header("location:../studenthome.php");//* student page
    }
    else{
        header("location:../index.php");
    }
}
else{
    header("location:../index.php");
}


    