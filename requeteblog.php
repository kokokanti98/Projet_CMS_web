<?php
//Connexion a la base de donnee
include('connexion.php');
		// Declaration variable
$file=filter_input(INPUT_POST, 'fichier', FILTER_SANITIZE_STRING);
$creer=filter_input(INPUT_POST, 'creer', FILTER_SANITIZE_NUMBER_INT);
$charger=filter_input(INPUT_POST, 'download', FILTER_SANITIZE_NUMBER_INT);


//Ici se commence les requetes du couleur


$form_navbar_couleur = array (
		'texte'=> array(
			'filter' => FILTER_SANITIZE_STRING),
		'fond'=> array(
			'filter' => FILTER_SANITIZE_STRING),
		'ajoutcouleurmenu'=> array(
			'filter' => FILTER_SANITIZE_NUMBER_INT),
		'supprcouleurmenu'=> array(
			'filter' => FILTER_SANITIZE_NUMBER_INT)
);
$form_body_couleur = array (
		'titrebody'=> array(
			'filter' => FILTER_SANITIZE_STRING),
		'fondtitrebody'=> array(
			'filter' => FILTER_SANITIZE_STRING),
		'textebody'=>array(
			'filter' => FILTER_SANITIZE_STRING),
		'fondtextebody'=>array(
			'filter' => FILTER_SANITIZE_STRING),
		'ajoutcouleurbody'=> array(
			'filter' => FILTER_SANITIZE_NUMBER_INT),
		'supprcouleurbody'=> array(
			'filter' => FILTER_SANITIZE_NUMBER_INT)
);
$form_footer_couleur = array (
		'textegfoot'=> array(
			'filter' => FILTER_SANITIZE_STRING),
		'fondgfoot'=> array(
			'filter' => FILTER_SANITIZE_STRING),
		'textetitre1'=>array(
			'filter' => FILTER_SANITIZE_STRING),
		'fondtitre1'=>array(
			'filter' => FILTER_SANITIZE_STRING),
		'fondtextetitre1'=>array(
			'filter' => FILTER_SANITIZE_STRING),
		'textetitre2'=>array(
			'filter' => FILTER_SANITIZE_STRING),
		'fondtitre2'=>array(
			'filter' => FILTER_SANITIZE_STRING),
		'fondtextetitre2'=>array(
			'filter' => FILTER_SANITIZE_STRING),
		'textetitre3'=>array(
			'filter' => FILTER_SANITIZE_STRING),
		'fondtitre3'=>array(
			'filter' => FILTER_SANITIZE_STRING),
		'fondtextetitre3'=>array(
			'filter' => FILTER_SANITIZE_STRING),
		'ajoutcouleurfooter'=> array(
			'filter' => FILTER_SANITIZE_NUMBER_INT),
		'supprcouleurfooter'=> array(
			'filter' => FILTER_SANITIZE_NUMBER_INT)
			
);
$form_navbar_couleur_sanitize = filter_input_array(INPUT_POST,$form_navbar_couleur);
$form_body_couleur_sanitize = filter_input_array(INPUT_POST,$form_body_couleur);
$form_footer_couleur_sanitize = filter_input_array(INPUT_POST,$form_footer_couleur);
		//Prend chaque valeur du tableau dans un variable;
extract($form_navbar_couleur_sanitize, EXTR_PREFIX_SAME, "wddx");
extract($form_body_couleur_sanitize, EXTR_PREFIX_SAME, "wddx");
extract($form_footer_couleur_sanitize, EXTR_PREFIX_SAME, "wddx");

