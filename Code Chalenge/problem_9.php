<?php 
$str = "Hello Pondits. How are you all?";
$pattern = "/l/i";
echo preg_match_all($pattern, $str); 
?>