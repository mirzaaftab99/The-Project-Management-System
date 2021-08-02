
<html>
<title>LOGIN</title>
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
  border-radius:5px;
  opacity:.7;
        }


#nav input[type="submit"]{
  margin:10px;
  width:100px;
  border-radius:50px;
  margin-left:10px;
  height:30px;
  background:blue;
  color:white;
  font-weight:bold;
}
#nav input[type="submit"]:hover{

  background:LightBlue;
  color:blue;

}

    #nav input[type="button"]{

  width:200px;
  border-radius:50px;
  height:30px;
  background:blue;
  color:white;
  font-weight:bold;
}
#nav input[type="button"]:hover{

  background:LightBlue;
  color:blue;

}


    </style>

    <body style="background-color:Gray; ">

    <form  name="myForm" method="post" action="login.php" autocomplete="off">
        <div id=nav>
<center>
   <br>
        <h3 style="color: black">LOGIN</h3>
        <label style="background-color: LightGray; color: black;"> Username:</label>
        <input type="text" values="inputvalues" placeholder="Enter Your Username" name="username" required><br>
        <label style="background-color: LightGray; color: black;"> Password:</label>
        <input type="password" values="inputvalues"  placeholder="Enter Your Password" name="password" required><br><br>
        <input type="submit" name="login" value="Login">
    <input type="button" onClick="location.href='reg.php'" value="Registration">

</center>
        </div>
      </form>
    </body>
</html>

<?php
session_start();
if(isset($_POST['login']))
    {

        include("config.php");

    $username=$_POST['username'];
    $password=$_POST['password'];

    $_SESSION['un']=$username;
    $_SESSION['pwd']=$password;


    $role="Group Leader";
    $role1="HOD";
    $role2="Project Coordinator";
    $role3="Guide";

    $query=mysqli_query($con, "select * from project_login where username='$username' and password='$password' and role='$role'");
    $numrows = mysqli_num_rows($query);

    $query1=mysqli_query($con, "select * from project_login where username='$username' and password='$password' and role='$role1'");
    $numrows1 = mysqli_num_rows($query1);

    $query2=mysqli_query($con, "select * from project_login where username='$username' and password='$password' and role='$role2'");
    $numrows2 = mysqli_num_rows($query2);

    $query3=mysqli_query($con, "select * from guide_reg where username='$username' and password='$password'");
    $numrows3 = mysqli_num_rows($query3);




   if($numrows == 1)
    {
       //while($rows = mysqli_fetch_assoc($q))
     {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;

        }
       header("location: student_home.php");

   }
     elseif($numrows1 == 1){
        header("location: hod_home.php");
       }

elseif($numrows2 == 1){
        header("location: p_co_home.php");
       }


elseif($numrows3 == 1){


        header("location: guide_home.php");
       }



           else
           {
               echo '<script type="text/javascript"> alert("Incorrect username or password") </script>';
           }


    }

?>
