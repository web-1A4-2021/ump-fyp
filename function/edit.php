<link rel="shortcut icon" href="#">
<?php
//* Connect to database
include_once "../include/config.php";
$userid = $_POST['userid'];
$matricid = $_POST['matricid'];
$userrole = $_POST['userrole'];
$usertype = $_POST['usertype'];

$edit = "UPDATE userinfo 
        SET matricid='$matricid',
            userrole='$userrole',
            usertype='$usertype'
        WHERE userid='$userid' ";
if(mysqli_query($conn,$edit))
{
    echo "<script>console.log('user trace success');</script>";
    header("location:../admin/admin.php?home=true");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}