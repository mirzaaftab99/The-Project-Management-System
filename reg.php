<html>
  
<title>Registration</title>
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
	
	width:230px;
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

    <form  name="myForm" method="post" action="reg.php" autocomplete="off">
         
        <div id=nav>

            <center>
                <h2 style="color:black;">Registration</h2>
        <input type="button" onClick="location.href='hod_reg.php'" value="HOD Registration"><br>
         <input type="button" onClick="location.href='pco_reg.php'" value="Project Coordinator Registration"><br>
         <input type="button" onClick="location.href='student_group.php'" value="Student group Registration"><br>
         
        
</center>
        </div>
        <br>
        <div id=nav1>
        <input type="button" onClick="location.href='login.php'" value="Login">  
</div>
      </form>
    </body>
</html>

