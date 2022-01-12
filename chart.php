<?php
  $con = mysqli_connect("localhost","root","","test");
  if($con){
    //echo "connected";
  }
?>


<!DOCTYPE html>
<html lang="en">

  <head>
  <title>Average Rating</title>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-sacale=1.0, user-scalable=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="msapplication-tap-highlight" content="no">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
      <link href="layout.css" type="text/css" rel="stylesheet" media="screen,projection">

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">


      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
   
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['name', 'average_rating'],
      
         <?php
         $sql = "SELECT name, average_rating FROM student";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['name']."',".$result['average_rating']."],";
          }

         ?>
        ]);

        
        var options = {
          title: 'Average rating of students'
        };
        

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
     

    </script>
  </head>

      <div class="header">
        <div class ="inner_header">
            <div class="logo_container">
               <h1><img src="umplogo.png" alt="imgheader"> Student FYP Management System </h1>
            </div>
          <nav>
            <li><span><a href="logout.php">Logout</a></span></li>
          </nav>
        </div>
      </div>


  <body>
 
    <div id="piechart" style="width: 900px; height: 500px;"></div>
   
  </body>

</html>










