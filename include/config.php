<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = mysqli_connect("localhost", "root", "", "studFYP");

$dbservername = "sdb-o.hosting.stackcp.net";
$dbusername = "developer-9be9";
$dbpassword = "N0m0repassw0rd";
$dbname = "jelimy-3139374d2f";
//$conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
    echo "<script>console.log('".mysqli_connect_error."')</script>";
}else{
    echo "<script>console.log('Connected')</script>";
}