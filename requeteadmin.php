<?php

$login=filter_input(INPUT_POST,'login', FILTER_SANITIZE_STRING);
$password=filter_input(INPUT_POST,'pwd', FILTER_SANITIZE_STRING);
$btnajout=filter_input(INPUT_POST,'ajout', FILTER_SANITIZE_NUMBER_INT);
$btnsuppr=filter_input(INPUT_POST,'suppr', FILTER_SANITIZE_NUMBER_INT);
$btnmodif=filter_input(INPUT_POST,'modif', FILTER_SANITIZE_STRING);
$btnrech=filter_input(INPUT_POST,'rech', FILTER_SANITIZE_NUMBER_INT);
$mdp=sha1($password);
$repeat=false;
include('connexion.php');
$parcours = mysqli_query($bdd,'SELECT * FROM info');
// $password = password_hash($password, PASSWORD_DEFAULT);
	if($btnajout){
				
				if($parcours)  {
					while ($donnees = mysqli_fetch_assoc($parcours))
					{	
						if($donnees['login']==$login AND $donnees['password']==$mdp){
						
							echo '<script language="JavaScript">
							alert("Cette utilisateur éxiste déja");
							window.location.replace("utilisateur.php")';//joue le role de header(php) en java
							echo'</script>';
							 
						}			
					}
				$ajout=mysqli_query($bdd,'INSERT INTO info(login,password) VALUES("'.$login.'", "'.$mdp.'")');
				echo("L ajout à été correctement effectuée") ;  
				}  
				else  {    
				echo("L ajout à échouée") ;  
				}
				echo '<script language="JavaScript">
				window.location.replace("utilisateur.php")';//joue le role de header(php) en java
				echo'</script>';
	}
	else if($btnsuppr){
		
		
		if($parcours)  {
				while ($donnees = mysqli_fetch_assoc($parcours))
					{	
						if($donnees['login']!=$login AND $donnees['password']!=$mdp){
						
							echo '<script language="JavaScript">
							alert("Cette utilisateur n éxiste pas");
							window.location.replace("utilisateur.php")';//joue le role de header(php) en java
							echo'</script>';
							 
						}			
					}
			$supp = mysqli_query($bdd,'DELETE FROM info WHERE login="'.$login.'"');
			echo("La suppression à été correctement effectuée") ;  
		}  
		else  {    
		echo("La suppression à échouée") ;  
		}
		echo '<script language="JavaScript">
		window.location.replace("utilisateur.php")';//joue le role de header(php) en java
		echo'</script>';
	
	}
	//on va mettre recherche dans un modal en bootstrap
	else if($btnmodif){
				$modif= mysqli_query($bdd,'UPDATE info SET login="'.$login.'", password = "'.$mdp.'" WHERE login="'.$btnmodif.'"');
				
				if($modif)  {    
						echo("La modification à été correctement effectuée") ;  
						}  
						else  {    
						echo("La modification à échouée") ;  
				}
			
			
		
		header("Location:utilisateur.php");
		}
		else if($btnrech){
				include('bootstrap.php');
				include('utilisateurheader.php');
				$recherch = mysqli_query($bdd,'SELECT * FROM info WHERE login="'.$login.'"');
					$donnees = mysqli_fetch_assoc($recherch);
							if($recherch){
								// echo'Recherche reussie<br>';
								 echo "<TR>";
							echo "<TH>"; 
							echo $donnees['login']; 
							echo "</TH>";
							echo "<TH>"; 
							echo $donnees['password']; 
							echo "</TH>";
							echo "</TR>";
								header('refresh:4;url=utilisateur.php');
							}
							else{
								// echo'recherche echoué';
							}
							echo '</table>
				</form>
			</article>';

	}
	
	else{
		echo'Rien fait';
	}

?>