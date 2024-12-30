<?php
if(isset($_POST['Code_cons']))  
{
$a=$_POST['Code_cons'];
$b=$_POST['type_cons'];
$c=$_POST['date_cons'];
echo "<br/>";
@mysql_connect("localhost","root","");
@mysql_select_db("hopital");
$d=mysql_query("INSERT INTO `consultation`(`Code_cons`, `type_cons`, `date_cons`) VALUES ($a,'$b','$c')") or die('Erre');
echo "<br/>";
echo "<br/>";
if(!$d) echo"erreur";
else header("location:recherchetraitement.html");
}
else echo"erreur";
?>