<?php 
$num=200;
for($num=200;$num<250;$num++)
{

 if($num%4==0)
    {
        echo "$num ";
        if($num+4<=250)
        {
            echo ",";
        }
    }   
}


?>