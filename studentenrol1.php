<?php 
include_once './include/config.php';
session_start();

    if(isset($_POST['enrol1']))
    {
        $matricid=$_SESSION['User'];

     $ret=mysqli_query($conn,"insert into fypstudent (fypid,matricid,studentname,studemail,pcode,fypstatus,phone,semester) select studentid,matricid,studentname,studemail,pcode,fypstatus,phone,semester from student where matricid='".$_SESSION['User']."'");
    if($ret)
    {
    $_SESSION['msg']="Enroll Successfully !!";
    ?>
                
    <script>window.alert("Enrol Successfully");
    location="logbookfyp1.php";</script>
    
    <?php
}
else
{
  $_SESSION['msg']="Welcome back" . $_SESSION['User'];
  ?>
                
    <script>window.alert("Your already enrol the FYP 1");
    location="logbookfyp1.php";</script>
    
    <?php
}
}

else{
  $_SESSION['msg']="Welcome " . $_SESSION['User'];
  ?>
                
    <script>window.alert("Your already enrol the FYP 1");
    location="logbookfyp1.php";</script>
    
    <?php
}







?>
            
           
