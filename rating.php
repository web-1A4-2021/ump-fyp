<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-sacale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
        <link href="css/ratinglayout.css" type="text/css" rel="stylesheet" media="screen,projection">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="starrr.css">
       
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="starrr.js"></script>
        

     <title>Rate</title>
       <style>
          table, td {
            border: 1px solid black;
            border-color:  #e3f8f5;
          }

          table {
            border-collapse: collapse;
            width: 40%;
          }

          td {
            padding: 7.5px;
            width: 20%;
            text-align: center;
          }

          table.center {
            margin-left: auto; 
            margin-right: auto;
          }
       </style>
    </head>

    <body>
      
      <div class="header">
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

      
          <div class="alert alert-primary alert-dismissible">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Important!</strong> Please give rating to all students. Rate and submit only once for each student.
         </div>
     
      
   <div class= ratetitle>
      Shortlisted Top 10 Students 
   </div>

<?php
    // Connecting with database
       $conn = mysqli_connect("localhost", "root", "", "studFYP");
 
    // Getting all students
       $result = mysqli_query($conn, "SELECT * FROM studentlist");

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
    mysqli_query($conn, "UPDATE studentlist SET average_rating = '$average_rating' WHERE id = '" .$row->id. "' ");
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