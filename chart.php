<?php
  $con = mysqli_connect("localhost","root","","studFYP");
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
      <link href="css/ratinglayout.css" type="text/css" rel="stylesheet" media="screen,projection">

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">

   
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
   
   
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['name', 'average_rating'],
      
         <?php
         $sql = "SELECT name, average_rating FROM studentlist";
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

  
      <div class="header" >
        <div class ="inner_header">
            <div class="logo_container">
               <img src="umplogo.png" alt="imgheader">
               <h1>Student FYP Management System</h1>
            </div>
          <nav>
            <li><span><a href="logout.php">Logout</a></span></li>
          </nav>
        </div>
      </div>


  
    
    <div id="piechart" style="width: 700px; height: 450px; margin:0 auto; "></div>
  
    
    <div class= "ratebutton">
        <button class="backbutton" style="margin-left:170px" onclick="history.back()">◁ Back</button>
    </div>



    <footer id="footer">     
            <span> Copyright &copy; 2021 All Right Reserved</span>
    </footer>

    

  

</html>










