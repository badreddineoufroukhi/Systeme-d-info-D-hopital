<!DOCTYPE html>
<html>
     <head>
        <title>badr</title>  
     		 
	 </head>
     <body>
	 
     <form name="form1" method="post" action="badrpage.php" >
<table>

<td>  <input type="email" name="email"></td></tr>

<td>  <input type="password" name="password"></td></tr>

<tr> <td>  <textarea name="publication"  ></textarea></td></tr>
 
 <td> 	   
	 <input type="submit" name="ENVOYER" value="ENVOYER" ></td></tr>
	</table> 
	</form>
	

<?php
@mysql_connect("localhost", "root", "");
@mysql_select_db("projet");
$reponse = @mysql_query("SELECT * FROM cmd "); 
echo"<table>";
echo"<tr>";
echo"<th>email</th>";
echo"<th>publication</th>";
echo"</tr>";
WHILE ($donnees = @mysql_fetch_array($reponse) )
{
?>
<tr>
<th><?php echo $donnees['email']; ?> </th>
<th><?php echo $donnees['publication']; ?> </th>
<tr>
<?php
}
@mysql_close(); // Déconnexion de MySQL
?>
</table>
	</body>
	</html>