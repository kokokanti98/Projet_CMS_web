<?php
include('connexion.php');
$select = mysqli_query($bdd,'SELECT * FROM html');
$donnees = mysqli_fetch_assoc($select);
$selectbody = mysqli_query($bdd,'SELECT * FROM sectionbody');
$donneesbody = mysqli_fetch_assoc($selectbody);
$selectbodyafter = mysqli_query($bdd,'SELECT * FROM sectionbody LIMIT 1, 10');
$selectfooter = mysqli_query($bdd,'SELECT * FROM footer');
$donneesfooter = mysqli_fetch_assoc($selectfooter);
?>
<!DOCTYPE html>
 <html lang ="FR">
 <head>
<link rel="stylesheet"  href="utilisateur.css">
<?php
include('bootstrap.php');
?>
<style>

body{
	
}
nav{
	
}
h1,h5{
	text-align:center;
}
#row:p{
	text-align:center;
}
#card; p{
	text-align:left;
}
</style>
	<?php
	$reponsenavc = mysqli_query($bdd,'SELECT * FROM navcouleur');
	$donneesnavc = mysqli_fetch_assoc($reponsenavc);
	echo '<nav class="navbar navbar-expand-lg navbar-light ';
	echo ' text-white ';
	echo ' ';
	echo $donneesnavc['fond'];
	echo' ">';
	?>
			<?php
			
			echo '<img src="'.$donnees['logo'].'" class="img-fluid rounded float-left" alt="Responsive image" id="logo">';
			
			
			?><!--image du logo-->
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item dropdown">
					<?php
					  echo '<a class="nav-link dropdown-toggle ';
					 echo $donneesnavc['texte'];
					  echo ' " ';
					  echo 'href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
					  echo $donnees['navbar_toggle'];
					  echo '</a>';
					?><!--navbar dropdown dont element du navbar-->
					<div class="dropdown-menu " aria-labelledby="navbarDropdown"><!--element du navbar dropdown-->
					  <?php
					  // ici on va faire une boucle
						  if(!empty($donnees['navelem1'])){echo '<a class="dropdown-item" href="#">';
						  echo $donnees['navelem1'];
						  echo '</a>';
						  }
						  if(!empty($donnees['navelem2'])){echo '<a class="dropdown-item" href="#">';
						  echo $donnees['navelem2'];
						  echo '</a>';
						  }
						  echo '<div class="dropdown-divider"></div>';
						  if(!empty($donnees['navelem3'])){echo '<a class="dropdown-item" href="#">';
						  echo $donnees['navelem3'];
						  echo '</a>';
						  }
					  ?>
					</div>
				  </li>
				  <li class="nav-item">
				  
					<?php
					echo '<a class="nav-link text-white ';
					 echo $donneesnavc['texte'];
					 echo ' " '; 
					echo 'href="#">';
					echo $donnees['nav2'];
					echo '</a>';
					?><!--un element du navbar-->
				  </li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
				  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"><!--fonction search-->
				  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			  </div>
		</nav>
</head>
<body>
<?php
$reponsebodyc = mysqli_query($bdd,'SELECT * FROM bodycouleur');
$donneesbodyc = mysqli_fetch_assoc($reponsebodyc);

?>
<section class="<?php echo $donneesbodyc['fondtitrebody'];?>">
		<article>
		
			<h1 class="<?php echo $donneesbodyc['titrebody'];?>"><?php echo $donneesbody['title'];?></h1><!--titre-->
			
			<div class="container ">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner ">
				  <?php
					echo '<div class="carousel-item active ">
						<div id="block" class="card width: 18rem ';
						echo ' ';
						echo $donneesbodyc['fondtextebody'];
						echo ' ';
						echo $donneesbodyc['textebody'];
						echo ' ">';
							
					
						  echo '<div class="card-body ">';
							echo '<h5 class="card-title">';
							echo $donneesbody['titrephoto'];
							echo '</h5>';
							
							echo '<img src="'.$donneesbody['photo'].'" class="img-fluid rounded mx-auto d-block" alt="Responsive image">';
		
							echo '<ul class="list-group list-group-flush">';
							
							if (!empty($donneesbody['elemphoto1'])){
								echo '<li class="list-group-item">';
								echo $donneesbody['elemphoto1'];
								echo'</li>';
							}
							if (!empty($donneesbody['elemphoto2'])){
								echo '<li class="list-group-item">';
								echo $donneesbody['elemphoto2'];
								echo'</li>';
							}
							if (!empty($donneesbody['elemphoto3'])){
								echo '<li class="list-group-item">';
								echo $donneesbody['elemphoto3'];
								echo'</li>';
							}
							if (!empty($donneesbody['elemphoto4'])){
								echo '<li class="list-group-item">';
								echo $donneesbody['elemphoto4'];
								echo'</li>';
							}
							if (!empty($donneesbody['elemphoto5'])){
								echo '<li class="list-group-item">';
								echo $donneesbody['elemphoto5'];
								echo'</li>';
							}
							
						    echo '</ul>';
						   echo '</div>';
						   echo '</div>';
						   echo '</div>';
						  ?>
						
					<?php
					while($donneesbodyafter = mysqli_fetch_assoc($selectbodyafter)) {
					echo '<div class="carousel-item">
					  <div id="block" class="card width: 18rem ';
						echo ' ';
						echo $donneesbodyc['fondtextebody'];
						echo ' ';
						echo $donneesbodyc['textebody'];
						echo ' ">';
						echo ' <div class="card-body">';
							echo '<h5 class="card-title">';
							echo $donneesbodyafter['titrephoto'];
							echo '</h5>';
							echo '<img src="'.$donneesbodyafter['photo'].'" class="img-fluid rounded mx-auto d-block" alt="Responsive image">';
							echo '<ul class="list-group list-group-flush">';
							
							if (!empty($donneesbodyafter['elemphoto1'])){
								echo '<li class="list-group-item">';
								echo $donneesbodyafter['elemphoto1'];
								echo'</li>';
							}
							if (!empty($donneesbodyafter['elemphoto2'])){
								echo '<li class="list-group-item">';
								echo $donneesbodyafter['elemphoto2'];
								echo'</li>';
							}
							if (!empty($donneesbodyafter['elemphoto3'])){
								echo '<li class="list-group-item">';
								echo $donneesbodyafter['elemphoto3'];
								echo'</li>';
							}
							if (!empty($donneesbodyafter['elemphoto4'])){
								echo '<li class="list-group-item">';
								echo $donneesbodyafter['elemphoto4'];
								echo'</li>';
							}
							if (!empty($donneesbodyafter['elemphoto5'])){
								echo '<li class="list-group-item">';
								echo $donneesbodyafter['elemphoto5'];
								echo'</li>';
							}
							
						    echo '</ul>';
						  echo '</div>
					  </div>
					</div>';
					}
					?>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon bg-warning" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon bg-warning" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</article>
		
