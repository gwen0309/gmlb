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
$bdd = "nom_base";
$password  = "passwd";
// Connexion au serveur
$con = mysqli_connect($host, $user, $password);
mysqli_select_db($con, $bdd) or die("erreur lors de la selection de la bd");


$nb=$_POST['nom_hebergement'];
$tel=$_POST['telephone'];
$capa=$_POST['capacite'];
$etoile=$_POST['etoile'];
$rib=$_POST['RIB'];
$num_rue=$_POST['numero_rue'];
$cp=$_POST['CP'];
$ville=$_POST['ville'];
$nom_contact=$_POST['nom_contact'];
$mail=$_POST['mail_contact'];
$tel_contact=$_POST['telephone_contact'];

// Creation et envoi de la requete
$query = "INSERT INTO ...";
mysqli_query ($con, $query) or die ('Erreur SQL !'.$query.'<br />'.mysqli_error());

//On ferme la connexion à la base de donnée
mysqli_close($con);
 
?>

</body>
</html>