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
    <li> <a href="studenthome2.php" class="button" name="home">Home</a></li>
        <li><a href="logbookfyp1page2.php" class="button"  name="studinfo">Logbook</a></li>
       <li><a href="studentsvinfo.php" class="button" name="profile">Supervisor Info</a></li>
        <li><a href="studentfyp1status.php" class="button" name="status">Status</a></li>
       <li><a href="studentfyp1profile.php" class="button"  name="profile">Profile</a></li>
       <li><a href="#" class="button"  name="report">Rate</a></li>
    </div>
    <div class="column right">
        <br>


    <div align="center"><h3>Logbook Activities Every Week</h3><br><br>
<form action="studentinsertlogbookfyp1.php" method="post">
        <table>
        <tr>
  <td><label>Final Year Project Title :</label></td>
  <td><input type="text" name="fyptitle"></td>
</tr>
        <tr>
  <td><label>Week :</label></td>
  <td><select name="week">
                 <option value="You need to update. Go to View.">Select Week</option>
                 <option value="1">Week 1</option>
                 <option value="2">Week 2</option>
                 <option value="3">Week 3</option>
                 <option value="4">Week 4</option>
                 <option value="5">Week 5</option>
                 <option value="6">Week 6</option>
                 <option value="7">Week 7</option>
                 <option value="8">Week 9</option>
                 <option value="9">Week 10</option>
                 <option value="10">Week 11</option>
                 <option value="11">Week 12</option>
                 <option value="12">Week 13</option>
                 <option value="13">Week 15</option>
                </select></td>
</tr>
<tr>
  <td><label>Date :</label></td>
  <td><input type="text" name="date" placeholder="yyyy-mm-dd"></td>
</tr>
<tr>
  <td><label>Activity Description :</label></td>
  <td><textarea name="logdesc" row="200" cols="80"></textarea></td>
</tr>
<tr>
  <td><lable>Upload :</label></td>
  <td><input type="file" name="file"/></td>
</tr>
<br>
<tr>
  <td></td>
  <td></td>
</tr>

    
 </table><br><br><br><br>
 <input type="submit" value="Submit" name="insertlogbook" />&nbsp;&nbsp;    

 
    </form>
  
    </div>

</div>

 


<footer id="footer">     
                        <span> Copyright &copy; 2021 All Right Reserved</span>
            </footer>


    </body>
</html>
