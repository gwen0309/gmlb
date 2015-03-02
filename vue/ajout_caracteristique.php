<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ajout des caractéristiques</title>
</head>

<body>

<?php 

// Déclaration des paramètres de connexion
$host = "localhost";  
$user = "root";
$bdd = "filrouge";
$password  = "";
// Connexion au serveur
$con = mysqli_connect($host, $user, $password);
mysqli_select_db($con, $bdd) or die("erreur lors de la selection de la bd");


$nom=$_POST['nom_hebergement'];
$tel=$_POST['telephone'];
$capa=$_POST['capacite'];
$etoile=$_POST['etoile'];
$rib=$_POST['RIB'];
$num_rue=$_POST['numero_rue'];
$nom_rue=$_POST['nom_rue']; 
$cp=$_POST['CP'];
$ville=$_POST['ville'];
$prenom_contact=$_POST['prenom_contact']; 
$nom_contact=$_POST['nom_contact'];
$mail=$_POST['mail_contact'];
$tel_contact=$_POST['telephone_contact'];
$type_heberg=$_POST['type'];

if (empty($nom)) 
{
	echo "Vous n'avez pas saisi le nom de l'hébergement !<br/>"; 
	exit;
}
else if (empty($tel))
{
	echo "Vous n'avez pas saisi le numéro de téléphone !<br/>"; 
	exit;
}
else if (!is_numeric($capa))
{
	echo "Vous n'avez pas saisi la capacité !<br/>"; 
	exit;
}
else if (!is_numeric($etoile))
{
	echo "Vous n'avez pas saisi le nombre d'étoile de l'hébergement !<br/>"; 
	exit;
}
else if (empty($rib))
{
	echo "Vous n'avez pas saisi le RIB !<br/>"; 
	exit;
}
else if (!is_numeric($num_rue))
{
	echo "Vous n'avez pas saisi le numéro de la rue !<br/>"; 
	exit;
}
else if (empty($nom_rue))
{
	echo "Vous n'avez pas saisi le no de la rue !<br/>"; 
	exit;
}
else if (!is_numeric($cp))
{
	echo "Vous n'avez pas saisi le code postal !<br/>"; 
	exit;
}
else if (empty($ville))
{
	echo "Vous n'avez pas saisi la ville !<br/>"; 
	exit;
}
else if (empty($nom_contact))
{
	echo "Vous n'avez pas saisi le nomm du contact ! <br/>"; 
	exit;
}
else if (empty($prenom_contact))
{
	echo "Vous n'avez pas saisi le prénom du contact ! <br/>"; 
	exit;
}
else if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$",$mail))
{
	echo "L'adresse email est invalide !<br/>"; 
	exit;
}
else if (!is_numeric($tel_contact))
{
	echo "Vous n'avez pas saisi le numéro de téléphone du contact !<br/>"; 
	exit;
}
else if (empty($type_heberg))
{
	echo "Vous n'avez pas saisi le type de l'hébergement ! <br/>"; 
	exit;
}
// Creation et envoi de la requete
$query = "INSERT INTO HEBERGEMENT (NOM_HEBERGEMENT, TEL_HEBERGEMENT, CAPACITE_HEBERGEMENT, NOMBRE_ETOILES, RIB, NUMERO_RUE_HEBERGEMENT, RUE_HEBERGEMENT, CODE_POSTAL_HEBERGEMENT, VILLE_HEBERGEMENT, NOM_CONTACT, PRENOM_CONTACT, MAIL_CONTACT, TEL_CONTACT, TYPE_HEBERGEMENT) VALUES('$nom', '$tel', '$capa', '$etoile', '$rib', '$num_rue', '$nom_rue', '$cp', '$ville', '$nom_contact','$prenom_contact', '$mail', '$tel_contact', '$type_heberg');";
mysqli_query ($con, $query) or die ('Erreur SQL !'.$query.'<br />'.mysqli_error($query));



//On ferme la connexion à la base de donnée
mysqli_close($con);
echo "alert(Ajout réussi !);";
?>

</body>
</html>