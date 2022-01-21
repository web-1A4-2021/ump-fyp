<?php 
include_once './include/config.php';
session_start();

    if(isset($_POST['enrol1']))
    {
        $matricid=$_SESSION['User'];

     $ret=mysqli_query($conn,"insert into fypstudent1(matricid) values('$matricid')");
    if($ret)
    {
    ?>
                
    <script>window.alert("Enrol Successfully");
    location="studenthome2.php";</script>
    
    <?php
}
else
{
   echo "Error"
   header("location:../studenthome2.php");
}

    }

else{
  
  header("location:../studenthome.php");
}







?>
            
           
