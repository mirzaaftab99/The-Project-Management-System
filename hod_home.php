<?php
session_start();
$un=$_SESSION['un'];
$pwd=$_SESSION['pwd'];

 ?>  
<html>
<title>Hod Home</title>
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
	width:800px;
    height: 300px;
	border-radius:5px;
	opacity:.7;
        }


#nav input[type="button"]{
	margin:10px;
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

    <form  name="myForm" method="post" action="hod_home.php" autocomplete="off">
        
        
        <div id=nav>

<h5 style="color:black">Welcome, <?php echo $un?>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Department:
            <?php
    include("config.php");
    $sel="select dept from project_login where username='$un'";
    $result=mysqli_query($con,$sel);
    if($result){
        while($row=mysqli_fetch_array($result))
        {
            $department=$row["dept"];
            echo $department;
        }
    }
    
    ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
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


    </h5>
            <center>
        <input type="button" onClick="location.href='guide_reg.php'" value="Guide Registration"><br>
        <input type="button" onClick="location.href='idea_list.php'" value="Idea List"><br>
        
    <input type="button" onClick="location.href='project_list.php'" value="Project List">
        
</center>
        </div><br>
        
        <div id=nav1>
        <input type="button" onClick="location.href='login.php'" value="Logout">  
</div>
      </form>
    </body>
</html>

