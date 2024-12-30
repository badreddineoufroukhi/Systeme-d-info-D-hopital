<?php
if(isset($_POST['ID_pharm']))  
{
$a=$_POST['ID_pharm'];
$b=$_POST['Libelle_pharm'];
$e=$_POST['Code_equi'];
echo "<br/>";
@mysql_connect("localhost","root","");
@mysql_select_db("hopital"); 
$d=mysql_query("INSERT INTO `pharmacie`(`ID_pharm`, `Libelle_pharm`) VALUES ( $a,'$b');") or die('Erre');
$d1=mysql_query("INSERT INTO `fournir`(`Code_equi`, `ID_pharm`) VALUES ($e,$a);") or die('Erre');
echo "<br/>";
echo "<br/>";
if(!$d) echo"erreur";
else header("location:ajoutmedicament.html");
}
else echo"erreur";
?>