<?php 
include_once './include/config.php';
session_start();

    if(isset($_POST['enrol1']))
    {
        $matricid=$_SESSION['User'];

     $ret=mysqli_query($conn,"insert into studentfyp1 (fypid,matricid,studentname,studentemail,pcode,phone,semester) select studentid,matricid,studentname,studentemail,pcode,phone,semester from student where matricid='".$_SESSION['User']."'");
    if($ret)
    {
    $_SESSION['msg']="Enroll FYP1 Successfully !!";
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

if(isset($_POST['enrol2']))
    {
        $matricid=$_SESSION['User'];

     $ret=mysqli_query($conn,"insert into studentfyp1 (fypid,matricid,studentname,studentemail,pcode,phone,semester) select studentid,matricid,studentname,studentemail,pcode,phone,semester from student where matricid='".$_SESSION['User']."'");
    if($ret)
    {
    $_SESSION['msg']="Enroll FYP2 Successfully !!";
    ?>
                
    <script>window.alert("Enrol Successfully");
    location="logbookfyp1.php";</script>
    
    <?php
}
else
{
  $_SESSION['msg']="Welcome back" . $_SESSION['User'];
  ?>
                
    <script>window.alert("Your already enrol the FYP 2");
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
            
           
