<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
</body>
</html><!DOCTYPE html>
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

//Récupération de la variable
//include('lister_hebergement.php');
$ID=$_GET['ID_H'];
// Connexion au serveur
$con = mysqli_connect($host, $user, $password);
mysqli_select_db($con, $bdd) or die("erreur lors de la selection de la bd");
// Creation et envoi de la requete
$query = "SELECT NOM_CONTACT, PRENOM_CONTACT, MAIL_CONTACT, TEL_CONTACT FROM HEBERGEMENT WHERE ID_HEBERGEMENT LIKE '".$ID."'";
//Test de la requète
?>
<table>
		<tr>
        <th>Nom du contact</th>
        <th>Prénom du contact </th>
        <th>Mail du contact</th>
        <th>Téléphone du contact</th>
        </tr>
<?php
if ($result=mysqli_query($con,$query))
  {
  while ($row=mysqli_fetch_row($result))
    {
		$Nom_contact = $row[0]; 
		$Prenom_contact = $row[1];
		$Tel_contact = $row[2];
		$Mail_contact = $row[3];
		echo "
		<tr>
		<td>$Nom_contact</td>
		<td><a>$Prenom_contact</a></td>
		<td><a>$Tel_contact</a></td>
		<td><a>$Mail_contact</a></td>
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