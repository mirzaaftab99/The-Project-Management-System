<?php

include("config.php");

$eno=$_POST["eno"];

$sql="SELECT name FROM `project_group` WHERE group_leader='$eno'";
$res=mysqli_query($con,$sql);
$cnt=mysqli_num_rows($res);

echo "<table>";
//echo "<tr><td>GL Enrollment No:<td><td>".$eno."<td></tr>";
$i=1;
for($j=0;$j<$cnt;$j++){
    $row=mysqli_fetch_assoc($res);
    echo "<tr><td>Member".$i.":<td>";
    echo "<td><label name='nm' id='nm'>".$row['name']."</label><td></tr>";
    $i++;
}


echo "<tr><td><label>Group Code:</label><td>
      <td><input type='text' placeholder='Enter groupcode' name='gcode' required><td></table>";
echo "<input type='submit' name='submit' id='submit' value='Submit'>";
    


?>

