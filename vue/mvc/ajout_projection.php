<!DOCTYPE html>
<html lang="fr"> 
<head>
<meta charset="utf-8">	       
<title> Saisi Projection</title>	
</head>  

<body>

<header>

</header>

<?php 
$host = "localhost";  
$user = "root";
$bdd = "cannes";
$password  = "";

mysql_connect($host, $user,$password) or die("erreur de connexion au serveur");
mysql_select_db($bdd) or die("erreur de connexion a la base de donnees");
  
$querydate= "select NOM_FILM, TIME(DATE_DEBUT_PROJECTION), TIME(DATE_FIN_PROJECTION), DATE(DATE_DEBUT_PROJECTION) FROM projeter p INNER JOIN films f WHERE f.ID_FILM = p.ID_FILM ORDER BY NOM_FILM";
$result = mysql_query($querydate);

if($result === FALSE) { 
    die(mysql_error()); 
}

$queryfilms = "SELECT NOM_FILM FROM films";
$querysalle = "SELECT NOM_SALLE FROM salle";

$resultfilms = mysql_query($queryfilms);
$resultsalles = mysql_query($querysalle);

$p = 0;
$z=0;

while($array = mysql_fetch_array($resultfilms)){
$Nomf[$p] = $array['NOM_FILM'];
$p++;
}

while($array2 = mysql_fetch_array($resultsalles)){
$Salle[$z] = $array2['NOM_SALLE'];
$z++;
}

echo "<form method='post' action='planning.php'>
<select name='film' required >";
for($o =0; $o< $p ;$o++){
         echo "<option value='$Nomf[$o]'>$Nomf[$o]</option>";
    }	
echo "</select><select name='salle' required >";
for($e =0; $e< $z ;$e++){
         echo "<option value='$Salle[$e]'>$Salle[$e]</option>";
    }	
echo "</select>
<input type='submit' value='Ajouter la projection'>
</form>";

?>
</body>
</html>