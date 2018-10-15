<?php
  require("functions.php");
  $notice = readallmessages();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<title>Anonüümsed Sõnumid</title>
  </head>
  <body>
    <h1>Sõnumid</h1>
	<p>See leht on valminud <a href="http://www.tlu.ee" target="_blank">TLÜ</a> õppetöö raames ja ei oma mingisugust, mõtestatud või muul moel väärtuslikku sisu.</p>
	<hr>
	
	<?php
	  echo $notice;
	?>
   
  </body>
</html>