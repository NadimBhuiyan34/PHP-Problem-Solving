<?php 
for($i=1;$i<=5;$i++)
{
    for($j=0;$j<$i;$j++)
    {
        echo "* ";
  
    }
    echo"<br>";
      if($i==5)
     {
         for($k=5;$k>=1;$k--)
        {
            for($l=0;$l<$k;$l++)
            {
               echo"* ";
            }
            echo"<br>";
        }
      }
}


?>