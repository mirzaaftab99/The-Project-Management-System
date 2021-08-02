<?php

include("config.php");

$dept=$_POST["dept"];


if($dept=="Computer Engineering")
{
	echo '<table border="0">
	<tr>
            <td style="font-size:20px">Domain:</td>
                
            </tr>
            <tr>
            <td></td>
            <td><input type="checkbox" name="dom[]" id="do1" value="PHP and MYSQl">PHP and MYSQl</td> 
            </tr>
            <tr>
              <td></td>
                <td><input type="checkbox" name="dom[]" id="do2" value="Python">Python</td>
            </tr>
            <tr>
           <td></td>
                <td><input type="checkbox" name="dom[]" id="do3" value="Android Studio">Android Studio</td>
                 
            </tr>
            <tr>
             <td></td>
                <td><input type="checkbox" name="dom[]" id="do4" value="Networking">Networking</td>
            </tr>

            <tr>
               <td></td>
                <td><input type="checkbox" name="dom[]" id="do5" value="Embedded System">Embedded System</td>
            </tr></table>';
        }
elseif ($dept=="Civil Engineering") {
	echo '<table border="0">
	<tr>
            <td style="font-size:20px">Domain:</td>
                
            </tr>
            <tr>
            <td></td>
            <td><input type="checkbox" name="dom[]" id="do1" value="Surveying and Levelling">Surveying and Levelling</td> 
            </tr>
            <tr>
              <td></td>
                <td><input type="checkbox" name="dom[]" id="do2" value="MOS">MOS</td>
            </tr>
            <tr>
           <td></td>
                <td><input type="checkbox" name="dom[]" id="do3" value="CAD">CAD</td>
                 
            </tr>
            <tr>
             <td></td>
                <td><input type="checkbox" name="dom[]" id="do4" value="Auto CAD">Auto CAD</td>
            </tr>
</table>';

}elseif ($dept=="Mechanical Engineering") {
	echo '<table border="0">
	<tr>
            <td style="font-size:20px">Domain:</td>
                
            </tr>
            <tr>
            <td></td>
            <td><input type="checkbox" name="dom[]" id="do1" value="Automobile and Manufacturing System">Automobile and Manufacturing System</td> 
            </tr>
            <tr>
              <td></td>
                <td><input type="checkbox" name="dom[]" id="do2" value="Fluid Mechanics">Fluid Mechanics</td>
            </tr>
            <tr>
           <td></td>
                <td><input type="checkbox" name="dom[]" id="do3" value="Energy Management">Energy Management</td>
                 
            </tr>
            <tr>
             <td></td>
                <td><input type="checkbox" name="dom[]" id="do4" value="Machine Drawing">Machine Drawing</td>
            </tr>

            <tr>
               <td></td>
                <td><input type="checkbox" name="dom[]" id="do5" value="Design Machine Elements">Design Machine Elements</td>
            </tr></table>';


}
else{
	
	echo '<table border="0">
	<tr>
            <td style="font-size:20px">Domain:</td>
                
            </tr>
            <tr>
            <td></td>
            <td><input type="checkbox" name="dom[]" id="do1" value="EMB System">EMB System</td> 
            </tr>
            <tr>
              <td></td>
                <td><input type="checkbox" name="dom[]" id="do2" value="VLSI System">VLSI System</td>
            </tr>
            <tr>
           <td></td>
                <td><input type="checkbox" name="dom[]" id="do3" value="Control System and Instrumentation">Control System and Instrumentation</td>
                 
            </tr>
            <tr>
             <td></td>
                <td><input type="checkbox" name="dom[]" id="do4" value="PDT">PDT</td>
            </tr>

            <tr>
               <td></td>
                <td><input type="checkbox" name="dom[]" id="do5" value="MIC System">MIC System</td>
            </tr></table>';
}



?>

