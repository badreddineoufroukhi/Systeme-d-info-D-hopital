<?php
if(isset($_POST['CIN_emp']))  
{
$a=$_POST['CIN_emp'];
$b=$_POST['ID_Labo'];
$c=$_POST['ID_pharm'];
$e=$_POST['Code_metier'];
$f=$_POST['Nom_complet'];
$g=$_POST['Libelle_met'];
$y=$_POST['ID_Poste'];
$u=$_POST['libelle'];
echo "<br/>";
@mysql_connect("localhost","root","");
@mysql_select_db("hopital");
echo "gdhg";
$d=mysql_query("INSERT INTO `employer`(`CIN_emp`, `ID_Labo`, `ID_pharm`,`Code_metier`,`Nom_complet`) VALUES ( $a, $b, $c, $e, '$f');") or die('Erre');
echo "gdhg";
mysql_query("INSERT INTO `metier` (`Code_metier`, `Libelle_met`) VALUES ($e,'$g');") or die('Erre');
mysql_query("INSERT INTO `poste` (`ID_Poste`, `Code_metier`, `libelle`) VALUES ($y,$e,'$u');") or die('Erre');
echo "<br/>";

echo "<br/>";
if(!$d) echo"erreur";
else header("location:services.html");
}
else echo"erreur";
?>