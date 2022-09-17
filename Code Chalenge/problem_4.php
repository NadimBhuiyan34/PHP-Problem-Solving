<?php 
$temperature=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$average_temperature=array_sum($temperature)/count($temperature);
echo "Average Temperature is:<br>".$average_temperature;
sort($temperature);
 
 
//  print_r(array_slice($temperature,0,7));
// List of seven lowest temperatures:
echo "<br>List of seven lowest temperatures:<br>";
 for($i=0;$i<7;$i++)
 {
     if($i==6)
     {
        echo "$temperature[$i]"; 
     }
     else
     {
        echo "$temperature[$i], ";
     }
     
 }
 echo"<br>List of seven highest temperatures:<br>";
for($i=count($temperature)-7;$i<count($temperature);$i++)
{
    if($i==29)
     {
        echo "$temperature[$i]"; 
     }
     else
     {
        echo "$temperature[$i], ";
     }
}
 
?>