<?php
require ("functions.php");
  //echo "Siin on minu esimene PHP!";
  $name = "Tundmatu";
  $surname = "Inimene";
  $birthMonth = date("m");
  $birthYear = date("Y") - 15;
  $birthDay = date("d");
  $monthNamesET = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni","juuli", "august", "september", "oktoober", "november", "detsember"];
  
  //var_dump($_POST);
  if (isset($_POST["firstName"])){
	  $name = $_POST["firstName"];
  }
  if (isset($_POST["surName"])){
	  $surname = $_POST["surName"];
  }
	  

function fullName() {
  $fullName = $GLOBALS["name"] . " " .$GLOBALS["surname"];
  echo $fullName;
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
  , õppetöö
  </title>
</head>
<body>
  <h1>
  <?php
    echo $name ." ".$surname;

  ?>
  </h1>
  <p>Siin on minu <a href="http://www.tlu.ee" target="_blank">TLÜ</a> õppetöö raames valminud veebilehed. Need ei oma mingit sügavat sisu ja nende kopeerimine ei oma mõtet.</p>
  <hr>
  
 <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <label>Eesnimi:</label>
 <br>
 <input name="firstName" type="text" value="">
 <br>
 <label>Perekonnanimi:</label>
 <br>
 <input name="surName" type="text" value="">
 <br>
 <label>Sünnipäev:</label>
 <br>
 <?php
   echo '<select name="birthDay">' ."\n";
	for ($i = 1; $i < 32; $i ++){
		echo '<option value="' .$i .'"';
		if ($i == $birthDay){
			echo " selected ";
		}
		echo ">" .$i ."</option> \n";
	}
	echo"</select> \n";
?>
<br>
<label>Sünnikuu: </label>
<br>
<?php
   echo '<select name="birthMonth">' ."\n";
	for ($i = 1; $i < 13; $i ++){
			echo '<option value="' .$i .'"';
			if ($i == $birthMonth){
				echo " selected ";
			}
			echo ">" .$monthNamesET[$i - 1] ."</option> \n";
		}
		echo "</select> \n"
?>
<br>
<label>Sünniaasta: </label>
 <!--<input name="birthYear" type="number" min="1924" max="2003" value="1998">-->
 <br>
 <?php
	    echo '<select name="birthYear">' ."\n";
		for ($i = $birthYear; $i >= date("Y") - 100; $i --){
			echo '<option value="' .$i .'"';
			if ($i == $birthYear){
				echo " selected ";
			}
			echo ">" .$i ."</option> \n";
		}
		echo "</select> \n";
?>
<br>
<input name="submitUserData" type="submit" value="Saada andmed">
</form>

<?php
if (isset($_POST["firstName"])){
	echo "<br><p>Olete elanud järgnevatel aastatel:</p>";
	echo "<ul> \n";
	for ($i = $_POST["birthYear"]; $i <= date("Y"); $i ++){
		echo "<li>" . $i . "</li> \n";	
	}
	echo "</ul> \n";
}
?>

</body>
</html>