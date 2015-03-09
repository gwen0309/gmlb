<!DOCTYPE html>
<html lang="fr">  
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles.css" media="all">	
    </head>  
    
    <body>
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
        
            <nav> 
                <ul id="menu">
                    <li> <a href="#">A propos</a></li>
                    <li> <a href="#">Festival 2014 </a></li>
                    <li> <a href="#">Le quotidien</a></li>
                    <li> <a href="#">Archive </a></li>
                </ul>
            </nav>
            
            <div id="login">
                <div id="EspaceConnexion"> 
                    <h1> Connexion </h1>
                    <form method="post">
                        <label> Adresse email : </label>
                        <input type ="mail" placeholder="Saisir votre mail" />  <br/>
                        
                        <label> Mot de passe : </label>
                        <input type ="password" placeholder="Saisir votre mot de passe" /> <br/>
                    
                        <input type="submit" value="Connexion" name="validationConnexion">
                    </form>
                
                </div>
                
                <div id="EspaceInscription"> 
                    <h1> Inscription </h1>
                    
                        <label> Adresse email : </label>
                        <input type ="mail" placeholder="Saisir votre mail" />
                        
                    
                </div>
            </div>
         <footer>
        
        </footer> 
              
    </body>
    
</html>

<?php

?>