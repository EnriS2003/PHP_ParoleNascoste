<!DOCTYPE html>
<html>
<head>
  <title>Parola nascosta</title>
</head>
<body>
<?php
session_start();
$inserito=$_POST["inserito"];
$soluzione1=$_SESSION["frase"];
$parola=$_SESSION["parola"];
$_SESSION["prossimaparola"]=0;
if($inserito==$parola){
echo "Correct";
$_SESSION["prossimaparola"]+=1;
}
else{
echo "No correct";
}
echo "<br>"."<br>";
?>
<a href="index.php">Prossima parola</a>
</body>
</html>
