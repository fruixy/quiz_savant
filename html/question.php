<?php require '../helper/header.php'; ?>

<html>
<body>

<META HTTP-EQUIV="Refresh" CONTENT="30; URL=\reponse.php">

<body>
    <div id="timerquestion"></div>
    <script src="timerquestion.js"></script>
</body>

<body>
    <button> LOL </button>
</body>

<body>
    <?php echo (rand(0, 20)); ?>
</body>

<body>
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

echo $co;

?>
</body>

</body>
</html>