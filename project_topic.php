

<html>
<head>    
      <title>Project Topic</title>
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
	margin-left:380px;
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
    
</head>      
    <body style="background-color:Gray; ">
        <div id="nav"><br>  
        <h3 style="color: black">Project Topic</h3>
        <form name="myForm" method="post" action="project_topic.php" autocomplete="off">
        
        <label style="background-color: LightGray; color: black;">Group Code:</label>

        <select name="gcode" onchange="load(this.value)">
            
            <?php
            session_start();
            $un=$_SESSION['un'];
            $pwd=$_SESSION['pwd'];

            include("config.php");  
            $username=$_SESSION['username'];
            $query="SELECT group_code FROM project_group_code_assign where enrollment_no='$username'";  
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
        <label style="background-color: LightGray; color: black;"> GL Enrollment No:</label>
        <input type="text" name="gleno" value="<?php echo htmlspecialchars($username); ?>" /><br><br>
            
        <label style="background-color: LightGray; color: black;"> Alloted Topic:</label>
        
            <select name="ptopic" onchange="load(this.value)">
            <?php
          
            $query="SELECT project_topic FROM topic_allot where group_code='$gc'";  
            $result=mysqli_query($con,$query);
            if($result){
                while($row=mysqli_fetch_array($result))
                {
                    $gc=$row["project_topic"];
                    echo "<option>$gc<br></option>";
                }
            }

            ?>
            </select><br><br>
     
             
        <label style="background-color: LightGray; color: black;">Alloted Guide:</label>

        <select name="guide" onchange="load(this.value)">
            
            <?php
        
            $query="SELECT group_code FROM project_group_code_assign where enrollment_no='$username'";  
            $result=mysqli_query($con,$query);
            if($result){
                while($row=mysqli_fetch_array($result))
                {
                    $gc=$row["group_code"];
                   
                }
            }
            $query="SELECT guide_name FROM topic_allot where group_code='$gc'";  
            $result=mysqli_query($con,$query);
            if($result){
                while($row=mysqli_fetch_array($result))
                {
                    $guide=$row["guide_name"];
                    echo "<option>$guide<br></option>";
                }
            }

            
            ?>
</select><br><br>
                
        
        </form>
        </div>           
    </body>
</html>



