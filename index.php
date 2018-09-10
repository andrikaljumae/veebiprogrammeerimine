<?php
  //echo "Siin on minu esimene PHP!";
  $name = "Andri";
  $surname = "Kaljumäe";
  $todayDate = date("d.m.Y");
  $hourNow = date("H");
  //echo $hourNow;
  $partOfDay = "";
  if ($hourNow < 8){
	  $partOfDay = "varajane hommik";  
  }
  if ($hourNow >= 8 and $hourNow < 16){
	  $partOfDay = "kooliaeg";
  }
  if ($hourNow >= 16){
	  $partOfDay = "vaba aeg";
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    <?php
	echo $name;
	echo"";
	echo $surname;
?>	
  , õppetöö</title>
</head>
<body>
  <h1>
  <?php
    echo $name ." ".$surname;

  ?>
  </h1>
  <p>Siin on minu <a href="http://www.tlu.ee" target="_blank">TLÜ</a> õppetöö raames valminud veebilehed. Need ei oma mingit sügavat sisu ja nende kopeerimine ei oma mõtet.</p>
  <p>Kodutöö.</p>
  <?php
    echo "<p>Tänane kuupäev on:" .$todayDate ."</p> \n";
	echo "<p>Lehe avamise hetkel oli kell " .date("H:i:s") .", käes on " .$partOfDay .".</p> \n";
  ?>
<!--<img src=
"http://greeny.cs.tlu.ee/~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_3.jpg" alt="TLÜ Terra Õppehoone">-->
<img src="../../~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_3.jpg" alt="TLÜ Terra Õppehoone">
<p> Mul on sõber, kes ka teeb <a href="../../~merivor" target="_blank">veebi</a>.</p>

</body>
</html>