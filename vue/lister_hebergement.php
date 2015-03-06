<!DOCTYPE html>
<html lang="fr"> 
<head>
<meta charset="utf-8">	       
<link rel="stylesheet" href="styles.css" type="text/css" />	
<title> Lister Hébergement</title>	
</head>  

<body>

<header>
            <div id="logoCannes">
                <a href="index.php" > <img src="images/logofestival.png" alt="logoCannes"> </a>
            </div>
            
            <div id="banniere">
                <img src="images/banner.png" alt="Banner" />
            </div>
</header>

<nav> 
	<ul id="menu">
    	<li> <a href="#">Gestion des hébergements</a></li>
        <li> <a href="#"></a></li>
        <li> <a href="#"></a></li>
        <li> <a href="#"></a></li>
    </ul>
</nav>

<div>
<ul class="menu-vertical">
    <li class="mv-item"><a href="ajout_caracteristique.html">Ajouter</a></li>
    <li class="mv-item"><a href="#">Modifier</a></li>
    <li class="mv-item"><a href="lister_hebergement.php">Lister</a></li>
    <li class="mv-item"><a href="#">test4</a></li>
</ul>
</div>

<div id="caracteristics">
<?php
$host = "localhost";  
$user = "root";
$bdd = "filrouge";
$password  = "";
// Connexion au serveur
$con = mysqli_connect($host, $user, $password);
mysqli_select_db($con, $bdd) or die("erreur lors de la selection de la bd");
// Creation et envoi de la requete
$query = "SELECT ID_HEBERGEMENT, NOM_HEBERGEMENT, TEL_HEBERGEMENT, CAPACITE_HEBERGEMENT, NOMBRE_ETOILES FROM HEBERGEMENT ORDER BY ID_HEBERGEMENT";
$query2 = "SELECT NOM_CONTACT, PRENOM_CONTACT, MAIL_CONTACT, TEL_CONTACT FROM HEBERGEMENT WHERE ID_HEBERGEMENT LIKE '".$ID_H."%'";
//Test de la requète
?>

<table>
		<tr>
        <th>Nom de l'hébergement</th>
        <th>Numéro de téléphone</th>
        <th>Capacité</th>
        <th>Nombre d'étoile (*)</th>
        <th>Services proposés</th>
        <th>Information Contact</th>
        </tr>
<?php
if ($result=mysqli_query($con,$query))
  {
  while ($row=mysqli_fetch_row($result))
    {
		$ID_H = $row[0]; 
		$Nom_heberg = $row[1];
		$Tel_heberg = $row[2];
		$Capa_heberg = $row[3];
		$etoile_heberg = $row[4];
		echo "
		<tr>
		<td> $Nom_heberg</td>
		<td><a> $Tel_heberg</a></td>
		<td><a> $Capa_heberg</a></td>
		<td><a> $etoile_heberg</a></td>
		<form action="."services.php"." method="."POST"."> 
		<td><a type="."submit"." value="."Voir"."></td>
		</form>
		<form action="."contact.php"." method="."POST".">
		<td><a href="."#".">Voir</a></td>
		</form>
		</tr>
		";
    }
	mysqli_free_result($result);
  }
else
	{
		printf("Erreur lors de l'execution de la requète");
	}
// Free result set
mysqli_close($con);
?> 
</table>

</div>

</body>
</html>