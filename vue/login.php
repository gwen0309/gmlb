<!DOCTYPE html>
<html lang="fr">  
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles.css" media="all">	
    </head>  
    
    <body>
<<<<<<< HEAD
    
        <?php include("entete.php");?>
                    
=======
        <div id="connexion">
            <input id="boutonConnexion" class="btnConnexion" type="button" value="Connexion" onClick="document.location='login.php'" alt="Connexion">
        </div>
        
        <header>
            <div id="logoCannes">
                <a href="index.php" > <img src="images/logofestival.png" alt="logoCannes"> </a>
            </div>
            
            <div id="banniere">
                <img src="images/bannerblanc.png" alt="Banner" />
            </div>
        </header>
>>>>>>> origin/master
        
            <div id="login">
                <div id="EspaceConnexion"> 
                    <h1> Connexion </h1>
                    <form method="post">
                        <label> Adresse email : </label>
                        <input type ="mail" placeholder="Saisir votre mail" />  <br/>
                        
                        <label> Mot de passe : </label>
                        <input type ="password" placeholder="Saisir votre mot de passe" /> <br/>
                    
                        <input type="submit" value="Connexion" name="validationConnexion"/>
                    </form>
                
                </div>
                
                <div id="EspaceInscription"> 
                    <h1> Demande de partenariat</h1>
                    <p>Si vous souhaitez faire partie de nos partenaires Hébergement, merci de remplir ce formulaire. </p>
                    <p>Vous serez recontactés prochainement par l'organisation.</p> </br>
                        
                    <label>Nom de l'hébergement : </label> <input type="text" name="nom_hebergement" required/><br/>

                    <label>Numéro de téléphone :  </label><input type="tel" name="telephone" required/><br/>
                    <label>Type d'hébergement : </label><select name="type" required > 
                      <option value="">-Choisir un type d'hébergement-</option>
                      <option value="hotel">Hôtel</option>
                      <option value="chambre">Chambre d'hôte</option>
                      <option value="appartement">Appartement</option>
                      <option value="villa">Villa</option>
                    </select>
                    <br/><br/>
                    
                    <h2> Adresse de l'hébergement </h2>
                    <label>Numéro de rue : </label><input type="number" name="numero_rue" required/><br/>
                    <label>Nom de la rue : </label><input type="text" name="nom_rue" required/><br/>
                    <label>Code postal : </label><input type="number" name="CP" required/><br/>
                    <label>Ville : </label><input type="text" name="ville" required/><br/>
                    <br/>

                    <h2> Contact de l'hébergement </h2>
                    <label>Nom du contact : </label><input type="text" name="nom_contact" required/><br/>
                    <label>Prénom du contact : </label><input type="text" name="prenom_contact" required/><br/>
                    <label>Adresse mail du contact : </label><input type="email" name="mail_contact" required/><br/>
                    <label>Téléphone du contact :</label> <input type="tel" name="telephone_contact" required/><br/>
                    
                    <input type="submit" value="Valider votre demande" name="ValidationDemande"/>
                </div> 
        <?php include("footer.php");?>
              
    </body>
    
</html>

<?php

?>