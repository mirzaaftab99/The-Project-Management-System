<?php
session_start();
$un=$_SESSION['un'];
$pwd=$_SESSION['pwd'];

?>
<html>
    <head>
          <title>Guide Registration</title>
    <style>
    #nav{
	color:white;

	padding-left:60px;
	font-size:20px;
	margin:auto;
	background:LightGray;
	width:1200px;
    height:600px;
	border-radius:5px;
	opacity:.7;

}

    #nav input[type="submit"]{
	margin:10px;
	width:120px;
	border-radius:50px;
	height:40px;
	background:blue;
	color:white;
	font-weight:bold;
}

    </style>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>

    function load(dept) {

      var the_data;
      the_data='&dept='+dept;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("stud_data").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("POST", "gr.php",true);
      xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(the_data);
  }



</script>

</head>
    <body style="background-color:Gray;"><br><br><br><br>
    <form id="myForm" name="contact-form" method="post" action="guide_reg.php" autocomplete="off">


        <div id="nav"><br>

        <h2 style="color:black" align="left">Guide Registration</h2>


        <table border="0">
        <tr>
            <td style="font-size:20px;padding-bottom:10px">Guide Name:</td>
            <td><input type="text" name="gname" placeholder="Enter your Guide Name" required></td>
            </tr>
            <!--<tr>
            <td style="font-size:20px;padding-bottom:10px">Designation:</td>
                <td><select name="des">
                <option>HOD</option>
                <option>Lecturer</option>
                </select></td>
            </tr>-->

           <tr>
            <td style="font-size:20px;padding-bottom:10px">Username:</td>
            <td><input type="text" name="uname" placeholder="Enter username" required></td>
            </tr>

            <tr>
            <td style="font-size:20px;padding-bottom:10px">Password:</td>
            <td><input type="password" name="pswd" placeholder="Enter password" required></td>
            </tr>
            
           
            <tr>
            <td style="font-size:20px;padding-bottom:10px">Academic year:</td>
            <td><select name="academic_year">
                <?php
                include("config.php");
    $sel="select academic_year from project_login where username='$un'";
    $result=mysqli_query($con,$sel);
    if($result){
        while($row=mysqli_fetch_array($result))
        {
            $academic_year=$row["academic_year"];
            echo "<option>$academic_year</option>";
        }
    }

  ?>
          </select></td>
            </tr>

            <tr>
            <td style="font-size:20px;padding-bottom:10px">Shift:</td>
            <td><select name="shift">
                <?php
    $sel="select shift from project_login where username='$un'";
    $result=mysqli_query($con,$sel);
    if($result){
        while($row=mysqli_fetch_array($result))
        {
            $shift=$row["shift"];
            echo "<option>$shift</option>";
        }
    }

  ?>
          </select></td>
            </tr>
<tr>
            <td style="font-size:20px;padding-bottom:10px">Department:</td>
                <td><select name="dept" onchange="load(this.value)">
<option>--select department--</option>
                    <?php
    $sel="select dept from project_login where username='$un'";
    $result=mysqli_query($con,$sel);
    if($result){
        while($row=mysqli_fetch_array($result))
        {
            $dept=$row["dept"];
            echo "<option>$dept</option>";
        }
    }

  ?>
                </select></td>
            </tr>

        </table>
        <div id="stud_data">

            </div>
        <input type="submit" name="submit" class="submit_btn" id="submit_btn" value="Submit">

            </div>
        </form>
    </body>
</html>
<?php


if(isset($_POST["submit"]))
{


$gname=$_POST['gname'];
$_SESSION['gname']=$gname;

//$des=$_POST['des'];

$username=$_POST['uname'];

$password=$_POST['pswd'];
    
$dept=$_POST['dept'];


$academic_year=$_POST['academic_year'];

$shift=$_POST['shift'];

$checkbox1=$_POST['dom'];

$chk="";
$i=1;
foreach($checkbox1 as $chk1)
   {
      $chk .= "$i".")".$chk1."  ";
      $i++;
   }


   $sql_maxid="select count(guide_id) 'cnt',max(guide_id) 'maxid' from guide_reg";
    $res=mysqli_query($con,$sql_maxid);
    $row=mysqli_fetch_assoc($res);
    $cnt=$row['cnt'];

    if ($cnt==0)
    {
        $gid="G1";
    }
    else
    {
    $maxid=$row['maxid'];
    $gid="G".($maxid+1);
    }


$query=mysqli_query($con,"insert into guide_reg values ('','$gid','$gname','$chk','$username','$password','$dept','$academic_year','$shift')");


if($query==1)  {

    $role="Guide";

    $role_id=3;
    $que=mysqli_query($con,"insert into project_login values ('$username','$password','$role','$role_id','$dept','$academic_year','$shift')");
    echo'<script>alert("Guide is registered successfully.")</script>';

   }

else
   {
      echo'<script>alert("Failed to register guide.")</script>';
   }


}
?>
