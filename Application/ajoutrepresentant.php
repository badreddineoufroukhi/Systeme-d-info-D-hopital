<?php
if(isset($_POST['CIN_rep']))  
{
$a=$_POST['CIN_rep'];
$b=$_POST['CIN'];
$c=$_POST['Code_cons'];
$e=$_POST['Nom_complet'];
$f=$_POST['liaison_familiale'];
echo "<br/>";
@mysql_connect("localhost","root","");
@mysql_select_db("hopital");
$d=mysql_query("INSERT INTO `representant` (`CIN_rep`, `CIN`, `Code_cons`, `Nom_complet`, `liaison_familiale`) VALUES ($a,$b,$c,'$e','$f');") or die('Erre');

echo "<br/>";
echo "<br/>";
if(!$d) echo"erreur";
else header("location:recherchetraitement.html");
}
else echo"erreur";
?>