<html>
    <head>
          <title>Student Project Group Formation</title>
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
    <form id="myForm" name="contact-form" method="post" action="student_group.php" autocomplete="off">


        <div id="nav"><br>

                <input type="button" onClick="location.href='login.php'" value="Go to login page">

        <h1 style="color:black" align="center"><top>Student Project Group Formation</top></h1>
         <label style="color:black; padding-left:400px">Department:</label>
            <select name="dept">
                <option>--select department--</option>
                <option value="Computer Engineering">Computer Engineering</option>
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Electronics and Telecommunication Engineering">Electronics and Telecommunication Engineering</option>
            </select><br>
               
<label style="color:black; padding-left:400px;">Academic Year:</label>
               <select name="academic_year">
                <option>--select year--</option>
                   <option value="2017-2018">2017-2018</option>
                    <option value="2018-2019">2018-2019</option>
                     <option value="2019-2020">2019-2020</option>
               </select><br>

               <label style="color:black; padding-left:400px">Shift:</label>
               <select name="shift">
                <option>--select shift--</option>
                   <option value="1st Shift">1st Shift</option>
                    <option value="2nd Shift">2nd Shift</option>
               
               </select>
              <br><br>
            
        <label style="background-color: LightGray; color: black; padding-left:300px">Enrollment No</label>
        <label style="background-color: LightGray; color: black; padding-left:50px">Name</label>
        <label style="background-color: LightGray; color: black; padding-left:90px">Phone No</label>
        <label style="background-color: LightGray; color: black; padding-left:80px">Email</label>
        <label style="background-color: LightGray; color: black; padding-left:100px">City</label>
        <label style="background-color: LightGray; color: black; padding-left:90px">ATKT</label><br>

            <center>
        <table border="0">
        <tr>
            <td style="font-size:20px;padding-bottom:10px">Student1(Group Leader):</td>
            <td>
            <input type="text" name="eno1" placeholder="Enter your Enrollment no." required>
            <input type="text" name="name1" placeholder="Enter your Name" required>
            <input type="text" name="p_no1" placeholder="Enter Your Phone No." required>
            <input type="text" name="email1" placeholder="Enter your Email" required>
            <input type="text" name="city1" placeholder="Enter your city" required>
            <td><input type="radio" name="atkt1" value="yes" required> Yes
            <input type="radio" name="atkt1" value="no" required> No<br></td><br>
       </tr>


        <tr>

            <td style="font-size:20px;padding-bottom:10px">Student2:</td>
            <td>
            <input type="text" name="eno2" placeholder="Enter your Enrollment no." required>
            <input type="text" name="name2" placeholder="Enter your Name" required>
            <input type="text" name="p_no2" placeholder="Enter Your Phone No." required>
            <input type="text" name="email2" placeholder="Enter your Email" required>
            <input type="text" name="city2" placeholder="Enter your city" required>
            <td><input type="radio" name="atkt2" value="yes" required> Yes

            <input type="radio" name="atkt2" value="no" required> No<br></td>
       </tr>


        <tr>

            <td style="font-size:20px;padding-bottom:10px">Student3:</td>
            <td>
            <input type="text" name="eno3" placeholder="Enter your Enrollment no." required>
            <input type="text" name="name3" placeholder="Enter your Name" required>
            <input type="text" name="p_no3" placeholder="Enter Your Phone No." required>
            <input type="text" name="email3" placeholder="Enter your Email" required>
            <input type="text" name="city3" placeholder="Enter your city" required>
            <td><input type="radio" name="atkt3" value="yes" required> Yes
            <input type="radio" name="atkt3" value="no" required> No<br></td>
       </tr>


        <tr>

            <td style="font-size:20px;padding-bottom:10px">Student4:</td>
            <td>
            <input type="text" name="eno4" placeholder="Enter your Enrollment no." required>
            <input type="text" name="name4" placeholder="Enter your Name" required>
            <input type="text" name="p_no4" placeholder="Enter Your Phone No." required>
            <input type="text" name="email4" placeholder="Enter your Email" required>
            <input type="text" name="city4" placeholder="Enter your city" required>
            <td><input type="radio" name="atkt4" value="yes" required> Yes
            <input type="radio" name="atkt4" value="no" required> No<br></td>
       </tr>

        </table>
        <input type="submit" name="submit" class="submit_btn" id="submit_btn" value="Submit">

            </center>
            </div>
        </form>
    </body>
