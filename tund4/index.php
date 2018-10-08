<?php
  //echo "Siin on minu esimene PHP!";
  $name = "Andri";
  $surname = "Kaljumäe";
   $todayDate = date("d.");
   $monthDate = date("m");
   $hourNow = date("H");
   $todayYear = date("Y");
   $todayDay = date("D");
   //echo $hourNow; 
   $partOfDay = "";
   if ($hourNow < 8) {
	   $partOfDay = "Varajane hommik";
   }
   if ($hourNow >= 8 and $hourNow < 16) {
	   $partOfDay = "Koolipäev";
   }
   if ($hourNow >= 16) {
	   $partOfDay = "Vaba aeg";
   }
   //months
   if ($monthDate == "01") {
	   $monthDate = "Jaanuar";
   }
   if ($monthDate == "02") {
	   $monthDate = "Veebruar";
   }
   if ($monthDate == "03") {
	   $monthDate = "Märts";
   }
   if ($monthDate == "04") {
	   $monthDate = "Aprill";
   }
   if ($monthDate == "05") {
	   $monthDate = "Mai";
   }
   if ($monthDate == "06") {
	   $monthDate = "Juuni";
   }
   if ($monthDate == "07") {
	   $monthDate = "Juuli";
   }
   if ($monthDate == "08") {
	   $monthDate = "August";
   }
   if ($monthDate == "09") {
	   $monthDate = "September";
   }
   if ($monthDate == "10") {
	   $monthDate = "Oktoober";
   }
   if ($monthDate == "11") {
	   $monthDate = "November";
   }
   if ($monthDate == "12") {
	   $monthDate = "Detsember";
   }
   //days
   if ($todayDay == "Mon") {
	   $todayDay = "Esmaspäev";
   }
   if ($todayDay == "Tue") {
	   $todayDay = "Teisipäev";
   }
   if ($todayDay == "Wed") {
	   $todayDay = "Kolmapäev";
   }
   if ($todayDay == "Thu") {
	   $todayDay = "Neljapäev";
   }
   if ($todayDay == "Fri") {
	   $todayDay = "Reede";
   }
   if ($todayDay == "Sat") {
	   $todayDay = "Laupäev";
   }
   if ($todayDay == "Sun") {
	   $todayDay = "Pühapäev";
  }
  
  //loosime juhusliku pildi
  $picNum = mt_rand(2, 43);//random
  //echo $picNum;
  $picURL = "http://www.cs.tlu.ee/~rinde/media/fotod/TLU_600x400/tlu_";
  $picEXT = ".jpg";
  $PicFileName = $picURL .$picNum .$picEXT;
  //echo $PicFileName;
  
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
  , õppetöö
  </title>
</head>
<body>
  <h1>
  <?php
    echo $name ." ".$surname;

  ?>
  </h1>
  <p>Siin on minu <a href="http://www.tlu.ee" target="_blank">TLÜ</a> õppetöö raames valminud veebilehed.</p>
  <?php
    echo "<p> Täna on: " .$todayDay .", " .$todayDate ." " .$monthDate ." " .$todayYear ."</p> \n" ; 
	echo "<p>Kell on: "  .date("H:i:s") .", käes on "  .$partOfDay .".</p> \n";
  ?>
<!--<img src=
"http://greeny.cs.tlu.ee/~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_3.jpg" alt="TLÜ Terra Õppehoone">-->
<img src="../../../~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_3.jpg" alt="TLÜ Terra Õppehoone">
<p> Mul on sõber, kes ka teeb <a href="../../../~merivor" target="_blank">veebi</a>.</p>

<img src="<?php echo $PicFileName; ?>" alt="Juhuslik pilt Tallinna Ülikoolist">

</body>
</html>