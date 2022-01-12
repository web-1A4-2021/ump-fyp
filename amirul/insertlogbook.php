<?php 
require_once('connect.php');
session_start();

    if(isset($_POST['insertlogbook']))
    {
        $id=$_SESSION['User'];
        $week=$_POST["week"];
        $date=$_POST["date"];
        $logdesc=$_POST["logdesc"];
        $file=$_POST["file"];

        

     $ret=mysqli_query($con,"insert into logbook(week,date,logdesc,file,fypid) values('$week','$date','$logdesc','$file','$id')");
    if($ret)
    {
    //$_SESSION['msg']="Enroll Successfully !!";
    ?>
                
    <script>window.alert("Insert Successfully");
    location="logbook2.php";</script>
    
    <?php
}
else
{
  //$_SESSION['msg']="Welcome back" . $_SESSION['User'];
  ?>
                
    <script>window.alert("Have Error");
    location="logbook.php";</script>
    
    <?php
}
}

else{
 // $_SESSION['msg']="Welcome " . $_SESSION['User'];
  ?>
                
    <script>window.alert("Fail");
    location="logbook.php";</script>
    
    <?php
}







?>
            
           
