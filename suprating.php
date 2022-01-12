<?php
session_start();
$_SESSION['st_id'] ='st_id';

if (isset($_GET["logID"])) 
{
  $idlog = $_GET["logID"];
  
} else
{
 header("Location: studentinfo.php");
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

        <title>Supervisor Profile</title>
        <style>
       #feedback{
          width:50%;
          height: 50px;
         
          padding-left: 20px;
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
       <li> <a href="#" class="button" name="home">Home</a></li>
        <li><a href="studentinfo.php" class="button"  name="studinfo">Student Info</a></li>
       <li><a href="supprofile.php" class="button" name="profile">Profile</a></li>
        <li><a href="suprating.php" class="button" name="rate">Rate</a></li>
       <li><a href="#" class="button"  name="report">Report</a></li>
    </div>
    <div class="column right">
        
   <div class= ratetitle>
      Shortlisted Top 10 Students 
   </div>

<?php
    // Connecting with database
       $conn = mysqli_connect("localhost", "root", "", "test");
 
    // Getting all students
       $result = mysqli_query($conn, "SELECT * FROM student");

    // Displaying each student
       while ($row = mysqli_fetch_object($result)) {
  
    // Getting rating of current student using ID
       $result_rating = mysqli_query($conn, "SELECT * FROM rating WHERE studentid = '" . $row->id . "'");
    
    // Adding total rating from each user
       $rating = 0;
       while ($row_rating = mysqli_fetch_object($result_rating))
       {
           $rating += $row_rating->rating;
       }
 
    // Calculating average from all rating
       $average_rating = 0;
       if ($rating > 0)
       {
           $average_rating = $rating / mysqli_num_rows($result_rating);
       }

?>




<div class=ratetable>

   <table class="center">
  
     <tr>
       <form method="POST" onsubmit="return saverating(this);">
        <td>
           <input type="hidden" name="studentid" value="<?php echo $row->id; ?>">

           <?php 
           echo $row->name;  
           ?>
        </td>
        <td>
           <div class="starrr"></div>
        </td>
        <td>
           <input type="submit">
        </td>
      
       </form>
     </tr>

   </table>
  
 <?php
    mysqli_query($conn, "UPDATE student SET average_rating = '$average_rating' WHERE id = '" .$row->id. "' ");
 ?>

</div>


    <?php
    }
    ?>


<script>

var rating = 0;
   $(function () {
       $(".starrr").starrr().on("starrr:change", function (event, value) {
           rating = value;
        });
    });


function saverating(form) {
    var studentid = form.studentid.value;
  
      $.ajax({
          url: "saverating.php",
          method: "POST",
          data: {
              "studentid": studentid,
              "rating": rating
            
          },
          success: function (response) {
              // whatever server echo, that will be displayed here in alert
              alert(response);
          }
        });
 
    return false;
        
}

</script>


<div class= "ratebutton">
    <button class="avgbutton" onclick="document.location='chart.php'">Average Rating ▷</button>
    <button class="backbutton" onclick="history.back()">◁ Back</button>
</div>



 


<footer id="footer">     
                        <span> Copyright &copy; 2021 All Right Reserved</span>
            </footer>

    </body>

    
</html>