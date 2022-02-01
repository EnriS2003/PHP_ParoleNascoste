<!DOCTYPE html>
<html>
<head>
  <title>Parola nascosta</title>
</head>
<body>
<?php
session_start();
$parola[]="ciao";
$parola[]="salve";
$parola[]="computer";
$parola[]="10";
$soluzione[]="saluto italiano informale";
$soluzione[]="saluto italiano formale";
$soluzione[]="oggetto elettronico utlizzato quotidianamente";
$soluzione[]="il primo numero a due cifre";
$arraylength=count($parola);
$num = rand(0,$arraylength-1);

/*if($_SESSION["prossimaparola"]==0){
echo "<br>".$soluzione[$num+1]."<br>";
$_SESSION["frase"]=$soluzione[$num+1];
$_SESSION["parola"]=$parola[$num+1];
$_SESSION["arraylength1"]=$arraylength;
$_SESSION["num"]=$num+1;
}
else{*/
echo "<br>".$soluzione[$num]."<br>";

$_SESSION["frase"]=$soluzione[$num];
$_SESSION["parola"]=$parola[$num];
$_SESSION["arraylength1"]=$arraylength;
$_SESSION["num"]=$num;
//}

?>
<form method="post" action="controllo.php" >
Parola: <input type="text" name="inserito">
<input type="submit" name="invia" value="Invia">
</form>


</body>
</html>
