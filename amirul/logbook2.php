<?php 
require_once('connect.php');
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

        <title>Logbook</title>
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
       <li> <a href="Home2.php" class="button" name="home">Home</a></li>
        <li><a href="Logbook2.php" class="button"  name="studinfo">Logbook</a></li>
       <li><a href="Supervisorinfo.html" class="button" name="profile">Supervisor Info</a></li>
        <li><a href="Status.html" class="button" name="rate">Status</a></li>
       <li><a href="#" class="button"  name="report">Profile</a></li>
       <li><a href="#" class="button"  name="report">Rate</a></li>
    </div>
    <div class="column right">
        <br>


    <div align="center"><h3>Logbook Activities Every Week</h3><br>

      




    <form>

<table class="center">

    <tr>
        <th>WeeK</th>
        <th>View</th>
        <th>Delete</th>
    </tr>
    <tr>
       <?php

        
           $sql = "select week from logbook where fypid='".$_SESSION['User']."'"; 
           $result = $con -> query($sql);

           if ($result !== false && $result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
          ?>
              
          
          
                 <tr>
                  <td><?php echo $row['week'] ?></td>
                  <td><a href="viewlogbook.php?id=<?php echo $row['week'] ?>">View</a></td>
                  <td><a href="deletelogbook.php?id=<?php echo $row['week'] ?>">Delete</a></td></tr>
           
          <?php
            }
          } else { ?>
              
              <p align ="center"><?php echo "No data in databases";?></p> <?php
          }
           
          
          $con->close();
          ?>


</table>
<br><br>
</form>
<a href="logbook.php"><input type="submit" value="Add your activities" /></a>
    </div>


</div>

 


<footer id="footer">     
                        <span> Copyright &copy; 2021 All Right Reserved</span>
            </footer>


    </body>
</html>
