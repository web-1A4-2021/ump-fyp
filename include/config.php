<?php
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group ='default';

define('DB_TYPE', 'mysql');
define('DB_HOST', $cleardb_server);
define('DB_NAME', $cleardb_db);
define('DB_USER', $cleardb_username);
define('DB_PASS', $cleardb_password);

//! This is darwish deployment settings
function config()
{
    $dbservername = "sdb-o.hosting.stackcp.net";
    $dbusername = "developer-9be9";
    $dbpassword = "N0m0repassw0rd";
    $dbname = "jelimy-3139374d2f";
}
function config_dev()
{
    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "studfyp";
}
//config();//! deployment database
//config_dev();//! development database

$conn = mysqli_connect($cleardb_server,$cleardb_username,$cleardb_password,$cleardb_db);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
    echo "<script>console.log('".mysqli_connect_error."')</script>";
}else{
    echo "<script>console.log('Connected')</script>";
}


?>