<?php

include("config.php");

$group_code=$_POST["gc"];



$sel="SELECT group_members,enrollment_no FROM `project_group_code_assign` WHERE group_code='$group_code' and enrollment_no=gl_enrollment_no";
$database=new DatabaseManager();
$tr=$database->safeRetrieve($sel,NULL);


$sel1="select group_members from `project_group_code_assign` WHERE group_code='$group_code' and enrollment_no!=gl_enrollment_no";
$database=new DatabaseManager();
$tr1=$database->safeRetrieve($sel1,NULL);


$sel2="SELECT group_code,idea1,idea2,idea3 FROM `project_idea_topic` WHERE group_code='$group_code'";
$database=new DatabaseManager();
$tr2=$database->safeRetrieve($sel2,NULL);
    
$sel3="select group_members from `project_group_code_assign` WHERE group_code='$group_code' and enrollment_no=gl_enrollment_no";
$database=new DatabaseManager();    
$tr3=$database->safeRetrieve($sel3,NULL);


echo "<table>";


for($j=0;$j<count($tr);$j++){
   
    echo "<tr><td>GL Enrollment No:<td>";
    echo "<td><input type='text' name='' value='".$tr[$j]["enrollment_no"]."'><td></tr>";
    
}


for($j=0;$j<count($tr3);$j++){
   
    echo "<tr><td>Group Leader:<td>";
    echo "<td><input type='text' name='' value='".$tr3[$j]["group_members"]."'><td></tr>";
    
}

$i=1;
for($j=0;$j<count($tr1);$j++){
    echo "<tr><td>Member".$i.":<td>";
  //echo "<tr><td>Name:<td>";
    echo "<td><input type='text' name='' value='".$tr1[$j]["group_members"]."'><td></tr>";
    $i++;
}

for($j=0;$j<count($tr2);$j++){
    
    echo "<tr><td>Idea 1:<td>";
    echo "<td><input type='text' name='' value='".$tr2[$j]["idea1"]."'><td></tr>";
    echo "<tr><td>Idea 2:<td>";
    echo "<td><input type='text' name='' value='".$tr2[$j]["idea2"]."'><td></tr>";
    echo "<tr><td>Idea 3:<td>";
    echo "<td><input type='text' name='' value='".$tr2[$j]["idea3"]."'><td></tr>";
}

echo "
<tr><td><label>Allot Topic:</label><td>
    <td><input type='text' name='topic'><td></tr></table>";

   echo "<input type='submit' name='submit' id='submit' value='Submit'>
";
?>
  


