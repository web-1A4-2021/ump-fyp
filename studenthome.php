<?php 
//require_once('connect.php');
include_once '../include/config.php';
session_start();?>
<!DOCTYPE html>
<html lang="en">
    <head>
        

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-sacale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
        <link href="css/layout.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="css/sidebar.css" type="text/css" rel="stylesheet" media="screen,projection">

        <title>Student-Home</title>
        <style>
       table.center{
           text-align: center;
           padding-left:100px;
       }


        </style>
    </head>
    <body>
    <div class="header">
        <div class ="inner_header">
            <div class="logo_container">
            <img src="umplogo.png" alt="imgheader">  
            </div><div class="textheader"><h1>Student FYP Management System</h1><div><nav>
                <li><span><button><?php echo '<a href="index.php?logout">Logout</a>';?></button></a></span></li>
      </nav>
</div></div>
            
        </div>
</div>

<div class="row">
    <div class="column left">
    <ul>
       <li> <a href="studenthome.php" class="button" name="home">Home</a></li>
        <li><a href="logbook.php" class="button"  name="studinfo">Logbook</a></li>
       <li><a href="supervisorinfo.php" class="button" name="profile">Supervisor Info</a></li>
        <li><a href="status.php" class="button" name="rate">Status</a></li>
       <li><a href="studentprofile.php" class="button"  name="report">Profile</a></li>
       <li><a href="studentrate.php" class="button"  name="report">Rate</a></li>
    </div>
    <div class="column right">
        <br>


<?php if(isset($_SESSION['User']))
    {?>
        
        <div align="center"><h2><?php  echo ' Welcome ' . $_SESSION['User'].'<br/>'; ?></h2><br>
        <p>Enrolment Options.</p>
        <p>Final Year Project 1 (FYP1)</p><br><br><br>
        <p>Self Enrolment (Student)</p><br>
        <form action="enrol1.php" method="post">
        <p><button type="submit" name="enrol1">Enrol Me</button></a></p>
        </form>
      </div>
    </div>
        
  <?php  }
    else
    {
        header("location:index.php");
    }

?>





<footer id="footer">     
                        <span> Copyright &copy; 2021 All Right Reserved</span>
            </footer>


    </body>
</html>

