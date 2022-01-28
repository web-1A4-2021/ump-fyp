<?php

$studentid = $_POST["studentid"];
$rating = $_POST["rating"];

$conn = mysqli_connect("localhost", "root", "", "heroku_ea38f35ca4afbb9");
 
mysqli_query($conn, "INSERT INTO rating (studentid, rating) VALUES ('$studentid', '$rating')");

// whatever you echo here, will be displayed in alert on user side
echo "Saved";

?>


