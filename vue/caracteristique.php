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
    <li class="mv-item"><a href="#">test1</a></li>
    <li class="mv-item"><a href="#">test2</a></li>
    <li class="mv-item"><a href="#">test3</a></li>
    <li class="mv-item"><a href="#">test4</a></li>
</ul>
</div>

<div id="caracteristics">
	<h3> Veuillez saisir les caractéistiques du nouvel hébergement </h3>
    <br>
	<form action="ajout_caracteristique.php" method="GET"> 
    <!--Méthode GET pour tester les valeurs entrées--> 
		<p>Nom de l'hébergement :  <input type="text" name="nom_hebergement" /></p>
        <p>Numéros de téléphone :  <input type="text" name="telephone" /></p>
        <p>Capacité (nombre de personne) : <input type="text" name="capacite" /></p>
        <p>Nombre d'étoile : <input type="text" name="etoile" /></p>
        <p>RIB : <input type="text" name="RIB" /></p>
        <br>
        <h3> Adresse de l'hébergement </h3>
        <p>Numéro de rue : <input type="text" name="numero_rue" /></p>
        <p>Nom de la rue : <input type="text" name="nom_rue" /></p>
        <p>Code postal : <input type="text" name="CP" /></p>
        <p>Ville : <input type="text" name="ville" /></p>
        <br>
        <h3> Contact de l'hébergement </h3>
        <p>Nom du contact : <input type="text" name="nom_contact" /></p>
        <p>Prénom du contact : <input type="text" name="prenom_contact" /></p>
        <p>Adresse mail du contact : <input type="text" name="mail_contact" /></p>
        <p>Téléphone du contact : <input type="text" name="telephone du contact" /></p>
        <p><input type="submit" value="Envoyer"></p>
     </form>


</div>

</body>
</html>