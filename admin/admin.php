<?php 
include_once '../include/config.php';
?>

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
            <li> <a href="./admin.php?home=true" class="button" name="home">Home</a></li>
            <li> <a href="./admin.php?new=true" class="button"  name="">New User</a></li>
            <li> <a href="./admin.php?report=true" class="button"  name="">Report</a></li>
        </ul>
    </div>
    <div class="column right">
    <br><h3>Administrator</h3>
    <?php
    if(isset($_GET['home']))
    {
    include './home.php';
    }
    else if(isset($_GET['new']))
    {
        include './new.php';
    }
    else if(isset($_GET['report']))
    {
        include './report.php';
    }
    ?>
    <form>
        <table class="tb">
            <tr>
            <?php
            ?>
        </table>
        <br><button type="back" id ="button" onClick="window.location.href='./admin.php';">Back</button>
    </form>
</div>
<footer id="footer">
    <?php include '../include/footer.php';?>     
</footer>    
</body>
</html>