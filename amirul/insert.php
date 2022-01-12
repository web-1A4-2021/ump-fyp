<?php 
require_once('connect.php');
session_start();

    if(isset($_POST['Login']))
    {
       if(empty($_POST['id']) || empty($_POST['programcode']))
       {
            header("location:index.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from student where id='".$_POST['id']."' and programcode='".$_POST['programcode']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                
                $_SESSION['User']=$_POST['id'];
                ?>
                <script>window.alert("Login Successfully !");
                
                location="home.php";</script>
                <?php   }
                

        
            else
            {
                header("location:login.php?Invalid= Invalid username and password ");
            }
       }
    }
    else
    {
        echo 'Connection Error';
    }

?>




