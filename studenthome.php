<?php 
session_start();
$_SESSION['User'] ='user_id';
?>
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

        <title>Home</title>
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
                <li><span><button><?php echo '<a href="login.php?logout">Logout</a>';?></button></a></span></li>
      </nav>
</div></div>
            
        </div>
</div>

<div class="row">
    <div class="column left">
    <ul>
       <li> <a href="studenthome.php" class="button" name="studenthome">Home</a></li>
        <li><a href="studentlogbook.php" class="button"  name="studentlogbook">Logbook</a></li>
       <li><a href="supervisorinfo.php" class="button" name="svprofile">Supervisor Info</a></li>
        <li><a href="status.php" class="button" name="studentstatus">Status</a></li>
       <li><a href="studentprofile.php" class="button"  name="studentprofile">Profile</a></li>
       <li><a href="studentrate.php" class="button"  name="studentrate">Rate</a></li>
    </div>
    <div class="column right">
        <br>


        
        <div align="center"><h2> Welcome </h2><br>
        <p>Enrolment Options.</p>
        <p>Final Year Project 1 (FYP1)</p><br><br><br>
        <p>Self Enrolment (Student)</p><br>
        <form action="studentenrol1.php" method="post">
        <p><button type="submit" name="enrol1">Enrol Me</button></a></p>
        </form>
      </div>
    </div>
        





<footer id="footer">     
                        <span> Copyright &copy; 2021 All Right Reserved</span>
            </footer>


    </body>
</html>

