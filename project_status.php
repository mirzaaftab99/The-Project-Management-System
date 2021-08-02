
<html>
<head>    
      <title>Project Status</title>
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

        <form name="myForm" method="post" action="project_status.php" enctype="multipart/form-data">
        <h3 style="color: black">Project Topic</h3>            
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
</select><br><br>
<div id="stud_data">

            </div>
        
        <label style="background-color: LightGray; color: black;">Description of task:</label><br>
       <textarea rows="4" cols="50" name="desc">Enter text here...</textarea><br>
            
            <label style="background-color: LightGray; color: black;"> Browse for file:</label>
            <input type="file" name="file" multiple> <br>
           
            <!--<label style="background-color: LightGray; color: black;">Note: upload any type like an image, docx, pdf..</label>-->
         
            <input type="submit" id="u_button" name="submit" value="Submit">

        </form>
        </div>           
    </body>
</html>

<?php
// Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
  	// Get image session_name()
  	$image = $_FILES['file']['name'];
  	// Get text
  	$desc = mysqli_real_escape_string($con, $_POST['desc']);

  	// image file directory
  	$target = "files/".basename($image);

  	$sql = "INSERT INTO `project_status`(`group_code`, `description`, `uploaded_file`,`dept`,`academic_year`,`shift`) VALUES ('$gc','$desc','$image','$department','$academic_year','$shift')";
  	// execute query
  	mysqli_query($con, $sql);

  	if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
  		echo '<script type="text/javascript"> alert("File is uploaded successfully.") </script>';
  	}
      else{
  		echo '<script type="text/javascript"> alert("Fail to upload file.") </script>';
  }
  }
?>

<!--
$fileSize=$_FILES['file']['size'];
    
    $fileError=$_FILES['file']['error'];
    
    $fileType=$_FILES['file']['type'];
    
    $fileExt=explode('.', $fileName);
    $fileActualExt=strtolower(end($fileExt));
    
    $allowed = array('jpg','jpeg','png','pdf','doc','docx');
    
if(in_array($fileActualExt, $allowed)){
    if($fileError===0){
        if($fileSize < 1000000){
            
        }else{
            echo "file is too big.";
        }
    
    }else{
        echo "Error uploading files.";
    }
    
}   
    else{
        echo "You cannot upload files of this type.";
    }

-->