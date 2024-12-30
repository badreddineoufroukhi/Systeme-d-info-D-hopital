<?php
if(isset($_POST['Code_mala']))  
{
$a=$_POST['Code_mala'];
$b=$_POST['Libelle_mala'];
$c=$_POST['Nom_Dipartement'];
$e=$_POST['ID_dos'];
$f=$_POST['ID_Labo'];
$g=$_POST['CIN'];
$h=$_POST['nom_depa'];
echo "<br/>";
@mysql_connect("localhost","root","");
@mysql_select_db("hopital"); 
$d=mysql_query("INSERT INTO `maladie` (`Code_mala`, `Libelle_mala`, `Nom_Dipartement`) VALUES ( $a, '$b', '$c');") or die('Erre');
$d1=mysql_query("INSERT INTO `noter` (`Code_mala`, `ID_dos`) VALUES ($a,$e);") or die('Erre');
mysql_query("INSERT INTO `dossier_hospitaliser` (`ID_dos`, `ID_Labo`, `CIN`, `nom_depa`) VALUES ( $e, $f, $g, '$h');") or die('Erre');
echo "<br/>";
echo "<br/>";
if(!$d) echo"erreur";
else header("location:rechercheequipement.html");
}
else echo"erreur";
?>