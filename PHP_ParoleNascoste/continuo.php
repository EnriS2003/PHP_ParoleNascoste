<!DOCTYPE html>
<html>
<head>
  <title>Parola nascosta</title>
</head>
<body>
<?php
session_start();

echo "<br>".$soluzione[$num]."<br>";
$_SESSION["frase"]=$soluzione[$num];
$_SESSION["parola"]=$parola[$num];
$_SESSION["arraylength1"]=$arraylength;
?>
<form method="post" action="controllo.php" >
Parola: <input type="text" name="inserito">
<input type="submit" name="invia" value="Invia">
</form>

</body>
</html>
