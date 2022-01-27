<?php

$studentid = $_POST["studentid"];
$rating = $_POST["rating"];

$conn = mysqli_connect("localhost", "root", "", "studFYP");
 
mysqli_query($conn, "INSERT INTO rating (studentid, rating) VALUES ('$studentid', '$rating')");

// whatever you echo here, will be displayed in alert on user side
echo "Saved";

?>


