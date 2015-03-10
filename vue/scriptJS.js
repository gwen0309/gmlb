
$(document).ready(function() {
    $('#onglet #lien_onglet a').on('click', function(onglet)  {
        var lien = $(this).attr('href');
        $('#onglet ' + lien).show().siblings().hide();
   
        $(this).parent('li').addClass('active').siblings().removeClass('active');
		onglet.preventDefault();
    });
});


    $(document).ready(function() {
     
    $("#owl-demo").owlCarousel({
     
	 autoPlay:3500,
    navigation : true, // Show next and prev buttons
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem:true

     
    });
     
    });



//Liste produits 1° niveau
function showpage(pageactive){

	document.getElementById('PageAccueil').className = "hidden";
	document.getElementById('fichepdt1').className = "hidden";
	document.getElementById('fichepdt2').className = "hidden";
	document.getElementById('fichepdt3').className = "hidden";
	document.getElementById('fichepdt4').className = "hidden";
	document.getElementById('fichepdt5').className = "hidden";
	document.getElementById('fichepdt6').className = "hidden";
	document.getElementById('fichepdt7').className = "hidden";
	document.getElementById('fichepdt8').className = "hidden";
	document.getElementById('fichepdt9').className = "hidden";
	document.getElementById('fichepdt10').className = "hidden";
	document.getElementById('fichepdt11').className = "hidden";
	document.getElementById('fichepdt12').className = "hidden";
	document.getElementById('fichepdt13').className = "hidden";
	document.getElementById('fichepdt14').className = "hidden";
	document.getElementById('fichepdt15').className = "hidden";
	document.getElementById('fichepdt16').className = "hidden";
	document.getElementById('fichepdt17').className = "hidden";
	document.getElementById('fichepdt18').className = "hidden";
	document.getElementById('fichepdt19').className = "hidden";
	document.getElementById('fichepdt20').className = "hidden";
	document.getElementById('fichepdt21').className = "hidden";
	document.getElementById('fichepdt22').className = "hidden";
	document.getElementById('fichepdt23').className = "hidden";
	document.getElementById('fichepdt24').className = "hidden";
	
	document.getElementById('BFR').className = "hidden";
	document.getElementById('Bmonde').className = "hidden";
	
	document.getElementById('BlondesFR').className = "hidden";
	document.getElementById('BrunesFR').className = "hidden";
	document.getElementById('AmbresFR').className = "hidden";
	
	document.getElementById('BGer').className = "hidden";
	document.getElementById('BBel').className = "hidden";
	document.getElementById('Bautres').className = "hidden";	
	
	document.getElementById('Divers').className = "hidden";
	document.getElementById('Acces').className = "hidden";
	document.getElementById('Cadeau').className = "hidden";
	
	document.getElementById('contact').className = "hidden";
	
	document.getElementById('panierpdt').className = "hidden";
	document.getElementById('Paiement').className = "hidden";
	
	
	pageactive.className = "shown";
	
	//Recupere la class (hiddon ou shown) de la page paiement
	var classe = $('#Paiement').attr('class');  
	//Quand la page paiement devient hidden, on vide le tableau
	if(classe=='hidden')
	{document.getElementById('tableau_paiement').innerHTML= " ";}
	
	};

function montrer (box) {
var a = document.getElementById('checkbox').checked;
	if(a == true){
	box.className="shown";
	}
	else{ 
	box.className="hidden";
	}
}



//Scripte sticky nav
$(window).scroll(function (event) {
 
    if ($(this).scrollTop() >= 140) {
      $('nav').addClass('fixed');
    } else {
      $('nav').removeClass('fixed');
    }
  });
  

function Paiement(tableau, pageactive){
	var total = document.getElementById('total').innerHTML;

	if(total == 0){
	alert('Panier vide');
	}
	else{
	showpage(pageactive);
		
		if(total >= 100){
		var remise = total/10;
		total=total*0.9;
		
		}
		else{
		remise = 0;
		}
	
	var tr = document.createElement('tr');
	tableau.appendChild(tr);
	
	var td = document.createElement('td');
	tr.appendChild(td);
	
	var tdText = document.createTextNode(total+' €');
	td.appendChild(tdText);
	
	var td = document.createElement('td');
	tr.appendChild(td);
	
	var tdText = document.createTextNode(remise+' €');
	td.appendChild(tdText);
	}
}
  
function Panier(tableau,pageactive){
	var total = document.getElementById('total').innerHTML;
	if(total == 0){
	showpage(pageactive);
	supprimerPanier(tableau);
	
	}
	else{
	showpage(pageactive);
	document.getElementById('modepaie').className = "shown";
	document.getElementById('modelivr').className = "shown";
	}

}


