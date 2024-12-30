<?php
if(isset($_POST['Code_med']))  
{
$a=$_POST['Code_med'];
$b=$_POST['Libelle_med'];
$c=$_POST['pays_origine'];
$e=$_POST['ID_pharm'];
echo "<br/>";
@mysql_connect("localhost","root","");
@mysql_select_db("hopital"); 
$d=mysql_query("INSERT INTO `medicament`(`Code_med`, `Libelle_med`, `pays_origine`) VALUES ( $a, '$b', '$c');") or die('Erre');
$d1=mysql_query("INSERT INTO `composer`(`Code_med`, `ID_pharm`) VALUES ($a,$e);") or die('Erre');
echo "<br/>";
echo "<br/>";
if(!$d) echo"erreur";
else header("location:services.html");
}
else echo"erreur";
?>