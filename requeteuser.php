<?php
session_start();
include('connexion.php');
//Ici commence la requete de connexion

include('bootstrap.php');
$user=filter_input(INPUT_POST, 'util', FILTER_SANITIZE_STRING);
$password= filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_STRING);
$btnvalid=filter_input(INPUT_POST,'valide', FILTER_SANITIZE_NUMBER_INT);
$btninscription=filter_input(INPUT_POST,'inscription', FILTER_SANITIZE_NUMBER_INT);
$parcours = mysqli_query($bdd,'SELECT * FROM info');
$nmdp= filter_input(INPUT_POST, 'nmdp', FILTER_SANITIZE_STRING);
$btninscription=filter_input(INPUT_POST,'inscription', FILTER_SANITIZE_NUMBER_INT);
$verifajout=true;
$mdp=sha1($password);
//$mdp = password_hash($password, PASSWORD_DEFAULT);
if($btnvalid){
	
	if($user=='admin' && $password=='administrateur'){
		$_SESSION['admin']=true;
		echo'<script language="JavaScript">
		alert("Bienvenue en mode SU!!");
		window.location.replace("utilisateur.php");//joue le role de header(php) en java
		</script>';
	}
	else if ($parcours){
			
				while ($donnees = mysqli_fetch_assoc($parcours))
				{	
					if($donnees['login']==$user AND $donnees['password']==$mdp){
						 $_SESSION['connected']=true;
						 $_SESSION['login']=$donnees['login'];
						echo '<script language="JavaScript">';
						echo 'alert("Bienvenue ';
						echo $donnees['login'];
						echo '");
						window.location.replace("blog.php")';//joue le role de header(php) en java
						echo'</script>';
						
					}			
				}

	}
	else{
			$_SESSION['connected']=false;
		echo '<script language="JavaScript">
		alert("Le login et le mot de passe que vous avez saisie sont erronée. Recommencer");
		window.location.replace("formulaireutilisateur.php");//joue le role de header(php) en java
		</script>';
	}
	
}

//Ici commence la requete des utilisateur du mode admin

else if($btninscription){
				
				if($password==$nmdp){
		if($parcours)  {
					while ($donnees = mysqli_fetch_assoc($parcours))
					{	
						if($donnees['login']==$user){
						
							echo '<script language="JavaScript">
							alert("Cette utilisateur éxiste déja");
							window.location.replace("inscription.php")';//joue le role de header(php) en java
							echo'</script>';
							$verifajout=false;
							 
						}			
					}
				if($verifajout==true){
					$ajout=mysqli_query($bdd,'INSERT INTO info(login,password) VALUES("'.$user.'", "'.$mdp.'")');
					if($ajout){
					echo("L ajout à été correctement effectuée") ;
					header("Location:connexionuser.php");
					}
					else{echo("L ajout a échouée");}
				}
		}  
	}

	else{
		
		echo '<script language="JavaScript">
		alert("Les mot de passe ne sont pas pareil veuillez ressayez");
		window.location.replace("inscription.php");//joue le role de header(php) en java
		</script>';
	}
}
//Se termine les requetes d'inscriptions

else{
	echo 'Rien fait';
}

//Ici se termine la requete de connexion

?>