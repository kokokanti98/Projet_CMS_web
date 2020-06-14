<!--Reste plus que la methode d utilisation et certaine condition de regulation de bdd pour eviter la repetition-->
<!DOCTYPE html>
 <html lang ="FR">
 <head>
<style>
#logo{
	background-color:#234567;
	position:center;
	margin: 0px auto;
	width:100%;
}
</style>
<?php
include('bootstrap.php');
session_start();
if(!empty($_SESSION['login'])){
$login = $_SESSION['login'];
}
// echo $login;
?>
<head>
<div id="barrenav">
<?php
include('navbar.php');

	 if($_SESSION['connected']==true){
			// echo 'Connected';
		}
	else{
			echo'<script language="JavaScript">
			alert("ACCES REFUSE!!");
			window.location.replace("connexionuser.php");//joue le role de header(php) en java
			</script>';
	}
 //$_SESSION['connected']=false;
 
?>
</div>
	
</head>
<body>
		<section id="debutpage">
					<article>
							<div class="pos-f-t">
										<div class="bg-danger p-4">
											<h4 class="text-white h4">Formulaire pour construire le site</h4>
											<?php
												include('formulaireblog.php');
											?>
											
											<br></br>
										<?php 
										include('connexion.php');
										$reponse = mysqli_query($bdd,'SELECT * FROM file');
										$donnees = mysqli_fetch_assoc($reponse);
										?>
										<a href="<?php echo $donnees['nomfichier']; ?>" class="btn btn-primary">Voir Mon site</a>
										<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Voir les elements du footer actuel
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Les elements du footer:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
			echo'<table border ="1">
			<tr>
			<th>Titre du pied de page</th>
			<th>Premiere liste</th>
			<th>Deuxieme liste</th>
			<th>Troisieme liste</th>
			<th>Derniere liste</th>
			</tr>
			';
			$reponse = mysqli_query($bdd,'SELECT * FROM footer');
			while ($donnees = mysqli_fetch_assoc($reponse))
	{
		//On affiche les donnees dans la table footer en cours

		echo '<TR>';
							echo '<TH>'; 
							echo $donnees['titrefooter']; 
							echo '</TH>';
							echo '<TH>'; 
							echo $donnees['liste1']; 
							echo '</TH>';
							echo '<TH>'; 
							echo $donnees['liste2']; 
							echo '</TH>';
							echo '<TH>'; 
							echo $donnees['liste3']; 
							echo '</TH>';
							echo '<TH>'; 
							echo $donnees['liste4']; 
							echo '</TH>';
		echo '</TR>';	 
	}
		?>
		</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

									</div>
							</div>
					</article>
					<article>
					
					</article>
		</section>
</body>
<?php
include('footer.php');
?>