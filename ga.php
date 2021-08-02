<?php

session_start();
$un=$_SESSION['un'];
$pwd=$_SESSION['pwd'];

include("config.php");

$eno=$_POST["eno"];

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
<?php


$sel="SELECT name,enrollment_no FROM `project_group` WHERE group_leader='$eno'";
$database=new DatabaseManager();
$tr=$database->safeRetrieve($sel,NULL);
    


$sel1="SELECT group_code,idea1,idea2,idea3 FROM `project_idea_topic` WHERE gl_eno='$eno'";
$database=new DatabaseManager();
$tr1=$database->safeRetrieve($sel1,NULL);
    

echo "<table>";
//echo "<tr><td>GL Enrollment No:<td><td>".$eno."<td></tr>";
for($j=0;$j<count($tr1);$j++){
 echo "<tr><td>Group Code:<td>";
    echo "<td><input type='text' name='gc' value='".$tr1[$j]["group_code"]."'><td></tr>";
}
 
$i=1;
for($j=0;$j<count($tr);$j++){
   
    echo "<tr><td>Member".$i.":<td>";
  //echo "<tr><td>Name:<td>";
    echo "<td><input type='text' name='' value='".$tr[$j]["name"]."'><td></tr>";
    echo "<tr><td>Enrollment No:<td>";
    echo "<td><input type='text' name='' value='".$tr[$j]["enrollment_no"]."'><td></tr>";
    $i++;
}

for($j=0;$j<count($tr1);$j++){
    
    echo "<tr><td>Idea 1:<td>";
    echo "<td><input type='text' name='' value='".$tr1[$j]["idea1"]."'><td></tr>";
    echo "<tr><td>Idea 2:<td>";
    echo "<td><input type='text' name='' value='".$tr1[$j]["idea2"]."'><td></tr>";
    echo "<tr><td>Idea 3:<td>";
    echo "<td><input type='text' name='' value='".$tr1[$j]["idea3"]."'><td></tr>";
}

echo "<tr><td><label>Allot Guide:</label><td>
    
      <td><select name='gname'>";
      $gc=$_POST['gc'];
      $gname=$_POST['gname'];

      echo  "<option>--select guide name--</option>";
        ?>
<?php

            $query="select guide_name from guide_reg where dept='$department' and shift='$shift'";
            $result=mysqli_query($con,$query);
            if($result){
                while($row=mysqli_fetch_array($result))
                {
                    echo "<option>".$row['guide_name']."<br></option>";
                }
            }
                
echo "</select></td>
</tr>
</table>
<input type='submit' name='submit' id='submit' value='Submit'>
";

$_SESSION['gc']=$gc;
$_SESSION['gname']=$gname;


?>

