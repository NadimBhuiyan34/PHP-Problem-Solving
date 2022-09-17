<?php 
//⦁	Write a PHP script that inserts a new item in an array in any position. 
// ⦁	Original array
 
// 1 2 3 4 5 

// After inserting '$' the array is 

// 1 2 3 $ 4 5
$array_1=array(1,2,3,4,5);
$array_2=array('$');
array_splice($array_1,3,0,$array_2);
 foreach($array_1 as $value)
 {
     echo "$value ";
 }



 
?>