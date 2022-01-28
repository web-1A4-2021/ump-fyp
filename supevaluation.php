<?php
session_start();
include_once './include/config.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-sacale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
        <link href="css/layout.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="css/sidebar.css" type="text/css" rel="stylesheet" media="screen,projection">

        <title>Evaluation</title>
        <style>
        table.tb1 td{
        
        padding-top: 10px;
        padding-bottom: 10px;
        }

        table{
           margin-left:100px;
            text-align: center;
            width: 80%;

        }
        h4{
        margin-left:100px;
         font-family: 'Montserrat';
        }
        .left ul li .button{
      height:20%;
  }

 .leftt{
      text-align: left;
  }

        </style>
    </head>
    <body>
    <div class="header">
        <div class ="inner_header">
            <div class="logo_container">
            <h1><img src="umplogo.png" alt="imgheader">  Student FYP Management System </h1>
            </div>
        <nav>
          <li style="list-style-type:none;"><span ><a href="logout.php" style="color:#fff; " >Logout</a></span></li>
</nav>

        </div>
</div>

<div class="row">
    <div class="column left">
    <ul>
       <li> <a href="suphome.php" class="button" name="home">Home</a></li>
        <li><a href="studentinfo.php" class="button"  name="studinfo">Student Info</a></li>
     <li><a href="supprofile.php" class="button" name="profile">Profile</a></li>
       <li><a href="supevaluation.php" class="button" name="evaluation">Evaluation</a></li>
        <li><a href="rating.php" class="button" name="rate">Rate</a></li>
       <li><a href="supreport.php" class="button"  name="report">Report</a></li>

    </div>
    <div class="column right">

    <br><h3>Supervisor Evaluation</h3><br><br>
    


<form id="myform" method="POST">  
 

 <table>
     <tr>
         <td class="leftt">Matric ID :</td>
         <td ><select name="stud_id" ><option> Choose Student ID...</option>
         <?php
         $sql = "SELECT student.studentid, student.matricid,studentsupervisor.Fypstd_ID,studentsupervisor.Sup_ID FROM student,studentsupervisor WHERE student.studentid = studentsupervisor.Fypstd_ID AND  studentsupervisor.Sup_ID='".$_SESSION['matricid']."'";
         $result = $conn -> query($sql);
         if($result->num_rows > 0){
            while($row = $result -> fetch_assoc() )
                 {
                     $studid = $row["matricid"];
                     echo"<option>$studid<br></option>";
                   
              }

          }
          else{
              echo "No Result";
          }
          ?>
          </select></td>

        
         <td></td>
         <td></td>
</tr>
<tr>
         <td> </td>

</tr>
 <tr>
        <th colspan="2">Evaluation 1</th>
        <th colspan="2">Evaluation 2</th>
    </tr>



                        <tr>
                            <td class="leftt" >Mark &nbsp:</td>
                            <td >&nbsp&nbsp&nbsp&nbsp&nbsp<input type ="text" class="form-cotrol" placeholder="Enter Mark" id ="mark1" name="mark1"> /100</td>
                            <td class="leftt" >Mark :</td>
                            <td >&nbsp&nbsp&nbsp&nbsp&nbsp<input type ="text" class="form-cotrol" placeholder="Enter Mark" id ="mark2" name="mark2"> /100 </td>
                        </tr>
                        <tr>
                            <td class="leftt">Total Evaluation 1 :</td>
                            <td ><input type ="text" class="form-cotrol" id="Tmark1" name="Tmark1"  readonly> %</td>
                            <td class="leftt">Total Evaluation 2 :</td>
                            <td ><input type ="text" class="form-cotrol" id="Tmark2" name="Tmark2"  readonly> %</td>
                        </tr>
                        <tr>
                            <td colspan="2"><button type="button" onclick="Calculate1()">Calculate</button></td>
                            <td colspan="2"><button type="button" onclick="Calculate2()">Calculate</button></td>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="leftt">Total Marks :</td>
                            <td><input type ="text" class="form-cotrol" id ="Tmark" name="Tmark" value="" readonly> %</td>
                        </tr>

                 
    </table>

 

 <br><br>
 <button type="submit" name="submit" onclick="succeed()" >Submit</button> 

 </form>

 <script>
    

     function Calculate1()
     {
        var m1 = document.getElementById('mark1').value;
            var m2 = document.getElementById('mark2').value;
            var tmark1 = ((m1 * 30)/100);
            var tmark2 = ((m2 * 30)/100);
            var total1 = tmark1 + tmark2;

            var t1 = document.getElementById("Tmark1");
            var t2 = document.getElementById("Tmark2");
            var tm = document.getElementById("Tmark");

            t1.value=tmark1;
            t2.value=tmark2;
            tm.value=total1;

     }
     function Calculate2()
     {
            var m1 = document.getElementById('mark1').value;
            var m2 = document.getElementById('mark2').value;
            var tmark1 = ((m1 * 30)/100);
            var tmark2 = ((m2 * 30)/100);
            var total1 = tmark1 + tmark2;

            var t1 = document.getElementById("Tmark1");
            var t2 = document.getElementById("Tmark2");
            var tm = document.getElementById("Tmark");

            t1.value=tmark1;
            t2.value=tmark2;
            tm.value=total1;


     }
     function succeed() {
  alert("Data Saved!");
}
     

</script>


<?php
 if(isset($_POST["submit"]))
{
   
    $stud_id=$_POST['stud_id'];
    $Tmark1=$_POST['Tmark1'] ;
   $Tmark2 = $_POST['Tmark2'];
   $Tmark= $_POST['Tmark'];

    $query ="INSERT INTO `evaluation` ( `studID`,`sup_eva1`, `sup_eva2`, `evaluator` ,`Totalsup`) VALUES ('$stud_id', '$Tmark1', '$Tmark2', '', '$Tmark')";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        echo ' <script type="text.javascript"> alert("Data saved") </script>';
    }else
    {
        echo ' <script type="text.javascript"> alert("Data not saved") </script>';
    }

}
else{

    echo ' <script type="text.javascript"> alert("Data not saved") </script>';
}

 ?>


</div>


<footer id="footer">     
                        <span> Copyright &copy; 2021 All Right Reserved</span>
            </footer>

    </body>

    
</html>

