<?php
if(isset($_POST['billet_sortie']))  
{
$a=$_POST['billet_sortie'];
$b=$_POST['date_sortie'];
$c=$_POST['type_sortie'];
$e=$_POST['etat_sante'];
$f=$_POST['lieu_transf'];
echo "<br/>";
@mysql_connect("localhost","root","");
@mysql_select_db("hopital");
$d=mysql_query("INSERT INTO `sortie` (`billet_sortie`, `date_sortie`, `type_sortie`, `etat_sante`, `lieu_transf`) VALUES ( $a, '$b', '$c', '$e', '$f');") or die('Erre');
echo "<br/>";

echo "<br/>";
if(!$d) echo"erreur";
else header("location:index.html");
}
else echo"erreur";
?>