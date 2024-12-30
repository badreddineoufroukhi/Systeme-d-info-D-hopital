<?php
if(isset($_POST['Code_equi']))  
{
$a=$_POST['Code_equi'];
$b=$_POST['libelle_equi'];
$c=$_POST['etat_equi'];
$e=$_POST['prix_equi'];
echo "<br/>";
@mysql_connect("localhost","root","");
@mysql_select_db("hopital");
$d=mysql_query("INSERT INTO `equipement` (`Code_equi`, `libelle_equi`, `etat_equi`, `prix_equi`) VALUES ( $a, '$b', '$c', $e);") or die('Erre');
echo "<br/>";

echo "<br/>";
if(!$d) echo"erreur";
else header("location:ajoutpharmacie.html");
}
else echo"erreur";
?>