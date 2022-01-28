<?php
session_start();
include_once './include/config.php';

$sql = "SELECT logbookfeedback, count(*) as number FROM logbook where matricid='".$_SESSION['User']."' " ;
$result = mysqli_query($conn, $sql);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
    <title>Supervisor Profile</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-sacale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
        <link href="css/layout.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="css/sidebar.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link rel="stylesheet" href="css/alert.css">
        <script>  src="https://code.jquery.com/jquery-3.6.0.js"</script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current',{'packages' :['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart()
            {
                var data = google.visualization.arrayToDataTable([
                    ['logbookfeedback','Number'],
                    <?php 
                    while($row = mysqli_fetch_array($result))
                    {
                        echo "['".$row["logbookfeedback"]."', ".$row["number"]."],";
                    }
                    ?>
                    

                ]);

                var options= {
                    title: ''
                };
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data,options);
            }
            </script>
        <style>
   input{
          width:50%;
          height: 50px;
          margin-top:30px;
          padding-left: 20px;
      }

      #right{

padding-left: 100px;
width: 20%;
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
        <li><a href="suprating.php" class="button" name="rate">Rate</a></li>
       <li><a href="supreport.php" class="button"  name="report">Report</a></li>
    </div>
    <div class="column right">
    


    <br><h3>Percentage of FYP1 and FYP 2 students </h3>
    <div id="piechart" style="width: 900px; height 500px;"></div>

   

  
</form>




</div>


<footer id="footer">     
                        <span> Copyright &copy; 2021 All Right Reserved</span>
            </footer>

    </body>

    
</html>