</section>
</body>
<!-- Footer -->
<?php
$reponsefootc = mysqli_query($bdd,'SELECT * FROM footcouleur');
$donneesfootc = mysqli_fetch_assoc($reponsefootc);
?>
<footer class="page-footer font-small blue <?php echo ' ';  echo $donneesfootc['textegfoot']; echo ' '; echo $donneesfootc['fondgfoot'];?>">
    <!-- Footer Links -->
    <div class="container text-center">
		 <div class="footer-copyright text-center py-3">
				<a href="#logo" class="<?php echo ' ';  echo $donneesfootc['textegfoot'];?>">Retourner en haut</a>
		</div>
      <!-- Grid row -->
      
<div class="accordion text-info" id="accordionExample card">
		<?php
		  echo '<div class="card">
			<div class="card-header ';
			echo $donneesfootc['fondtitre1'];
			echo '" ';
			echo 'id="headingOne ">';
			  echo '<h5 class="mb-0">
				<button class="btn btn-link ';
			echo $donneesfootc['textetitre1'];
			echo '" ';
			echo ' type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">';
				  
					echo $donneesfooter['titrefooter'];
				  
	
				echo '</button>
			  </h5>
			</div>

			<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
			  <div class="card-body">
			  
				  <p>';
						echo $donneesfooter['liste1'];
				 echo ' </p>
				  <p>';
						echo $donneesfooter['liste2'];
				  echo'</p>
				  <p>';
						echo $donneesfooter['liste3'];
				  echo'</p>
			 
			  </div>
			</div>
		  </div>'
		  ?>
		  <?php
		  $selectfooterafter = mysqli_query($bdd,'SELECT * FROM footer LIMIT 1, 10');
		  if($donneesfooterafter=mysqli_fetch_assoc($selectfooterafter) AND $donneesfooterafter!=NULL){
		  echo '<div class="card">
			<div class="card-header ';
			echo $donneesfootc['fondtitre2'];
			echo '" ';
			echo ' id="headingTwo">
			  <h5 class="mb-0">
				<button class="btn btn-link collapsed  ';
			echo $donneesfootc['textetitre2'];
			echo '" ';
			echo ' type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">';
				   
					echo $donneesfooterafter['titrefooter'];
				  
				  
				echo '</button>
			  </h5>
			</div>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
			  <div class="card-body">
				  <p>';
						echo $donneesfooterafter['liste1'];
				  echo '</p>
				  <p>';
						echo $donneesfooterafter['liste2'];
				  echo '</p>
				  <p>';
						echo $donneesfooterafter['liste3'];
				  echo '</p>
			  </div>
			</div>
		  </div>';
		  }
		  	  $selectfooterafter = mysqli_query($bdd,'SELECT * FROM footer LIMIT 2, 10');
		  if($donneesfooterafter=mysqli_fetch_assoc($selectfooterafter) AND $donneesfooterafter!=NULL){
		  echo '<div class="card">
			<div class="card-header  ';
			echo $donneesfootc['fondtitre3'];
			echo '" ';
			echo ' id="headingTwo">
			  <h5 class="mb-0">
				<button class="btn btn-link collapsed   ';
			echo $donneesfootc['textetitre3'];
			echo '" ';
			echo ' type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">';
				   
					echo $donneesfooterafter['titrefooter'];
				  
				  
				echo '</button>
			  </h5>
			</div>
			<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
			  <div class="card-body">
				  <p>';
						echo $donneesfooterafter['liste1'];
				  echo '</p>
				  <p>';
						echo $donneesfooterafter['liste2'];
				  echo '</p>
				  <p>';
						echo $donneesfooterafter['liste3'];
				  echo '</p>
			  </div>
			</div>
		  </div>';
		  }
		  ?>
</div>
		
	 

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="#"><?php
echo $donneesfooter['liste4'];
?></a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</html>