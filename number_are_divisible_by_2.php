<?php

   $myarray = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
   $total = count($myarray);

             foreach($myarray as $rw)
             {
              if(($rw%2) == 0 ){
              echo "<li>".$rw."</li>";
              }
             }
  ?>