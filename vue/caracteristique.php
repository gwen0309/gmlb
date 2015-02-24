<!DOCTYPE html>
<html lang="fr"> 
<head>
<meta charset="utf-8">	       
<link rel="stylesheet" href="styles.css" type="text/css" />	
<title> Saisi Caractéristiques Hébergement</title>	
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

<div id="caracteristics">
	<h3> Veuillez saisir les caractéistiques du nouvel hébergement </h3>
    <br>
	<form action="Impot.php" method="GET"> /*Méthode GET pour tester les valeurs entrées */
		<p>Nom de l'hébergement : <input type="text" name="Nom_Hebergement" /></p>
        <p>Numéros de téléphone : <input type="text" name="Telephone" /></p>
        <p>Capacité (nombre de personne) : <input type="text" name="Capacite" /></p>
        <p>Nombre d'étoile : <input type="text" name="Etoile" /></p>
        <p>RIB : <input type="text" name="RIB" /></p>
        <br>
        <h3> Adresse de l'hébergement </h3>
        <p>Numéro de rue : <input type="text" name="Numero_rue" /></p>
        <p>Nom de la rue : <input type="text" name="Nom_rue" /></p>
        <p>Code postal : <input type="text" name="CP" /></p>
        <p>Ville : <input type="text" name="Ville" /></p>
        <br>
        <h3> Contact de l'hébergement </h3>
        <p>Nom du contact : <input type="text" name="Nom_contact" /></p>
        <p>Prénom du contact : <input type="text" name="Prenom_contact" /></p>
        <p>Adresse mail du contact : <input type="text" name="Mail_contact" /></p>
        <p>Téléphone du contact : <input type="text" name="Telephone du contact" /></p>
        <p><input type="submit" value="Envoyer"></p>
     </form>


</div>

</body>
</html>