if($ajoutcouleurmenu){

	$reponse = mysqli_query($bdd,'SELECT * FROM navcouleur');
	$donnees = mysqli_fetch_assoc($reponse);
		if(!$donnees['texte'] AND !$donnees['fond'])
		{
			$insert = mysqli_query($bdd,'INSERT INTO navcouleur(texte,fond) VALUES("'.$texte.'","'.$fond.'")');
				if($insert)  {    
					echo("L ajout à été correctement effectuée") ;  
					}  
					else  {    
					echo("L ajout à échouée") ;  
					}
				 header("Location:blog.php");
		}
		else
		{
			$update=mysqli_query($bdd,'UPDATE navcouleur SET texte="'.$texte.'",fond="'.$fond.'"');
			if($update)  {    
				echo("La modification à été correctement effectuée") ;  
				}  
				else  {    
				echo("La modification à échouée") ;  
				}
				 header("Location:blog.php");
		//Si la variable de la requête dans la BDD contient des informations, ta table est n'est pas vide
		}
	
}
else if($supprcouleurmenu){
		$supprimer = mysqli_query($bdd,'DELETE FROM navcouleur WHERE texte="'.$texte.'" AND fond="'.$fond.'"' );
	if($supprimer)  {    
		echo("La suppression à été correctement effectuée") ;  
		}  
		else  {    
		echo("La suppression à échouée") ;  
		}
		 header("Location:blog.php");
		
}
if($ajoutcouleurbody){
	$reponse = mysqli_query($bdd,'SELECT * FROM bodycouleur');
	$donnees = mysqli_fetch_assoc($reponse);
		if(!$donnees['titrebody'] AND !$donnees['fondtitrebody'] AND !$donnees['textebody'] AND !$donnees['fondtextebody'])
		{
			$insert = mysqli_query($bdd,'INSERT INTO bodycouleur(titrebody,fondtitrebody,textebody,fondtextebody) 
			VALUES("'.$titrebody.'","'.$fondtitrebody.'","'.$textebody.'","'.$fondtextebody.'")');
			if($insert)  {    
				echo("L ajout à été correctement effectuée") ;  
				}  
				else  {    
				echo("L ajout à échouée") ;  
				}
				 header("Location:blog.php");
		}
		else
		{
			$update=mysqli_query($bdd,'UPDATE bodycouleur SET titrebody="'.$titrebody.'",fondtitrebody="'.$fondtitrebody.'",textebody="'.$textebody.'",fondtextebody="'.$fondtextebody.'"');
			if($update)  {    
				echo("La modification à été correctement effectuée") ;  
				}  
				else  {    
				echo("La modification à échouée") ;  
				}
				 header("Location:blog.php");
		//Si la variable de la requête dans la BDD contient des informations, ta table est n'est pas vide
		}
}
else if($supprcouleurbody){
		$supprimer = mysqli_query($bdd,'DELETE FROM bodycouleur WHERE titrebody="'.$titrebody.'" AND fondtitrebody="'.$fondtitrebody.'"' );
	if($supprimer)  {    
		echo("La suppression à été correctement effectuée") ;  
		}  
		else  {    
		echo("La suppression à échouée") ;  
		}
		header("Location:blog.php");
		
}
if($ajoutcouleurfooter){
	$reponse = mysqli_query($bdd,'SELECT * FROM footcouleur');
	$donnees = mysqli_fetch_assoc($reponse);
	if(!$donnees['textegfoot'] AND !$donnees['fondgfoot'] AND !$donnees['textetitre1'] AND !$donnees['fondtitre1'] AND 
	!$donnees['fondtextetitre1'] AND !$donnees['textetitre2'] AND !$donnees['fondtitre2'] AND !$donnees['fondtextetitre2'] 
	AND !$donnees['textetitre3'] AND !$donnees['fondtitre3'] AND !$donnees['fondtextetitre3'])
		{
			$insert = mysqli_query($bdd,'INSERT INTO footcouleur(textegfoot,fondgfoot,textetitre1,fondtitre1,fondtextetitre1,textetitre2,fondtitre2,fondtextetitre2,textetitre3,fondtitre3,fondtextetitre3) 
			VALUES("'.$textegfoot.'","'.$fondgfoot.'","'.$textetitre1.'","'.$fondtitre1.'","'.$fondtextetitre1.'","'.$textetitre2.'","'.$fondtitre2.'","'.$fondtextetitre2.'","'.$textetitre3.'","'.$fondtitre3.'","'.$fondtextetitre3.'")');
			if($insert)  {    
				echo("L ajout à été correctement effectuée") ;  
				}  
				else  {    
				echo("L ajout à échouée") ;  
				$insert = mysqli_query($bdd,'INSERT INTO footcouleur(textegfoot,fondgfoot,textetitre1,fondtitre1,fondtextetitre1,textetitre2,fondtitre2,fondtextetitre2,textetitre3,fondtitre3,fondtextetitre3) 
			VALUES("'.$textegfoot.'","'.$fondgfoot.'","'.$textetitre1.'","'.$fondtitre1.'","'.$fondtextetitre1.'","'.$textetitre2.'","'.$fondtitre2.'","'.$fondtextetitre2.'","'.$textetitre3.'","'.$fondtitre3.'","'.$fondtextetitre3.'")');
				}
				 header("Location:blog.php");
		}
	else
		{
			$update=mysqli_query($bdd,'UPDATE footcouleur SET textegfoot="'.$textegfoot.'",fondgfoot="'.$fondgfoot.'",textetitre1="'.$textetitre1.'",
			fondtitre1="'.$fondtitre1.'",fondtextetitre1="'.$fondtextetitre1.'",textetitre2="'.$textetitre2.'",fondtitre2="'.$fondtitre2.'",fondtextetitre2="'.$fondtextetitre2.'",textetitre3="'.$textetitre3.'",fondtitre3="'.$fondtitre3.'",fondtextetitre3="'.$fondtextetitre3.'"');
			if($update)  {    
				echo("La modification à été correctement effectuée") ;  
				}  
				else  {    
				echo("La modification à échouée") ;  
				}
				 header("Location:blog.php");
		//Si la variable de la requête dans la BDD contient des informations, ta table est n'est pas vide
		}
		
}
else if($supprcouleurfooter){
		$supprimer = mysqli_query($bdd,'DELETE FROM footcouleur WHERE textegfoot="'.$textegfoot.'" AND fondgfoot="'.$fondgfoot.'"' );
	if($supprimer)  {    
		echo("La suppression à été correctement effectuée") ;  
		}  
		else  {    
		echo("La suppression à échouée") ;  
		}
		header("Location:blog.php");
		
}


//Ici se termine les requetes du couleur



$form_footer = array (
		'titrefooter'=> array(
			'filter' => FILTER_SANITIZE_STRING),
		'liste1'=> array(
			'filter' => FILTER_SANITIZE_STRING),
		'liste2'=>array(
			'filter' => FILTER_SANITIZE_STRING),
		'liste3'=>array(
			'filter' => FILTER_SANITIZE_STRING),
		'liste4'=>array(
			'filter' => FILTER_SANITIZE_STRING),
		'ajoutfooter'=> array(
			'filter' => FILTER_SANITIZE_NUMBER_INT),
		'supprfooter'=> array(
			'filter' => FILTER_SANITIZE_NUMBER_INT)
);
$form_body_section = array (
		'title'=> array(
			'filter' => FILTER_SANITIZE_STRING),
		'titrephoto'=> array(
			'filter' => FILTER_SANITIZE_STRING),
		'photo'=>array(
			'filter' => FILTER_SANITIZE_STRING),
		'elemphoto1'=>array(
			'filter' => FILTER_SANITIZE_STRING),
		'elemphoto2'=>array(
			'filter' => FILTER_SANITIZE_STRING),
		'elemphoto3'=> array(
			'filter' => FILTER_SANITIZE_STRING),
		'elemphoto4'=> array(
			'filter' => FILTER_SANITIZE_STRING),
		'elemphoto5'=> array(
			'filter' => FILTER_SANITIZE_STRING),
		'ajoutsection'=> array(
			'filter' => FILTER_SANITIZE_NUMBER_INT),
		'supprsection'=> array(
			'filter' => FILTER_SANITIZE_NUMBER_INT)
);
$form_navbar = array (
		'navbar_toggle'=> array(
			'filter' => FILTER_SANITIZE_STRING),
		'navelem1'=> array(
			'filter' => FILTER_SANITIZE_STRING),
		'navelem2'=>array(
			'filter' => FILTER_SANITIZE_STRING),
		'navelem3'=>array(
			'filter' => FILTER_SANITIZE_STRING),
		'nav2'=>array(
			'filter' => FILTER_SANITIZE_STRING),
		'logo'=> array(
			'filter' => FILTER_SANITIZE_STRING),
		'ajout'=> array(
			'filter' => FILTER_SANITIZE_NUMBER_INT),
		'suppr'=> array(
			'filter' => FILTER_SANITIZE_NUMBER_INT)
);

		//INPUT_POST des tableaux
$form_navbar_sanitize = filter_input_array(INPUT_POST,$form_navbar);
$form_body_section_sanitize = filter_input_array(INPUT_POST,$form_body_section);
$form_footer_sanitize = filter_input_array(INPUT_POST,$form_footer);
		//Prend chaque valeur du tableau dans un variable;
extract($form_navbar_sanitize, EXTR_PREFIX_SAME, "wddx");
extract($form_body_section_sanitize, EXTR_PREFIX_SAME, "wddx");
extract($form_footer_sanitize, EXTR_PREFIX_SAME, "wddx");
		

		//les requetes

// Creation du fichier

if(!empty($creer)){
	if(!empty($file)){
	$namefile=$file.'.php';
	$creafile=fopen($namefile,'w+');
		if(!$creafile){
			echo 'Erreur, fichier non creer';
		}
			echo 'Fichier creer<br>';
			$insert = mysqli_query($bdd,'INSERT INTO file(nomfichier) VALUES("'.$namefile.'")');
			fclose($creafile);
			header("Location:blog.php");
	}

	else{
		echo '<script language="JavaScript">
						alert("Fichier non creer reesayez");
						window.location.replace("blog.php");//joue le role de header(php) en java
						</script>';
	}
}

/*else if($charger){
	$reponse = mysqli_query($bdd,'SELECT * FROM file WHERE idfichier="'.$charger.'"');
	$donnees = mysqli_fetch_assoc($reponse);
	$namefile = $donnees['nomfichier'];
	echo '$namefile';
	
}*/

			//INSERTION des donnees du formulaire du menu
else if (!empty($ajout)){
	$reponse = mysqli_query($bdd,'SELECT * FROM html');
	$donnees = mysqli_fetch_assoc($reponse);
	if(!$donnees['navbar_toggle'] AND !$donnees['navelem1'] AND !$donnees['navelem2']AND !$donnees['navelem3']AND !$donnees['nav2']AND !$donnees['logo'])
		{
			$insert = mysqli_query($bdd,'INSERT INTO html(navbar_toggle,navelem1,navelem2,navelem3,nav2,logo) 
			VALUES("'.$navbar_toggle.'","'.$navelem1.'","'.$navelem2.'","'.$navelem3.'","'.$nav2.'","'.$logo.'")');
			if($insert)  {    
				echo("L ajout à été correctement effectuée") ;  
				}  
				else  {    
				echo("L ajout à échouée") ;  
				}
				 header("Location:blog.php");
		}
	else
		{
			$update=mysqli_query($bdd,'UPDATE html SET navbar_toggle="'.$navbar_toggle.'",navelem1="'.$navelem1.'",navelem2="'.$navelem2.'",navelem3="'.$navelem3.'",nav2="'.$nav2.'",logo="'.$logo.'"');
			if($update)  {    
				echo("La modification à été correctement effectuée") ;  
				}  
				else  {    
				echo("La modification à échouée") ;  
				}
				 header("Location:blog.php");
		//Si la variable de la requête dans la BDD contient des informations, ta table est n'est pas vide
	}
}
else if($suppr){
	$supprimer = mysqli_query($bdd,'DELETE FROM html WHERE navbar_toggle="'.$navbar_toggle.'"');
	if($supprimer)  {    
		echo("La suppression à été correctement effectuée") ;  
		}  
		else  {    
		echo("La suppression à échouée") ;  
		}
		 header("Location:blog.php");
		
	
}
else if($ajoutsection){
	$requete = 'INSERT INTO sectionbody(title,titrephoto,photo,elemphoto1,elemphoto2,elemphoto3,elemphoto4,elemphoto5) 
	VALUES("'.$title.'","'.$titrephoto.'","'.$photo.'","'.$elemphoto1.'","'.$elemphoto2.'","'.$elemphoto3.'","'.$elemphoto4.'","'.$elemphoto5.'")';
	$insert = mysqli_query($bdd,$requete);
	if($insert)  {    
		echo("L ajout à été correctement effectuée") ;  
		}  
		else  {    
		echo("L ajout à échouée") ;  
		}
		 header("Location:blog.php");
		
}
else if($supprsection){
	$supprimer = mysqli_query($bdd,'DELETE FROM sectionbody WHERE title="'.$title.'"');
	if($supprimer)  {    
		echo("La suppression à été correctement effectuée") ;  
		}  
		else  {    
		echo("La suppression à échouée") ;  
		}
		 header("Location:blog.php");
		
	
}

else if (!empty($ajoutfooter)){
	$reponse = mysqli_query($bdd,'SELECT * FROM `footer` LIMIT 2, 1');//parcours de la table car maximum 3 accordions
	$donnees = mysqli_fetch_assoc($reponse);
	if(!$donnees['titrefooter'] AND !$donnees['liste1'] AND !$donnees['liste2']AND !$donnees['liste3']AND !$donnees['liste4'])
		{
			$requete = 'INSERT INTO footer(titrefooter,liste1,liste2,liste3,liste4) 
			VALUES("'.$titrefooter.'","'.$liste1.'","'.$liste2.'","'.$liste3.'","'.$liste4.'")';
			$insert = mysqli_query($bdd,$requete);
			if($insert)  {    
				echo("L ajout à été correctement effectuée") ;  
				}  
				else  {    
				echo("L ajout à échouée") ;  
				}
				 header("Location:blog.php");
	}
	else{
		
		echo '<script language="JavaScript">
							alert("Impossible car vous avez ateint le maximum dont 3 accordions vous devez en supprimez d abord pour en creer un autre");
							window.location.replace("blog.php");//joue le role de header(php) en java
							</script>';
		//Si la variable de la requête dans la BDD contient des informations, ta table est n'est pas vide
		
	}
}
else if($supprfooter){
	$supprimer = mysqli_query($bdd,'DELETE FROM footer WHERE titrefooter="'.$titrefooter.'"');
	if($supprimer)  {    
		echo("La suppression à été correctement effectuée") ;  
		}  
		else  {    
		echo("La suppression à échouée") ;  
		}
		 header("Location:blog.php");
		
	
}

 // Copie du fichier vraiblog dans fichier creer
 if (empty($namefile)){
	 $reponse = mysqli_query($bdd,'SELECT * FROM file');
	 $donnees = mysqli_fetch_assoc($reponse);
	 $fichierlire = fopen($donnees['nomfichier'],'r+');
	$file = 'vraiblog.php';
	$copy = copy($file, $donnees['nomfichier']);
		if (!$copy) {
			echo "La copie du fichier a échoué...\n";
		}
		else{
			// echo 'Contenu du fichier copier<br>';
			fclose($fichierlire);
		}
		 
 }
 else{
	$fichierlire = fopen($namefile,'r+');
	$file = 'vraiblog.php';
	$copy = copy($file, $namefile);
		if (!$copy) {
			echo "La copie du fichier a échoué...\n";
		}
		else{
			// echo 'Contenu du fichier copier<br>';
			fclose($fichierlire);
		}
}
?>