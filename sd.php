<?php

include("config.php");

$group_code=$_POST["gc"];

$sel="SELECT description,uploaded_file FROM project_status where group_code='$group_code'";
$database=new DatabaseManager();
$tr=$database->safeRetrieve($sel,NULL);

echo "<table border='1' bgcolor='cyan'>
<tr>
<td>ID.</td>
<td>Work Done</td>
<td>Updated Work</td>
</tr>";

$i=1;
for($j=0;$j<count($tr);$j++){
    
    echo "<tr><td>".$i.".</td>";
  //echo "<tr><td>Name:<td>";

     // echo "<td><input type='button' name='' value='".$tr[$j]["description"]."'></td>";
    ?>

    <td><?php echo $tr[$j]["description"] ?></td>
    <td><a href="files/<?php echo $tr[$j]["uploaded_file"] ?>">View</a></td>
    
    <?php
    $i++;
}
echo '</table>';
?>


<?php
echo '<input type="submit" name="submit" id="submit" value="Submit">';

?>