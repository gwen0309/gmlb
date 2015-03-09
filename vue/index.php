<!DOCTYPE html>
<html lang="fr">  
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles.css" media="all">
        <link rel="stylesheet" href="owl.theme.css" type="text/css" />	 
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
        <script src="owl.carousel.js"></script>  	
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
                    <li> <a href="index_hébergement.html">A propos</a></li>
                    <li> <a href="#">Festival 2014 </a></li>
                    <li> <a href="#">Le quotidien</a></li>
                    <li> <a href="#">Archive </a></li>
                </ul>
            </nav>
            
            <div id="galerie"> 
                <div id="owl-demo" class="owl-carousel owl-theme" >								           
                      <div>									             
                        <a href= "https://www.facebook.com"><img src="images/promo1.jpg"/></a>          
                      </div>									           
                      <div >										             
                        <a href= "https://www.google.com"> <img  src="images/promo2.jpg"  /></a>          
                      </div>										           
                      <div >											             
                        <a href= "https://www.yahoo.com"><img src="images/promo3.jpg"  /></a>          
                      </div>							         
                </div>
            </div>
            
         <footer>
            <h2> Nous suivre ... </h2>
            <div id=socialnetwork> 
                <ul>
                    <li><a href="http://feeds2.feedburner.com/festival-cannes/rss_fr" target="_blank"><img src="images/rss.png" alt="Flux RSS"/></a></li>
                    <li><a href="http://feeds2.feedburner.com/festivalcannes/podcast_fr" target="_blank"><img src="images/podcast.png" alt="Podcast"/></a></li>
                    <li><a href="http://www.festival-cannes.com/fr/apps.html" target="_blank"><img src="images/appli.png" alt="Applications"/></a></li>
                    <li><a href="https://www.facebook.com/pages/Festival-de-Cannes-Page-Officielle/197710070249937" target="_blank"><img src="images/facebook.png" alt="Facebook"/></a></li>
                    <li><a href="https://twitter.com/FdC_officiel" target="_blank"><img src="images/twitter.png" alt="Twitter"/></a></li>
                </ul>
            </div>
        </footer> 
              
    </body>
    
</html>