<section>
		<article>
			  <div id="tete">
				<img src="logo.jpg" class="img-circle"/><!--la ou l on va mettre le logo-->
            
			  </div>
		</article>
		<article>
			<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<a class="navbar-brand" href="utilisateur.php">Gerer les utilisateur</a>
				  <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>
	</div>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
			
		</article>
		<article>
			<form style="margin:50px;" action="requeteadmin.php" method="post">
			
					<div class="row">
						<label for="name">Login</label>
						<input type="text" id="login" class="form-control input-lg" name="login">
					</div>
					<div class="row">
						<label for="email">Password</label>
						<input type="text" id="pwd" class="form-control" name="pwd">
					</div>
					<div style="margin-top:10px;">
						<button type="submit" class="btn btn-primary" name="rech" value="4" onclick="return confirm('Voulez vous rechercher cette utilisateur?');">Recherche</button>
					</div>
					<div class="btn-group">
						<button type="submit" class="btn btn-success" name="ajout" value="1" onclick="return confirm('Voulez vous ajouter cette utilisateur?');">Ajouter</button>
						<button type='submit' class='btn btn-danger' name="suppr" value="2" onclick="return confirm('Voulez vous supprimer cette utilisateur?');">Supprimer</button>
						
					</div>	
					<div class="table table-responsive" style="margin-top:20px;">
					<table border="1">
						<tr>
							<th class="table-warning">Login</th>
							<th class="table-info">Mot de Passe</th>
						</tr>