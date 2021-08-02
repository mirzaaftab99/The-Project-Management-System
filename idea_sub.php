

<html>
<head>    
      <title>Project Idea</title>
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
    
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--   
<script>

    function load(gcode) {

      var the_data;
      the_data='&gcode='+gcode;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("stud_data").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("POST", ".php",true);
      xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(the_data);
  }


</script>-->
</head>      
    <body style="background-color:Gray; ">
        <div id="nav"><br>  
        <h3 style="color: black">Project Idea Submission</h3>
        <form name="myForm" method="post" action="idea_sub.php" autocomplete="off">
        
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
                
        <label style="color:black;">Department:</label>
            <select name="dept">

  <?php

$sel="select dept from project_login where username='$un'";
    $result=mysqli_query($con,$sel);
    if($result){
        while($row=mysqli_fetch_array($result))
        {
            $department=$row["dept"];
            echo "<option>$department</option>";
        }
    } 
?>

                <!--
                <option>--select department--</option>
                <option value="Computer Engineering">Computer Engineering</option>
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Electronics and Telecommunication Engineering">Electronics and Telecommunication Engineering</option>-->
            </select><br><br>
               
<label style="color:black; ">Academic Year:</label>
               <select name="academic_year">


  <?php

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

<!--
                <option>--select year--</option>
                   <option value="2017-2018">2017-2018</option>
                    <option value="2018-2019">2018-2019</option>
                     <option value="2019-2020">2019-2020</option>-->
               </select><br><br>

               <label style="color:black;">Shift:</label>
               <select name="shift">

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




                <!--
                <option>--select shift--</option>
                   <option value="1st Shift">1st Shift</option>
                    <option value="2nd Shift">2nd Shift</option>
               -->
               </select>
              <br><br>
            

            
        <label style="background-color: LightGray; color: black;"> Date:</label>
        <input type="date" name="date" id="date" required><br><br>
            
        <label style="background-color: LightGray; color: black;"> Idea 1:</label>
        <input type="text" name="idea1" id="idea1" placeholder="Enter your first idea" required><br><br>
            
        <label style="background-color: LightGray; color: black;"> Idea 2:</label>
        <input type="text" name="idea2" id="idea2" placeholder="Enter your second idea" required><br><br>
            
        <label style="background-color: LightGray; color: black;"> Idea 3:</label>
        <input type="text" name="idea3" id="idea3" placeholder="Enter your third idea" required><br><br>
            

            
        <input type="submit" name="submit" class="submit_btn" id="submit_btn" value="Submit">  
            

        </form>
        </div>           
    </body>
</html>


<?php


if(isset($_POST['submit']))
{

    
    $groupcode=$_POST['gcode'];
    
    $gleno=$_POST['gleno'];
    

  
//$ideacode = $groupcode;
    
    
//$ideacode = "I/".ltrim($groupcode,'CO/18/');

//echo $ideacode . "<br>";
//echo rtrim($str,"World!");
    $dept=$_POST['dept'];
    $academic_year=$_POST['academic_year'];
    $shift=$_POST['shift'];
    
    $date=$_POST['date'];
    
    
    $idea1=$_POST['idea1'];
    $idea2=$_POST['idea2'];
    $idea3=$_POST['idea3'];
    
    
    $count=0;
    $sql= "select *from project_idea_topic WHERE group_code = '$_POST[gcode]'";
  $res=mysqli_query($con,$sql);
$count=mysqli_num_rows($res);

    
    if($count>0)
    {
        echo '<script type="text/javascript"> alert("Idea is submitted already for these group.") </script>';
    }
    
    else{
        
    $query="insert into project_idea_topic values ('$_POST[gcode]','$_POST[gleno]','$_POST[dept]','$_POST[academic_year]','$_POST[shift]','$_POST[date]','$_POST[idea1]','$_POST[idea2]','$_POST[idea3]')";
    
        
    $database=new DatabaseManager();
    $query=$database->fireSafeQuery($query,NULL);
    
    echo '<script type="text/javascript"> alert("Ideas are submitted successfully.") </script>';
        
    }
    
}

?>


