<?php
//* Connect to database
include_once "../include/config.php";
//* Total number of user
$userCount = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM userinfo"));
//* User type
$lecType = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM userinfo WHERE usertype='lec'"));
$lecTypeP = ($lecType/$userCount);//* Lec Percent
$stdType = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM userinfo WHERE usertype='std'"));
$stdTypeP = ($stdType/$userCount);//* Std Percent
$extType = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM userinfo WHERE usertype='ext'"));
$extTypeP = ($extType/$userCount);//* Ext Percent
//* User Role
$admRole = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM userinfo WHERE userrole='adm'"));
$admRoleP = ($admRole/$userCount);//* Adm Percent
$cooRole = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM userinfo WHERE userrole='coo'"));
$cooRoleP = ($cooRole/$userCount);//* Coo Percent
$supRole = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM userinfo WHERE userrole='sup'"));
$supRoleP = ($supRole/$userCount);//* Sup Percent
$evaRole = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM userinfo WHERE userrole='eva'"));
$evaRoleP = ($evaRole/$userCount);//* Eva Percent
$fyp1Role = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM userinfo WHERE userrole='fyp1'"));
$fyp1RoleP = ($fyp1Role/$userCount);//* Fyp1 Percent
$fyp2Role = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM userinfo WHERE userrole='fyp2'"));
$fyp2RoleP = ($fyp2Role/$userCount);//* Fyp2 Percent
$lecRole = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM userinfo WHERE userrole='lec'"));
$lecRoleP = ($lecRole/$userCount);//* Lec Percent
$stdRole = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM userinfo WHERE userrole='std'"));
$stdRoleP = ($stdRole/$userCount);//* Std Percent
//* Chart User Type
echo "<canvas id='typeChart'>User Type</canvas>";
echo "
    <script>
    var typeChart = document.getElementById('typeChart');
    typeChart.width=600;
    typeChart.height=200;
    var ctx = typeChart.getContext('2d');
    ctx.fillStyle = '#F3C300';
    ctx.fillRect(10, 10, $lecTypeP*400, 40);
    ctx.fillRect(400,10,20,15);//* Lec
    ctx.fillStyle = '#00AC9F';
    ctx.fillRect(10, 60, $stdTypeP*400, 40);
    ctx.fillRect(400,40,20,15);//* Std
    ctx.fillStyle = '#2E6DB4';
    ctx.fillRect(10, 110, $extTypeP*400, 40);
    ctx.fillRect(400,70,20,15);//* Ext
    //* Chart Text
    ctx.fillStyle = '#000000';
    ctx.font = '25px Arial';
    ctx.fillText('User Type',400,120);//* Title
    ctx.font = '20px Arial';
    ctx.fillText('Lecturer',430,20);
    ctx.fillText('Student',430,50);
    ctx.fillText('External User',430,80);
    </script>
    ";

//* Chart User Role 
echo "<canvas id='roleChart'>User Role</canvas>";
echo "
    <script>
    var roleChart = document.getElementById('roleChart');
    roleChart.width=600;
    roleChart.height=500;
    var ctx = roleChart.getContext('2d');
    ctx.fillStyle = '#242582';
    ctx.fillRect(10, 10, $admRoleP*400, 40);
    ctx.fillRect(400,10,20,15);//* adm 
    ctx.fillStyle = '#553D67';
    ctx.fillRect(10, 60, $cooRoleP*400, 40);
    ctx.fillRect(400,40,20,15);//* coo
    ctx.fillStyle = '#F64C72';
    ctx.fillRect(10, 110, $supRoleP*400, 40);
    ctx.fillRect(400,70,20,15);//* sup
    ctx.fillStyle = '#252740';
    ctx.fillRect(10, 160, $evaRoleP*400, 40);
    ctx.fillRect(400,100,20,15);//* eva
    ctx.fillStyle = '#464866';
    ctx.fillRect(10, 210, $fyp1RoleP*400, 40);
    ctx.fillRect(400,130,20,15);//* fyp1
    ctx.fillStyle = '#AAABB8';
    ctx.fillRect(10, 260, $fyp2RoleP*400, 40);
    ctx.fillRect(400,160,20,15);//* fyp2
    ctx.fillStyle = '#244454';
    ctx.fillRect(10, 310, $lecRoleP*400, 40);
    ctx.fillRect(400,190,20,15);//* lec
    ctx.fillStyle = '#DA7B93';
    ctx.fillRect(10, 360, $stdRoleP*400, 40);
    ctx.fillRect(400,220,20,15);//* std
    //* Chart Text
    ctx.fillStyle = '#000000';
    ctx.font = '25px Arial';
    ctx.fillText('User Role',400,300);//* Title
    ctx.font = '20px Arial';
    ctx.fillText('Admin',430,20);
    ctx.fillText('Coordinator',430,50);
    ctx.fillText('Supervisor',430,80);
    ctx.fillText('Evaluator',430,110);
    ctx.fillText('FYP1 Student',430,140);
    ctx.fillText('FYP2 Student',430,170);
    ctx.fillText('Lecturer',430,200);
    ctx.fillText('Student',430,230);



    </script>
    ";

//* test echo "<script>alert('$lecRoleP');</script>";