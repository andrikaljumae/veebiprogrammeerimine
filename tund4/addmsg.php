<?php
  require("functions.php");
  
  $notice = null;
  
  if (isset($_POST["submitMessage"])){
	if ($_POST["message"] != "Hello hello" 
	and !empty($_POST["message"])) {
	  $notice = "Sõnum olemas!";
      $notice = saveAMsg($_POST["message"]);	  
	} else {
	  $notice = "Bye bye";
	}
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<title>Sõnumi lisamine</title>
  </head>
  <body>
    <h1>Sõnumi lisamine</h1>
	<p>See leht on valminud <a href="http://www.tlu.ee" target="_blank">TLÜ</a> õppetöö raames ja ei oma mingisugust, mõtestatud või muul moel väärtuslikku sisu.</p>
	<hr>
	
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	  <label>Sõnum (max 256 märki):</label>
	  <br>
	  <textarea rows="4" cols="64" name="message">Üritan praegu midagi valmis saada</textarea>
	  <br>
	  <input name="submitMessage" type="submit" value="Salvesta sõnum">
	</form>
	<br>
	<p>
	<?php
	  echo $notice;
	?>
    </p>
  </body>
</html>