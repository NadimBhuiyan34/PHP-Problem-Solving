<?php 
$arr1=array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
$arr2=array('c2'=>'yellow','c4'=>'blue');
$result=array_intersect_key($arr1,$arr2);
echo "<pre>";
print_r($result);
echo "</pre>";



?>