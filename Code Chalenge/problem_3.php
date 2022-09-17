<?php 
$info=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
// ascending order sort by value

asort($info);
echo"ascending order sort by value <br>";
echo "<pre>";
 foreach($info as $x=>$value)
 {
     echo "$x=>$value";
     echo"\n";
 }
//  ascending order sort by Key
echo "</pre>";
ksort($info);
echo "ascending order sort by Key <br>";
echo "<pre>";
 foreach($info as $x=>$value)
 {
     echo "$x=>$value";
     echo"\n";
 }
echo "</pre>";
//  descending order sorting by Value
echo "</pre>";
arsort($info);
echo "descending order sorting by Value<br>";
echo "<pre>";
 foreach($info as $x=>$value)
 {
     echo "$x=>$value";
     echo"\n";
 }
echo "</pre>";
echo "</pre>";
//  descending order sorting by Key
echo "</pre>";
krsort($info);
echo "descending order sorting by Key<br>";
echo "<pre>";
 foreach($info as $x=>$value)
 {
     echo "$x=>$value";
     echo"\n";
 }
echo "</pre>";

?>