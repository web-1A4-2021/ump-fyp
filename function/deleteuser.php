<link rel="shortcut icon" href="#">
<?php
//* Connect to database
include_once "../include/config.php";
$userid = $_POST['userid'];
$delete = "DELETE FROM userinfo WHERE userid='$userid'";
if(mysqli_query($conn,$delete))
{
    echo "<script>console.log('user delete success');</script>";
    header("location:../admin/admin.php?home=true");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