</html>


<?php

if(isset($_POST['submit']))
{
  
include("config.php");


    $eno1=$_POST['eno1'];

    $name1=$_POST['name1'];
    
    $p_no1=$_POST['p_no1'];
    $email1=$_POST['email1'];
    $city1=$_POST['city1'];
    $atkt1=$_POST['atkt1'];



    $eno2=$_POST['eno2'];
    $name2=$_POST['name2'];
    $p_no2=$_POST['p_no2'];
    $email2=$_POST['email2'];
    $city2=$_POST['city2'];
    $atkt2=$_POST['atkt2'];



    $eno3=$_POST['eno3'];
    $name3=$_POST['name3'];
    $p_no3=$_POST['p_no3'];
    $email3=$_POST['email3'];
    $city3=$_POST['city3'];
    $atkt3=$_POST['atkt3'];

    $eno4=$_POST['eno4'];
    $name4=$_POST['name4'];
    $p_no4=$_POST['p_no4'];
    $email4=$_POST['email4'];
    $city4=$_POST['city4'];
    $atkt4=$_POST['atkt4'];

    
    $dept=$_POST["dept"];

    $academic_year=$_POST["academic_year"];

    $shift=$_POST["shift"];

    $count=0;

    $res= mysqli_query($con,"select *from project_group WHERE enrollment_no = '$_POST[eno1]'&&'$_POST[eno2]'&&'$_POST[eno3]'&&'$_POST[eno4]'");

    $count=mysqli_num_rows($res);
    if($count>0)

    {
        echo '<script type="text/javascript"> alert("Student with these enrollment no is already in group") </script>';
    }

    else{
        
        
        $query1="insert into project_group values ('$eno1','$eno1','$name1','$p_no1','$email1','$city1','$atkt1','$dept','$academic_year','$shift')";
        $query2="insert into project_group values ('$eno1','$eno2','$name2','$p_no2','$email2','$city2','$atkt2','$dept','$academic_year','$shift')";
        $query3="insert into project_group values ('$eno1','$eno3','$name3','$p_no3','$email3','$city3','$atkt3','$dept','$academic_year','$shift')";
        $query4="insert into project_group values ('$eno1','$eno4','$name4','$p_no4','$email4','$city4','$atkt4','$dept','$academic_year','$shift')";

        $role="Group Leader";
        
        $role_id=4;
        $query5="insert into project_login values('$eno1','$eno1','$role','$role_id','$dept','$academic_year','$shift')";

    $database=new DatabaseManager();
    $query1=$database->fireSafeQuery($query1,NULL);

    $database=new DatabaseManager();
    $query2=$database->fireSafeQuery($query2,NULL);

    $database=new DatabaseManager();
    $query3=$database->fireSafeQuery($query3,NULL);

    $database=new DatabaseManager();
    $query4=$database->fireSafeQuery($query4,NULL);

    $database=new DatabaseManager();
    $query5=$database->fireSafeQuery($query5,NULL);

        //header("location:Project_group.php")

        //$run1=mysqli_query($con,$query1);
    //$run2=mysqli_query($con,$query2);
    //$run3=mysqli_query($con,$query3);
    //$run4=mysqli_query($con,$query4);

    //$run5=mysqli_query($con,$query5);

         echo '<script type="text/javascript"> alert("Group is created successfully.") </script>';
    }
    
}

?>
