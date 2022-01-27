<?php 
include_once './include/config.php';
session_start();

    if(isset($_POST['insertlogbook']))
    {
        $matricid=$_SESSION['User'];
        $fyptitle=$_POST["fyptitle"];
        $week=$_POST["week"];
        $date=$_POST["date"];
        $logdesc=$_POST["logdesc"];
        $file=$_POST["file"];

        

     $ret=mysqli_query($conn,"insert into logbook(fyptitle,week,date,logdesc,file,matricid) values('$fyptitle','$week','$date','$logdesc','$file','$matricid')");
    if($ret)
    {
       // $ret2=mysqli_query($conn,"insert into logbook(fypid) select fypid from studentfyp1 where matricid='".$_SESSION['User']."'");
        

    //$_SESSION['msg']="Enroll Successfully !!";
    ?>
                
    <script>window.alert("Insert Successfully");
    location="logbookfyp1page2.php";</script>
    
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

else if(isset($_POST['insertlogbook2']))
{
    $matricid=$_SESSION['User'];
    $fyptitle=$_POST["fyptitle"];
    $week=$_POST["week"];
    $date=$_POST["date"];
    $logdesc=$_POST["logdesc"];
    $file=$_POST["file"];

    

 $ret=mysqli_query($conn,"insert into logbook(fyptitle,week,date,logdesc,file,matricid) values('$fyptitle','$week','$date','$logdesc','$file','$matricid')");
if($ret)
{
   // $ret2=mysqli_query($conn,"insert into logbook(fypid) select fypid from studentfyp1 where matricid='".$_SESSION['User']."'");
    

//$_SESSION['msg']="Enroll Successfully !!";
?>
            
<script>window.alert("Insert Successfully");
location="logbookfyp1page2.php";</script>

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
    location="#";</script>
    
    <?php
}







?>
            
           
