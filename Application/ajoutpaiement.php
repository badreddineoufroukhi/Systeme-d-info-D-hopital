<?php
if(isset($_POST['Billet']))  
{
$a=$_POST['Billet'];
$b=$_POST['Montant'];
$c=$_POST['Mode_paiement'];
echo "<br/>";
@mysql_connect("localhost","root","");
@mysql_select_db("hopital");
$d=mysql_query("INSERT INTO `paiement` (`Billet`, `Montant`, `Mode_paiement`) VALUES ($a,$b,'$c');") or die('Erre');
echo "<br/>";
echo "<br/>";
if(!$d) echo"erreur";
else header("location:services.html");
}
else echo"erreur";
?>