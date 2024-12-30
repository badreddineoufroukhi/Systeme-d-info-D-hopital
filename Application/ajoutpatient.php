<?php
if(isset($_POST['CIN']))  
{
$a=$_POST['CIN'];
$b=$_POST['ID_trai'];
$c=$_POST['Code_lit'];
$e=$_POST['Nom_complet'];
$f=$_POST['type_patient'];
$g=$_POST['Code_cham'];
$h=$_POST['etat_lit'];
$i=$_POST['libelle'];
$j=$_POST['nom_departement'];
$k=$_POST['surface'];
$l=$_POST['libelle'];
$m=$_POST['type_trait'];
$n=$_POST['degres_complexiter'];
echo "<br/>";
@mysql_connect("localhost","root","");
@mysql_select_db("hopital");
echo"dd";
$d=mysql_query("INSERT INTO `patient` (`CIN`, `ID_trai`, `Code_lit`, `Nom_complet`, `type_patient`) VALUES ( $a,$b,$c,'$e','$f');") or die('Erre');
echo"dd";
mysql_query("INSERT INTO `lit` (`Code_lit`, `Code_cham`, `etat_lit`) VALUES ( $c, $g,'$h');") or die('Erre');
echo"dd";
mysql_query("INSERT INTO `chambre` (`Code_cham`, `libelle`, `nom_departement`, `surface`) VALUES ( $g, '$i', '$j',$k);") or die('Erre');
echo"dd";
mysql_query("INSERT INTO `traitement_medico`(`ID_trai`, `libelle`, `type_trait`, `degres_complexiter`) VALUES ( $b, '$l', '$m', $n);") or die('Erre');
echo"dd";
echo "<br/>";

echo "<br/>";
if(!$d) echo"erreur";
else header("location:services.html");
}
else echo"erreur";
?>