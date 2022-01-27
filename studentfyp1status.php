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
        <link rel="stylesheet" href="css/alert.css">
        <script>  src="https://code.jquery.com/jquery-3.6.0.js"</script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <title>Student Profile</title>
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
    <li> <a href="studenthome2.php" class="button" name="home">Home</a></li>
        <li><a href="logbookfyp1page2.php" class="button"  name="studinfo">Logbook</a></li>
       <li><a href="studentsvinfo.php" class="button" name="profile">Supervisor Info</a></li>
        <li><a href="studentfyp1status.php" class="button" name="status">Status</a></li>
       <li><a href="studentfyp1profile.php" class="button"  name="profile">Profile</a></li>
       <li><a href="#" class="button"  name="report">Rate</a></li>
    </div>
    <div class="column right">
    


    <br><h3>Result</h3>
    <form action="" name="studentfyp1" method="post" enctype = "multipart/form-data">

        <table class="tb">

            
            <tr>
               <?php 
              
                
                  
                   $sql = "SELECT totalsup from evaluation where studid='".$_SESSION['User']."'";
                   $result = $conn -> query($sql);

            if($result->num_rows > 0)
                {
                    while($row = $result -> fetch_assoc() )
                    {
                       
                      if ($row["totalsup"]>=40){
                       if($row["totalsup"]>=40 && $row["totalsup"]<=49){
                         
                        echo '<br><tr><td id="right" > Total Mark FYP1 : </td>' ;
                        echo '<td ><input type ="text" class="form-cotrol" readonly="readonly" name="totalsup" value="'.$row["totalsup"].'" </td></tr>';
                        echo '<br><tr><td id="right" > Gred : </td>' ;
                        echo '<td ><input type ="text" class="form-cotrol" readonly="readonly" name="totalsup" value="PASS" </td></tr>';
                         

                       }

                       else if($row["totalsup"]>=50 && $row["totalsup"]<=59){
                         
                        echo '<br><tr><td id="right" > Total Mark FYP1 : </td>' ;
                        echo '<td ><input type ="text" class="form-cotrol" readonly="readonly" name="totalsup" value="'.$row["totalsup"].'" </td></tr>';
                        echo '<br><tr><td id="right" > Gred : </td>' ;
                        echo '<td ><input type ="text" class="form-cotrol" readonly="readonly" name="totalsup" value="C" </td></tr>';
                         

                       }

                       else if($row["totalsup"]>=60 && $row["totalsup"]<=69){
                         
                        echo '<br><tr><td id="right" > Total Mark FYP1 : </td>' ;
                        echo '<td ><input type ="text" class="form-cotrol" readonly="readonly" name="totalsup" value="'.$row["totalsup"].'" </td></tr>';
                        echo '<br><tr><td id="right" > Gred : </td>' ;
                        echo '<td ><input type ="text" class="form-cotrol" readonly="readonly" name="totalsup" value="B" </td></tr>';
                         

                       }

                       else if($row["totalsup"]>=70 && $row["totalsup"]<=79){
                         
                        echo '<br><tr><td id="right" > Total Mark FYP1 : </td>' ;
                        echo '<td ><input type ="text" class="form-cotrol" readonly="readonly" name="totalsup" value="'.$row["totalsup"].'" </td></tr>';
                        echo '<br><tr><td id="right" > Gred : </td>' ;
                        echo '<td ><input type ="text" class="form-cotrol" readonly="readonly" name="totalsup" value="A-" </td></tr>';
                         

                       }

                       else if($row["totalsup"]>=80 && $row["totalsup"]<=89){
                         
                        echo '<br><tr><td id="right" > Total Mark FYP1 : </td>' ;
                        echo '<td ><input type ="text" class="form-cotrol" readonly="readonly" name="totalsup" value="'.$row["totalsup"].'" </td></tr>';
                        echo '<br><tr><td id="right" > Gred : </td>' ;
                        echo '<td ><input type ="text" class="form-cotrol" readonly="readonly" name="totalsup" value="A" </td></tr>';
                         

                       }

                       else{
                        echo '<br><tr><td id="right" > Total Mark FYP1 : </td>' ;
                        echo '<td ><input type ="text" class="form-cotrol" readonly="readonly" name="totalsup" value="'.$row["totalsup"].'" </td></tr>';
                        echo '<br><tr><td id="right" > Gred : </td>' ;
                        echo '<td ><input type ="text" class="form-cotrol" readonly="readonly" name="totalsup" value="A+" </td></tr>';
                         

                       }
                       
                       ?>
                        
                        <br><tr><td><button type="submit" name="enrol2" onClick="myFunction()">Enrol FYP2</button></td></tr>
                       
                       <?php
                    }


                       else{

                        echo "Repeat";
                       }
                    }
                }
                 
             
             else{
                 echo "No Result";
             }
             
             $conn->close();
            

             
             ?>


 </table>

<?php
$conn = mysqli_connect("localhost", "root", "", "studfyp");
if (!$conn) {
   die('Could not connect: ' . mysqli_connect_error());
}

if(isset($_POST["enrol2"]))

{
    
    mysqli_query($conn,"insert into studentfyp2 (fypid,matricid,studentname,studentemail,pcode,phone,semester) select fypid,matricid,studentname,studentemail,pcode,phone,semester from studentfyp1 where matricid='".$_SESSION['User']."'");

    header('location:studenthomefyp2.php');
    
    
}
?>
<script>
function myFunction() {
  alert("Your Enrol FYP 2 Successfully");
}
</script>




</form>




</div>


<footer id="footer">     
                        <span> Copyright &copy; 2021 All Right Reserved</span>
            </footer>

    </body>

    
</html>
