<?php

session_start();
include_once './include/config.php';


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

        <title>Student Profile</title>
        <style>
           table.center{
           text-align: center;
           padding-left:100px;
       }
       table{
           margin-left:100px;
            text-align: center;
            width: 80%;

        }
        .left ul li .button{
      height:20%;
  }
        

        </style>
    </head>
    <body>
    <div class="header">
        <div class ="inner_header">
            <div class="logo_container">
            <h1><img src="umplogo.png" alt="imgheader">  Student FYP Management System </h1>
            </div>
        <nav>
          <li style="list-style-type:none;"><span ><a href="logout.php" style="color:#fff; " >Logout</a></span></li>
</nav>

        </div>
</div>

<div class="row">
    <div class="column left">
        <ul>
        <li> <a href="suphome.php" class="button" name="home">Home</a></li>
        <li><a href="studentinfo.php" class="button"  name="studinfo">Student Info</a></li>
       <li><a href="supprofile.php" class="button" name="profile">Profile</a></li>
       <li><a href="supevaluation.php" class="button" name="evaluation">Evaluation</a></li>
        <li><a href="rating.php" class="button" name="rate">Rate</a></li>
       <li><a href="supreport.php" class="button"  name="report">Report</a></li>
    </div>
    <div class="column right">

 
     
        
       <br><h3>Announcement !!!</h3><br>
   
    <form>
        
    <table class="center">

<tr>
    <th>Title</th>
    <th>Date</th>
    <th>Content</th>
  
</tr>
<tr>
    <?php
        $sql = "SELECT * FROM announcement" ;
                $result = $conn -> query($sql);

                if($result->num_rows > 0){
                    while($row = $result -> fetch_assoc() )
                 {
                    echo '<tr><td>' .$row["Title"]. '</td>';
                     echo '<td>' .$row["Date"]. '</td>';
                   echo '<td>' .$row["Content"]. '</td>';
                  
              }

          }
          else{
              echo "No Result";
          }
          $conn->close();
          ?>



        



 </table>

 


</form>


</div>


<footer id="footer">     
                        <span> Copyright &copy; 2021 All Right Reserved</span>
            </footer>

    </body>

    
</html>