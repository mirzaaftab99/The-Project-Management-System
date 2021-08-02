<html>
    <head>
          <title>Project Coordinator Registration</title>
    <style>
    #nav{
	color:white;

	padding-left:60px;
	font-size:20px;
	margin:auto;
	background:LightGray;
	width:1200px;
    height:500px;
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


    #nav input[type="button"]{
	margin-left:1000px;
	width:120px;
	border-radius:50px;
	height:40px;
	background:blue;
	color:white;
	font-weight:bold;
}

    </style>

</head>
    <body style="background-color:Gray;"><br><br><br><br>
    <form id="myForm" name="contact-form" method="post" action="pco_reg.php" autocomplete="off">


        <div id="nav"><br>

                <input type="button" onClick="location.href='login.php'" value="Go to login page">

        <h2 style="color:black" align="center"><top>Project Coordinator Registration</top></h2>
     <table border="0">
         <tr>
            <td style="font-size:20px;padding-bottom:10px">Username:</td>
            <td><input type="text" name="uname" placeholder="Enter username" required></td>
            </tr>

            <tr>
            <td style="font-size:20px;padding-bottom:10px">Password:</td>
            <td><input type="password" name="pswd" placeholder="Enter password" required></td>
            </tr>
               <tr>
            <td style="font-size:20px;padding-bottom:10px">Designation:</td>
                <td><select name="des">
                <option value="Project Coordinator">Project Coordinator</option>
                </select></td>
            </tr>
             <tr>
            <td style="font-size:20px;padding-bottom:10px">Department:</td>
            <td><select name="dept">
           <option>--select department--</option>
                <option value="Computer Engineering">Computer Engineering</option>
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Electronic and Telecommunication Engineering">Electronic and Telecommunication Engineering</option>
        
            </select></td></tr>
            <tr>
            <td style="color:black; font-size:20px;padding-bottom:10px">Academic Year:</td>
            <td><select name="academic_year">
                <option>--select year--</option>
                   <option value="2017-2018">2017-2018</option>
                    <option value="2018-2019">2018-2019</option>
                     <option value="2019-2020">2019-2020</option>
               </select><br>
           </td>
            </tr>

            <tr>
                <td style="color:black; font-size:20px;padding-bottom:10px">Shift:</td>
                <td><select name="shift">
<option>--select shift--</option>
                   <option value="1st Shift">1st Shift</option>
                    <option value="2nd Shift">2nd Shift</option>
                </select>
            </td>
            </tr>
            
        </table>
        <input type="submit" name="submit" class="submit_btn" id="submit_btn" value="Submit">

            </div>
        </form>
    </body>
</html>


<?php


if(isset($_POST["submit"]))
{

include("config.php");


$username=$_POST['uname'];

$password=$_POST['pswd'];

$role=$_POST['des'];

$role_id=2;
    
$dept=$_POST['dept'];

$academic=$_POST['academic_year'];

$shift=$_POST['shift'];

$query=mysqli_query($con,"insert into project_login values ('$username','$password','$role','$role_id','$dept','$academic','$shift')");


if($query==1)  {

    echo'<script>alert("Project Coordinator Registration Successfully")</script>';

   }

else
   {
      echo'<script>alert("Failed To Register.")</script>';
   }


}

?>


