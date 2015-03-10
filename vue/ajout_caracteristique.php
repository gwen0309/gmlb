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

$nom=$_GET['nom_hebergement'];
$tel=$_GET['telephone'];
$capa=$_GET['capacite'];
$etoile=$_GET['etoile'];
$rib=$_GET['RIB'];
$num_rue=$_GET['numero_rue'];
$nom_rue=$_GET['nom_rue']; 
$cp=$_GET['CP'];
$ville=$_GET['ville'];
$prenom_contact=$_GET['prenom_contact']; 
$nom_contact=$_GET['nom_contact'];
$mail=$_GET['mail_contact'];
$tel_contact=$_GET['telephone_contact'];
$type_heberg=$_GET['type'];
$service_heberg=$_GET['service']; 

// Test champs formulaire
if (empty($nom)) 
{
	echo'<script>alert("Saisissez un hébergement !"); document.location.href="caracteristique.php";</script>';
	exit;
}
else if (empty($tel))
{
	echo'<script>alert("Saisissez un n° de téléphone !"); document.location.href="caracteristique.php";</script>';
	exit;
}
else if (!is_numeric($capa))
{
	echo'<script>alert("Saisissez une capacité !"); document.location.href="caracteristique.php";</script>';
	exit;
}
else if (!is_numeric($etoile))
{
	echo'<script>alert("Saisissez un nombre étoile !"); document.location.href="caracteristique.php";</script>'; 
	exit;
}
else if (empty($rib))
{
	echo'<script>alert("Saisissez un RIB !"); document.location.href="caracteristique.php";</script>'; 
	exit;
}
else if (!is_numeric($num_rue))
{
	echo'<script>alert("Saisissez un numéro de rue !"); document.location.href="caracteristique.php";</script>'; 
	exit;
}
else if (empty($nom_rue))
{
	echo'<script>alert("Saisissez un nom de rue !"); document.location.href="caracteristique.php";</script>';
	exit;
}
else if (!is_numeric($cp))
{
	echo'<script>alert("Saisissez un Code Postal !"); document.location.href="caracteristique.php";</script>'; 
	exit;
}
else if (empty($ville))
{
	echo'<script>alert("Saisissez une ville !"); document.location.href="caracteristique.php";</script>';
	exit;
}
else if (empty($nom_contact))
{
	echo'<script>alert("Saisissez le nom du contact !"); document.location.href="caracteristique.php";</script>'; 
	exit;
}
else if (empty($prenom_contact))
{
	echo'<script>alert("Saisissez le prénom du contact !"); document.location.href="caracteristique.php";</script>'; 
	exit;
}
else if (empty($mail))
{
	echo'<script>alert("Saisissez un email valide !"); document.location.href="caracteristique.php";</script>'; 
	exit;
}
else if (!is_numeric($tel_contact))
{
	echo'<script>alert("Saisissez le numéro de téléphone du contact !"); document.location.href="caracteristique.php";</script>';
	exit;
}
else if (empty($type_heberg))
{
	echo'<script>alert("Saisissez un type hébergement !"); document.location.href="caracteristique.php";</script>';
	exit;
}
/*else if(empty($service_heberg))
{
   echo "Aucune checkbox n'a été cochée";
   exit;
} */

// Creation et envoi de la requete
$query = "INSERT INTO HEBERGEMENT (NOM_HEBERGEMENT, TEL_HEBERGEMENT, CAPACITE_HEBERGEMENT, NOMBRE_ETOILES, RIB, NUMERO_RUE_HEBERGEMENT, RUE_HEBERGEMENT, CODE_POSTAL_HEBERGEMENT, VILLE_HEBERGEMENT, NOM_CONTACT, PRENOM_CONTACT, MAIL_CONTACT, TEL_CONTACT, TYPE_HEBERGEMENT)
VALUES('$nom', '$tel', '$capa', '$etoile', '$rib', '$num_rue', '$nom_rue', '$cp', '$ville', '$nom_contact','$prenom_contact', '$mail', '$tel_contact', '$type_heberg');"; 
mysqli_query ($con, $query) or die ('Erreur SQL !'.$query.'<br />'.mysqli_error($query));

$query2= "SELECT MAX(ID_HEBERGEMENT) FROM HEBERGEMENT;";
mysqli_query ($con, $query2)or die ('Erreur SQL !'.$query2.'<br />'.mysqli_error($query2));
if ($result=mysqli_query($con,$query2))
  {
  while ($row=mysqli_fetch_row($result))
    {
		$ID_H = $row[0];
	}
  }
if (isset($service_heberg))
{
foreach ($service_heberg as $key => $value)
{
	$query3="INSERT INTO PROPOSER (ID_HEBERGEMENT, ID_SERVICE) VALUES ('$ID_H', '$value');";
	mysqli_query ($con, $query3)or die ('Erreur SQL !'.$query3.'<br />'.mysqli_error($query3));
	echo $value;
}
}
//select pour recup id hebergement 
// recupérer id service et insérer dans proposer 
//insérer id hébergement dans proposer 


//On ferme la connexion à la base de donnée
mysqli_close($con);
echo'<script>
alert("Ajout Réussi !!");
document.location.href="caracteristique.php";
</script>';


?>

</body>
</html>