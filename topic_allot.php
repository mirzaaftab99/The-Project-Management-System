<?php  
include("config.php");
?>
<html>
<head>

      <title>Topic Allotment</title>


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
	margin-left:80px;
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

    function load(gc) {

      var the_data;
      the_data='&gc='+gc;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("stud_data").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("POST", "ta.php",true);
      xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(the_data);
  }

</script>

</head>
    <body style="background-color:Gray; ">

        <div id="nav"><br>
        <h3 style="color: black">Topic Allotment</h3>
        <form id="form" name="form" method="post" action="topic_allot.php" autocomplete="off">

        <label style="background-color: LightGray; color: black;">Group Code:</label>
<!--  $query="select group_code from guide_allot where guide_code= (select guide_code from guide_reg where username='$un')";

--><?php  
            session_start();
            $un=$_SESSION['un'];
            ?>

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




       <select name="gc" onchange="load(this.value)">
            <option>--Select Group Code--</option>
            <?php
           $query="select group_code from guide_allot where guide_code= (select guide_code from guide_reg where username='$un')";

            $result=mysqli_query($con,$query);
            if($result){
                while($row=mysqli_fetch_array($result))
                {
                    $gc=$row["group_code"];
                    echo "<option>$gc<br></option>";
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
$topic1=$_POST['topic'];
    
$sel="select group_members from `project_group_code_assign` WHERE group_code='$gc' and enrollment_no=gl_enrollment_no";
$res=mysqli_query($con,$sel);
$row=mysqli_fetch_assoc($res);
$row=implode($row);   
    
    
$sel1="select guide_code from guide_allot where group_code='$gc'";
$res1=mysqli_query($con,$sel1);
$row1=mysqli_fetch_assoc($res1);
$row1=implode($row1);   
    
$sel2="select guide_name from guide_allot where group_code='$gc'";
$res2=mysqli_query($con,$sel2);
$row2=mysqli_fetch_assoc($res2);
$row2=implode($row2);   
    
    
$query=mysqli_query($con,"insert into topic_allot values ('$gc','$row','$row1','$row2','$topic1','$department','$academic_year','$shift')");  
    
if($query==1)  {  
    echo'<script>alert("Topic alloted Successfully.")</script>';  
    
   } 
    
else  
   {  
      echo'<script>alert("Failed to allot topic.")</script>';  
   }   
}

?>