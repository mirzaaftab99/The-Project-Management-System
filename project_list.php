<?php
session_start();
$un=$_SESSION['un'];
$pwd=$_SESSION['pwd'];

 ?> 

<html>
<table border="1">
    
    
<?php

include("config.php");
    echo "<table border='1'>";
echo "<tr>
<td>Group Code:</td>
<td>Project Guide:</td>
<td>Project Topic:</td>
<td>Project Group Members:</td>
<td>Enrollment No:</td>
</tr>";
    


$sel="select dept from project_login where username='$un'";
    $result=mysqli_query($con,$sel);
    if($result){
        while($row=mysqli_fetch_array($result))
        {
            $department=$row["dept"];
            
        }
    }
   
    $sel="select shift from project_login where username='$un'";
    $result=mysqli_query($con,$sel);
    if($result){
        while($row=mysqli_fetch_array($result))
        {
            $shift=$row["shift"];
            
        }
    }
    

    
$query="select username from project_login where dept='$department' and shift='$shift'";
$result=mysqli_query($con,$query);

    
            if($result){
                while($row=mysqli_fetch_array($result))
                {
                    $user=$row["username"];
                    
                    $query1="select group_code from project_group_code_assign where enrollment_no='$user'";
                    $result1=mysqli_query($con,$query1);
                    
                    
                    
                      $sel="select group_code,group_members,enrollment_no from project_group_code_assign where gl_enrollment_no='$user'";
                    $database=new DatabaseManager();
                    $tr=$database->safeRetrieve($sel,NULL);

                      $sel1="select group_code from project_group_code_assign where enrollment_no='$user'";
                    $database=new DatabaseManager();
                    $tr1=$database->safeRetrieve($sel1,NULL);
                    
                    
                    
                     for($j=0;$j<count($tr1);$j++)
                    {
                        ?>
    <tr>
        <td rowspan="4"><?php echo $tr1[$j]['group_code'] ?></td>
        
        <?php
                    }
                    
                    
                    
                    if($result1){
                        while($row1=mysqli_fetch_array($result1))
                        {
                            $group_code=$row1["group_code"];
                             $sel2="select guide_name from guide_allot where group_code='$group_code'";
                            $database=new DatabaseManager();
                            $tr2=$database->safeRetrieve($sel2,NULL);
                            
                              $sel3="select project_topic from topic_allot where group_code='$group_code'";
                            $database=new DatabaseManager();
                            $tr3=$database->safeRetrieve($sel3,NULL);
                            
                            for($j=0;$j<count($tr2);$j++)
                            {
                                ?>
    
        <td rowspan="4"><?php echo $tr2[$j]["guide_name"]; ?></td>

    <?php
                            }
                            
                            
                           for($j=0;$j<count($tr3);$j++)
                            {
                                ?>
    
        <td rowspan="4"><?php echo $tr3[$j]["project_topic"]; ?></td>

    <?php
                            }

                        }
                    }
                    
                    

                  for($j=0;$j<count($tr);$j++){
                      
                      
                      ?>

    <td><?php echo $tr[$j]['group_members'] ?></td>
        <td><?php echo $tr[$j]['enrollment_no'] ?></td>
    
    </tr>
    <?php
                  }
               
                }
            }
    
 
                    
?>
</table>

</html>