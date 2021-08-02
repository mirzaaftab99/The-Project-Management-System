<?php
session_start();
$un=$_SESSION['un'];
$pwd=$_SESSION['pwd'];

include("config.php");
?>
<html>
<head>

      <title>Guide Allotment</title>


      <style>
    Body{
	padding-top:50px;

}
#nav{
	color:white;
	padding-left:60px;
	font-size:25px;
	margin:auto;
	background:LightGray;
	width:1000px;
	border-radius:5px;
	opacity:.7;
}
#nav input[type="submit"]{
	margin:10px;
	width:150px;
	border-radius:50px;
	margin-left:100px; 
	height:50px;
	background:blue;
	color:white;
	font-weight:bold;
}
#nav input[type="submit"]:hover{

	background:LightBlue;
	color:blue;

}
    </style>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>

    function load(eno) {

      var the_data;
      the_data='&eno='+eno;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("stud_data").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("POST", "ga.php",true);
      xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(the_data);
  }


</script>

</head>
    <body style="background-color:Gray; ">
        <?php

$sel="select dept from project_login where username='$un'";
    $result=mysqli_query($con,$sel);
    if($result){
        while($row=mysqli_fetch_array($result))
        {
            $department=$row["dept"];
        }
    } 
?>


<?php
   
    $sel="select academic_year from project_login where username='$un'";
    $result=mysqli_query($con,$sel);
    if($result){
        while($row=mysqli_fetch_array($result))
        {
            $academic_year=$row["academic_year"];
        
        }
    }
  
    ?>


<?php
   
    $sel="select shift from project_login where username='$un'";
    $result=mysqli_query($con,$sel);
    if($result){
        while($row=mysqli_fetch_array($result))
        {
            $shift=$row["shift"];
        
        }
    }
  
    ?>

        <div id="nav"><br>
        <h3 style="color: black">Guide Allotment</h3>
        <form id="form" name="form" method="post" action="guide_allot.php" autocomplete="off">

        <label style="background-color: LightGray; color: black;">Group Leader Enrollment No:</label>

        <select name="eno" onchange="load(this.value)">
            <option>--Select Enrollment No--</option>
            <?php
            $query="select enrollment_no from project_group where enrollment_no=group_leader and dept='$department' and shift='$shift'";
            $result=mysqli_query($con,$query);
            if($result){
                while($row=mysqli_fetch_array($result))
                {
                    $enroll=$row["enrollment_no"];
                    echo "<option>$enroll<br></option>";
                }
            }

            ?>
</select><br><br>
<div id="stud_data">

            </div>
            
            <div id="stud_data1">

            </div>
            

        </form>

        </div>

    </body>
</html>

<?php


if(isset($_POST["submit"]))
{

$gc=$_POST['gc'];

$gname=$_POST['gname'];


$sel="select guide_Code from guide_reg where guide_name='$gname'";

$res=mysqli_query($con,$sel);
$row=mysqli_fetch_assoc($res);
$row=implode($row);    
$query=mysqli_query($con,"insert into guide_allot values ('$gc','$row','$gname','$department','$academic_year','$shift')");  
    

if($query==1)  {  
    echo'<script>alert("Guide alloted successfully.")</script>';  
    
   } 
    
else  
   {  
      echo'<script>alert("Failed to allot guide.")</script>';  
   }   

}
?>

