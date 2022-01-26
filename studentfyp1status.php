<?php 
include_once './include/config.php';
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

        <title>Status</title>
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
                <li><span><a href="logout.php"><button>Logout</button></a></span></li>
      </nav>
</div></div>
            
        </div>
</div>

<div class="row">
    <div class="column left">
    <ul>
    <li> <a href="studenthome2.php" class="button" name="home">Home</a></li>
        <li><a href="logbookfyp1page2.php" class="button"  name="studinfo">Logbook</a></li>
       <li><a href="studentsvinfo.php" class="button" name="profile">Supervisor Info</a></li>
        <li><a href="studentfyp1status.php" class="button" name="status">Status</a></li>
       <li><a href="studentfyp1profile.php" class="button"  name="profile">Profile</a></li>
       <li><a href="#" class="button"  name="report">Rate</a></li>
    </div>
    <div class="column right">
        <br>


    <div align="center"><h3>Student Status</h3><br><br>
     <table><tr><td><p>FYP 1 Result :&nbsp;<input type="text" name="result1" readonly></p><br><br>
        <p>FYP 2 Result :&nbsp;<input type="text" name="result2" readonly value="not available"></p><br><br>
        <p>Enrol FYP 2 Here :</p><br>
        <p><a href="logout.php"><button>Enrol Me</button></a></p><br><br><br><br><br>
        <p>Final Rate for your Final Year Projet:
        </p>
</td></tr><tr><td>

<table>
<tr>
    <th>Mark</th>
    <th>Gred</th>
</tr>


</table>




</td></tr>



</table>
        









    </div>









</div>

 


<footer id="footer">     
                        <span> Copyright &copy; 2021 All Right Reserved</span>
            </footer>


    </body>
</html>
