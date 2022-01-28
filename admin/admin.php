<?php 
//* Connect to database
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
    <link rel="shortcut icon" href="#">

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
        include './home.php';//* Display user list
    }
    else if(isset($_GET['new']))
    {
        include './new.php';//* Register new user
    }
    else if(isset($_GET['report']))
    {
        include './report.php';//* View report
    }
    else{
        echo "Choose from sidebar";
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
<style>
    form{
        text-align:center;
        height:80vh;
    }
    form *{
        margin:10px;
        padding: 5px 0px 5px 0px;
    }
    canvas{
        border: 2px solid #000000;
        margin: 5px;
        text-align:center;
    }
    .edit{
        color:#00AC9F;
        border: none;
        margin:0px;
        height:auto;
    }
    .delete{
        color:#DF0024;
        border: none;
        margin:0px;
        height:auto;
    }
</style>    
</body>
</html>