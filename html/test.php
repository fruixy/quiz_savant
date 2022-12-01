<?php
phpinfo();
?>


<div id="timerquestion"></div>
    <script src="timerquestion.js"></script>
    <?php 

    $haz=array(1,
    rand(2,3),
    rand(4,5),
    rand(6,7),
    rand(8,9),0);

    shuffle($haz);

    $co="";
    $i=0;

    while($i<2){
    $co.= $haz[$i];
      if(!in_array($co,$haz)){
      }else{}
    $i++;
    }

    ?> 