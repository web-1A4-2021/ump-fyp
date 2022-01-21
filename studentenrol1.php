<?php 
include_once './include/config.php';
session_start();


    if(isset($_POST['enrol1']))
    {
      //$id=$_SESSION['User'];
      $_SESSION['User'] =$matricid;

     $ret=mysqli_query($conn,"insert into fypstudent(matricid) values('$matricid') ");

    if($ret)
    {
    $_SESSION['msg']="Enroll Successfully !!";
    ?>
                
    <script>window.alert("Enrol Successfully");
    location="studenthome.php";</script>
    
    <?php
}
else
{
  $_SESSION['msg']="Welcome back" . $_SESSION['User'];
  ?>
                
    <script>window.alert("Your already enrol the FYP 1");
    location="studenthome.php";</script>
    
    <?php
}
}

else{
  $_SESSION['msg']="Welcome " . $_SESSION['User'];
  ?>
                
    <script>window.alert("Your already enrol the FYP 1");
    location="studenthome.php";</script>
    
    <?php
}







?>
            
           
