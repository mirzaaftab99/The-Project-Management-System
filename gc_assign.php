<?php
session_start();
$un=$_SESSION['un'];
$pwd=$_SESSION['pwd'];

   include("config.php");
?>
<html>
<head>

      <title>Group Code Assign</title>


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
    xmlhttp.open("POST", "gca.php",true);
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
        <h3 style="color: black">Group Code Assign</h3>
        <form id="form" name="form" method="post" action="gc_assign.php" autocomplete="off">

        <label style="background-color: LightGray; color: black;">Group Leader Enrollment No:</label>

        <select name="eno" onchange="load(this.value)">
            <option>--Select Enrollment No--</option>
            <?php
            
            $query="select * from project_group where enrollment_no=group_leader and dept='$department' and shift='$shift'";
            $result=mysqli_query($con,$query);   
            
             while($row=mysqli_fetch_array($result))
                {
                    $enroll=$row["enrollment_no"];
                    echo "<option>$enroll<br></option>";

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
if(isset($_POST['submit']))
   {
    


$eno=$_POST["eno"];
$gcode=$_POST['gcode'];
   
    
$sql="SELECT name FROM `project_group` WHERE group_leader='$eno'";
$res=mysqli_query($con,$sql);
$cnt=mysqli_num_rows($res);

$sql1="SELECT enrollment_no FROM `project_group` WHERE group_leader='$eno'";
$res1=mysqli_query($con,$sql1);
//$cnt1=mysqli_num_rows($res1);
    

for($j=0;$j<$cnt;$j++){
    $row=array(
    $row=mysqli_fetch_assoc($res)
    );
    
    $row1=array(
    $row1=mysqli_fetch_assoc($res1)
    );
    
    
    
    $insert_data=implode($row[0]);
    
    
    $insert_data1=implode($row1[0]);
    //$row=implode($row[0]);
    
    //echo $insert_data1;
    
    $query=("insert into project_group_code_assign (gl_enrollment_no,group_members,enrollment_no,group_code,dept,academic_year,shift) VALUES ('$eno','$insert_data','$insert_data1','$gcode','$department','$academic_year','$shift')");
    
    $database=new DatabaseManager();
    $query=$database->fireSafeQuery($query,NULL);
    
    
    
    
}

    echo '<script type="text/javascript"> alert("Group Code is submitted successfully.") </script>';

    }


?>

