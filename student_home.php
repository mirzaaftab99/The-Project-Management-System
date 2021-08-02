<?php
session_start();
$un=$_SESSION['un'];
$pwd=$_SESSION['pwd'];

 ?>  
<html>
  
<title>Student Home</title>
    <style>
    Body{
	padding-top:50px;
	
}
#nav{
	color:white;
	padding-left:5px;
	font-size:25px;
    margin:auto;
	background:LightGray;
	width:400px;
    height:250px;
	border-radius:5px;
	opacity:.7;
        }


#nav input[type="button"]{
	
	width:200px;
	border-radius:50px;
	margin-left:10px;
	height:50px;
	background:blue;
	color:white;
	font-weight:bold;
}
#nav input[type="button"]:hover{

	background:LightBlue;
	color:blue;

}
        
         #nav1 input[type="button"]{
	
	width:100px;
	border-radius:50px;
	margin-left:900px;
	height:50px;
	background:blue;
	color:white;
	font-weight:bold;
}
        
        #nav1 input[type="button"]:hover{

	background:LightBlue;
	color:blue;

}
        
        

    </style>

    <body style="background-color:Gray; ">

    <form  name="myForm" method="post" action="student_home.php" autocomplete="off">
         
        <div id=nav>
<h4 style="color:black">Welcome, <?php echo $un ?></h4>
 
           <?php
            /*
            session_start();
            include("config.php");  
            $username=$_SESSION['username'];
            $sel="select name from project_group where enrollment_no='$username'";
            $result=mysqli_query($con,$sel);
            if($result){
                while($row=mysqli_fetch_array($result))
                {
                    $name=$row["name"];
                    echo "$name<br>";
                }
            }
    session_destroy();
    */
            ?>
            
            <center>
        <input type="button" onClick="location.href='idea_sub.php'" value="Idea Submission">
         <input type="button" onClick="location.href='project_topic.php'" value="Project Topic and Guide">
        <input type="button" onClick="location.href='project_status.php'" value="Project Status">

</center>
        </div>
        <br>
        <div id=nav1>
        <input type="button" onClick="location.href='logout.php'" value="Logout">  
</div>
      </form>
    </body>
</html>

<?php
    
    ?>


