<?php
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1;
$active_group ='default';

define('DB_TYPE', 'mysql');
define('DB_HOST', $cleardb_server);
define('DB_NAME', $cleardb_db);
define('DB_USER', $cleardb_username);
define('DB_HOST', $cleardb_password);

$conn = mysqli_connect($cleardb_server,$cleardb_username,$cleardb_password,$cleardb_db);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
    echo "<script>console.log('".mysqli_connect_error."')</script>";
}else{
    echo "<script>console.log('Connected')</script>";
}
?>