function ajouterPanier(tableau, imgProduit, nomProduit, prixProduit, qtProduit){

	alert('Vous ajoutez '+qtProduit+' '+nomProduit+' à '+prixProduit+" €  l'unité");
	
	document.getElementById('tableau_panier1').className = "shown";
	document.getElementById('tableau_panier2').className = "hidden";
	
	var tr = document.createElement('tr');
	tableau.appendChild(tr);
	
	var td = document.createElement('td');
	tr.appendChild(td);
	var tdImg = document.createElement('img');
	tdImg.src = imgProduit;
	td.appendChild(tdImg);
	
	var td = document.createElement('td');
	tr.appendChild(td);
	var tdText = document.createTextNode(nomProduit);
	td.appendChild(tdText);
	
	td = document.createElement('td');
	tr.appendChild(td);
	tdText = document.createTextNode('x '+qtProduit);
	td.appendChild(tdText);
		
	td = document.createElement('td');
	tr.appendChild(td);
	tdText = document.createTextNode(prixProduit+" € l'unité");
	td.appendChild(tdText);
	
	var stot = parseFloat(prixProduit)*parseInt(qtProduit);
	
	td = document.createElement('td');
	tr.appendChild(td);
	tdText = document.createTextNode(stot+" €");
	td.appendChild(tdText);

	calculerSomme(prixProduit,qtProduit);
};

function calculerSomme(prix, qt){
	
	var tot = parseFloat(document.getElementById('total').innerHTML);
	var prixtot = parseFloat(prix)*parseFloat(qt);
	tot=tot+prixtot;
	tot = tot.toFixed(3);
	
	document.getElementById('total').innerHTML=tot;
	
	var a = tot/6;
	var mttva = a.toFixed(3); 
	
	document.getElementById('tva').innerHTML = mttva;
	
	var b = mttva*5;
	var mtht = b.toFixed(3);
	
	document.getElementById('ht').innerHTML = mtht;
	
	};
	
function supprimerPanier(tableau){
	document.getElementById('tableau_panier').innerHTML= " ";
	document.getElementById('total').innerHTML=0;
	document.getElementById('tableau_panier1').className = "hidden";
	document.getElementById('tableau_panier2').className = "shown";
	document.getElementById('modepaie').className = "hidden";
	document.getElementById('modelivr').className = "hidden";

	
	
};
function compte(){
	document.getElementById('connect').className="hidden";
	document.getElementById('form1').className="shown";
}

function connecter(){
		
	var c = document.getElementById('moyenpaie').checked;
	var d = document.getElementById('moyenpaie2').checked;
	var e = document.getElementById('moyenpaie3').checked;
	
	if(c == true)
	{
	document.getElementById('cb').className="shown";
	}
	
		if(d == true)
	{
	document.getElementById('cheq').className="shown";
	}
	
		if(e == true)
	{
	document.getElementById('espece').className="shown";
	}

}

function testcompte(nomus,psd){
	if(nomus== ""){alert('tous les champs ne sont pas remplis');}
			else{
				if(psd== ""){alert('tous les champs ne sont pas remplis');}
				else{
					document.getElementById('form1').className="hidden";
					document.getElementById('form2').className="hidden";
					document.getElementById('connect').className="hidden";
					connecter();
					}
		}
}

function fin(){
	document.getElementById('wrapper').className="hide";
	document.write("<H1>Achat terminé,<br/> Vous allez être rédirigé vers la page d'accueil dans un instant !</H1>");
	setTimeout("location.reload()",2500);
}

function payer(tableau,lien1,lien2,age,email,nom,prenom,adresse,adresse2,cp, ville,pays,nom2,prenom2,adresse3,adresse23,cp2,ville2,pays2){

	var a = document.getElementById('checkbox').checked;

	if(age <18)
	//reinitialisation de la page si moins de 18 ans
	{ alert('Vous devez avoir 18 ans et plus pour acheter sur notre site');
	location.reload();
	}
	//teste si tous les champs obligatoire sont remplis
	else{
	
			if(email== ""){alert('tous les champs ne sont pas remplis');}
			else{
				if(nom== ""){alert('tous les champs ne sont pas remplis');}
				else{
					if(prenom== ""){alert('tous les champs ne sont pas remplis');}
					else{
						if(adresse== ""){alert('tous les champs ne sont pas remplis');}
						else{
							if(cp== ""){alert('tous les champs ne sont pas remplis');}
							else{
								if(ville== ""){alert('tous les champs ne sont pas remplis');}
								else{
									if(pays== ""){alert('tous les champs ne sont pas remplis');}
									else{		
										if(a==true){//si case cochée
											if(nom2== ""){alert('tous les champs ne sont pas remplis');}
											else{
												if(prenom2== ""){alert('tous les champs ne sont pas remplis');}
												else{
													if(adresse2== ""){alert('tous les champs ne sont pas remplis');}
													else{
														if(cp2== ""){alert('tous les champs ne sont pas remplis');}
														else{
															if(ville2== ""){alert('tous les champs ne sont pas remplis');}
															else{
																if(pays2== ""){alert('tous les champs ne sont pas remplis');}
																else{
																lien1.className = "hidden";
																lien2.className = "hidden";
																connecter();

																}
															}
														}
													}
												}
											}
										}
										else{
										
										lien1.className = "hidden";
																lien2.className = "hidden";
																connecter();				
								
										}
									}
								}
							}
						}
					}
				}
			}
		}//fin age>18
};

		
