<?php include_once '../include/dbconnect.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/layout.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../css/sidebar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <title>Administrator</title>
</head>
<body>
<div class="header">
    <div class ="inner_header">
        <div class="logo_container">
            <h1><img src="../umplogo.png" alt="imgheader">  Student FYP Management System </h1>
        </div>
        <nav>
        <li style="list-style-type:none;"><span ><a href="logout.php" style="color:#fff; " >Logout</a></span></li>
        </nav>
    </div>
</div>

<div class="row">
    <div class="column left">
        <ul>
            <li> <a href="./admin.php" class="button" name="home">Home</a></li>
            <li><a href="" class="button"  name="">Student Info</a></li>
            <li><a href="" class="button" name="">Profile</a></li>
            <li><a href="#" class="button" name="rate">Rate</a></li>
            <li><a href="#" class="button"  name="report">Report</a></li>
        </ul>
    </div>
    <div class="column right">
    <br><h3>Administrator</h3>
    <form>
        <table class="tb">
            <tr>
            <?php
                
            ?>
        </table>    
        <br><button type="back" id ="button" onClick="myFunction">Back</button>

<script>
     function myFuntion(){
         window.location.href="../studentinfo.php";
     }
</script>
</form>
</div>
<footer id="footer">
    <?php include '../include/footer.php';?>     

</footer>    
</body>
</html>