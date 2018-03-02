<?php
   //echo "<table border=\"1\">";
echo "<table border = 3px>";
echo "</tr>";
   for($i =0; $i<=100;$i++)
   {
      echo "<tr align = center>";

     for($x=0; $x<=100; $x++)
     {
       if ($i == 0 && $x == 0)
       {
         echo "<td></td>";
       }
       else if ($i == 0)
       {
         $rows = 1;
         echo "<td>".$rows*$x."</td>";
       }
       else if ($x == 0)
       {
         $cols = 1;
         echo "<td>".$i*$cols."</td>";
       }
       else
       {
         echo  "<td> ".$i*$x."</td>";
       }
    }
      echo "</tr>";
    }


echo "</table>";

?>
