<?php
include("config.php");
?>
<html>
<head>

      <title>Status Display</title>


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
	margin-left:50px;
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

<script>

    function load(gc) {

      var the_data;
      the_data='&gc='+gc;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("stud_data").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("POST", "sd.php",true);
      xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(the_data);
  }

</script>

</head>
    <body style="background-color:Gray; ">

        <div id="nav"><br>
        <h3 style="color: black">Status Display</h3>
        <form id="form" name="form" method="post" action="status_display.php" autocomplete="off">

        <label style="background-color: LightGray; color: black;">Group Code:</label>
<!--  $query="select group_code from guide_allot where guide_code= (select guide_code from guide_reg where username='$un')";

--><?php  
            session_start();
            $un=$_SESSION['un'];
            
            ?>
       <select name="gc" onchange="load(this.value)">
            <option>--Select Group Code--</option>
            <?php
           $query="select group_code from guide_allot where guide_code= (select guide_code from guide_reg where username='$un')";

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
            
            <div id="stud_data1">

            </div>

                

        </form>

        </div>

    </body>
</html>
