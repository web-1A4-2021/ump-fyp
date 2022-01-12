<?php 
require_once('connect.php');
session_start();

    if(isset($_POST['enrol1']))
    {
        $id=$_SESSION['User'];

     $ret=mysqli_query($con,"insert into fyp(fypid) values('$id')");
    if($ret)
    {
    $_SESSION['msg']="Enroll Successfully !!";
    ?>
                
    <script>window.alert("Enrol Successfully");
    location="home2.php";</script>
    
    <?php
}
else
{
  $_SESSION['msg']="Welcome back" . $_SESSION['User'];
  ?>
                
    <script>window.alert("Your already enrol the FYP 1");
    location="home2.php";</script>
    
    <?php
}
}

else{
  $_SESSION['msg']="Welcome " . $_SESSION['User'];
  ?>
                
    <script>window.alert("Your already enrol the FYP 1");
    location="home2.php";</script>
    
    <?php
}







?>
            
           
