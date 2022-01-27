<?php
session_start();
?>
<?php

//Connect to the database server.
  $link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

  //Select the database.
  mysqli_select_db($link, "studfyp") or die(mysqli_error($link));
                //SQL query
                if(isset($_POST['submit'])){
                    $stdname = $_POST['stdname'];
                    $supname = $_POST['supname'];
                    
                
                    //SQL query
                    $strSQL = "INSERT INTO studentsupervisor  VALUES ('$stdname', '$supname')";
                    //Execute the query
                    if (mysqli_query($link, $strSQL)) {
                      //Redirect
                      echo '<script>alert("insert successfully")</script>';
                    }
                  }
               
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

        <title>Student Supervisor</title>
        <style>
        #table{
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#table td, #table th {
  border: 1px solid #ddd;
  padding: 8px;
}

#table tr:nth-child(even){background-color: #f2f2f2;}

#table tr:hover {background-color: #ddd;}

#table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
input[type=text],textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
       p{
          font-weight: bold; 
       }

        </style>
    </head>
    <body>
    <div class="header">
        <div class ="inner_header">
            <div class="logo_container">
            <h1><img src="img/logoUMP.png" alt="imgheader">  Student FYP Management System </h1>
            </div>
        <nav>
          <li><span><a href="logout.php">Logout</a></span></li>
</nav>

        </div>
</div>

<div class="row">
    <div class="column left">
    <ul>
       <li> <a href="#" class="button" name="home">Home</a></li>
        <li><a href="Calendarview.php" class="button"  name="calview">Calendarview</a></li>
       <li><a href="studentsupervisor.php" class="button" name="studentsupervisor">studentsupervisor</a></li>
       <li><a href="Announcement.php" class="button" name="announ">Announcement</a></li>
       <li><a href="Viewprogress.php" class="button" name="Viewprog">Viewprogress</a></li>
       <li><a href="search_student.php" class="button" name="search_student">SearchStudent</a></li>
        
       <li><a href="#" class="button"  name="report">Report</a></li>
       <li><a href="#" class="button" name="Calc">Calc</a></li>
    
    </div>
    <div class="column right">

    <body>
     <h2>Student Supervisor</h2>   
    
     
     
     <form method="post">
    <table id="table"> 
        
        <tr>
            <th>Select Student</th>
            <th>Select Supervisor</th>
        </tr> 
        <tr>
        <td>
        <select name="stdname">
     <?php
      $strSQL = "SELECT * from student";

      //Execute the query (the recordset $rs contains the result)
      $rs = mysqli_query($link, $strSQL);

      //Loop the recordset $rs 
      //Each row will be made into an array ($row) using mysql_fetch_array 
      while ($row = mysqli_fetch_array($rs)){


        ?>

    
<option value="<?php echo $row['studentid'];?>"><?php echo $row['studentname'];?></option>
    <?php
      }
      ?>
   </select>
        </td>
            <td>
            <select name="supname">
     <?php
      $strSQL = "SELECT * from supervisor";

      //Execute the query (the recordset $rs contains the result)
      $rs = mysqli_query($link, $strSQL);

      //Loop the recordset $rs 
      //Each row will be made into an array ($row) using mysql_fetch_array 
      while ($row = mysqli_fetch_array($rs)){


        ?>

    
<option value="<?php echo $row['sup_id'];?>"><?php echo $row['supname'];?></option>
    <?php
      }
      ?>
   </select> 
            </td>
        </tr> 
      
    </table> 
   
    
    

    
    <button type="submit" name="submit">Confrim</button>
    <form>
   
    









</div>

 


<footer id="footer">     
                        <span> Copyright &copy; 2021 All Right Reserved</span>
            </footer>


    </body>
</html>