<?php
session_start();
$un=$_SESSION['un'];
$pwd=$_SESSION['pwd'];



$_SESSION['un']=$un;
$_SESSION['pwd']=$pwd;

 ?>
<html>
<title>Guide Home</title>
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
    height:400px;
	border-radius:5px;
	opacity:.7;
        }


#nav input[type="button"]{

	width:150px;
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
	height:40px;
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

    <form  name="myForm" method="post" action="guide_home.php" autocomplete="off">

        <div id=nav>
<h5 style="color:black"> Welcome, <?php echo  $un ?>
            </h5>
            <center>
               <input type="button" onClick="location.href='topic_allot.php'" value="Topic Submission"><br><br>
                 <input type="button" onClick="location.href='status_display.php'" value="Status Display">
    
</center>
        </div>
        <br><br><br>
        <div id=nav1>
        <input type="button" onClick="location.href='logout.php'" value="Logout">
</div>
      </form> 
    </body>
</html>
