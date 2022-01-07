<?php 
include_once '../include/dbconnect.php'; 
?>
<form action="" method="post">
    Add User <br>
    <input type="text" name="user_role" id="user_role">
    <input type="text" name="user_type" id="user_type">
    <input type="submit" value="Submit" onclick="addUser()">
</form>
<?php
function addUser(){
    $url = $_POST['user_role'];
    $utp = $_POST['user_type'];
    $query = "INSERT INTO userinfo ('user_role','user_type') VALUES ('".$url."','".$utp."')"; 
    if (mysqli_query($conn, $query)) {
        echo "New record created successfully";
        echo "<script>console.log('added successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}