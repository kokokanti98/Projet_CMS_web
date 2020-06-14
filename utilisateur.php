 <?php
	session_start();
	
  ?>
<!DOCTYPE html>
 <html lang ="FR">
 <head>
<link rel="stylesheet"  href="utilisateur.css">
 <?php
 include('bootstrap.php');
 
 ?>

 <style>
 .navbar {
  position: relative;
  min-height: 50px;
  margin-bottom: 20px;
  border: 1px solid transparent;
}
.navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7;
}
 </style>
 </head>
 <body>
 <?php
	 if($_SESSION['admin']==true){
			// echo 'Connected';
		}
	else{
			echo'<script language="JavaScript">
			alert("ACCES REFUSE!!");
			window.location.replace("connexionuser.php");//joue le role de header(php) en java
			</script>';
	}
 //$_SESSION['admin']=false;
include('utilisateurheader.php');
 include('bootstrap.php');
$btnmodif=filter_input(INPUT_POST,'modif', FILTER_SANITIZE_STRING);
try
{
    include('connexion.php');
    
    // On recupere tout le contenu de la table footer
$reponse = mysqli_query($bdd,'SELECT * FROM info');
  
// On affiche le resultat
	while ($donnees = mysqli_fetch_assoc($reponse))
	{
		//On affiche les donnees dans la table footer en cours

		echo '<TR>';
							echo '<TH>'; 
							echo $donnees['login']; 
							echo '</TH>';
							echo '<TH>'; 
							echo $donnees['password']; 
							echo '</TH>';
		echo'<TH>';
		
		echo '<button type="submit" value="'.$donnees['login'].'" class="btn btn-warning" name="modif" >Modifier</button>';

		echo '</TH>';
		echo '</TR>';

		 
	}
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>
	
					</table>
					</div>
				
			</form>
			</div>
		</article>
	
	</section>
 
 </body>
 <footer>
 </footer>