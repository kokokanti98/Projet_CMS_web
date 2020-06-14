<p class="text-white">Contruction du fichier</p>
<form action="requeteblog.php" method="POST">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Nom de votre fichier</span>
  </div>
  <input type="text" class="form-control" placeholder="Creation de votre fichier pour votre site" aria-label="Username" aria-describedby="basic-addon1" name="fichier">
</div>
<div class="btn-group">
		<button type="submit" class="btn btn-success" name="creer" value="1" onclick="return confirm('Voulez vous creer ce fichier?');">Creer</button>
</div>
</form>
<div id="accordion">

  <div class="card">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" href="#collapseOne">
		 Barre,corp,et pied de page
      </a>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#accordion">
      <div class="card-body">
        <p class="text-success">Contruction de la barre de navigation</p>
<form action="requeteblog.php" method="POST">
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1">Nom du navbar toggle</span>
	  </div>
	  <input type="text" class="form-control" placeholder="Navbar deroulante" aria-label="Username" aria-describedby="basic-addon1" name="navbar_toggle">
	</div>
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1"> Premier element du menu deroulante</span>
	  </div>
	  <input type="text" class="form-control" placeholder="premier element" aria-label="Username" aria-describedby="basic-addon1" name="navelem1">
	</div>
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1"> Deuxieme element du menu deroulante</span>
	  </div>
	  <input type="text" class="form-control" placeholder="deuxieme element" aria-label="Username" aria-describedby="basic-addon1" name="navelem2">
	</div>
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1"> Troisieme element du menu deroulante</span>
	  </div>
	  <input type="text" class="form-control" placeholder="troisieme element" aria-label="Username" aria-describedby="basic-addon1" name="navelem3">
	</div>
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1">Navbar</span>
	  </div>
	  <input type="text" class="form-control" placeholder="element du menu apres le navbar" aria-label="Username" aria-describedby="basic-addon1" name="nav2">
	</div>
	 <div class="custom-file">
			<input type="file" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" name="logo">
			<label class="custom-file-label" for="inputGroupFile03">Votre logo a telecharger</label>
	 </div>
	 <div class="btn-group">
			<button type="submit" class="btn btn-success" name="ajout" value="1" onclick="return confirm('Voulez vous ajouter cette barre de navigation?');">Ajouter</button>
			<button type='submit' class='btn btn-warning' name="suppr" value="2" onclick="return confirm('Voulez vous supprimer cette barre de navigation?');">Supprimer</button>
	</div>	

<p class="text-success">Contruction du corps de page</p>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1">Titre du site</span>
	  </div>
	  <input type="text" class="form-control" placeholder="titre du site ou blog" aria-label="Username" aria-describedby="basic-addon1" name="title">
	</div>
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1">Titre du photos</span>
	  </div>
	  <input type="text" class="form-control" placeholder="titre du photo" aria-label="Username" aria-describedby="basic-addon1" name="titrephoto">
	</div>
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1"> 1er Element du photo</span>
	  </div>
	  <input type="text" class="form-control" placeholder="premier element " aria-label="Username" aria-describedby="basic-addon1" name="elemphoto1">
	</div>
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1"> 2eme Element du photo</span>
	  </div>
	  <input type="text" class="form-control" placeholder="2eme Element du photo" aria-label="Username" aria-describedby="basic-addon1" name="elemphoto2">
	</div>
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1">3eme Element du photo</span>
	  </div>
	  <input type="text" class="form-control" placeholder="3eme Element du photo" aria-label="Username" aria-describedby="basic-addon1" name="elemphoto3">
	</div>
	 <div class="custom-file">
			<input type="file" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" name="photo">
			<label class="custom-file-label" for="inputGroupFile03">Votre photo a telecharger pour le blog</label>
	 </div>
	 <div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1">4eme Element du photo</span>
	  </div>
	  <input type="text" class="form-control" placeholder="4eme Element du photo" aria-label="Username" aria-describedby="basic-addon1" name="elemphoto4">
	</div>
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1">5eme Element du photo</span>
	  </div>
	  <input type="text" class="form-control" placeholder="5eme Element du photo" aria-label="Username" aria-describedby="basic-addon1" name="elemphoto5">
	</div>
	 <div class="btn-group">
			<button type="submit" class="btn btn-success" name="ajoutsection" value="1" onclick="return confirm('Voulez vous ajouter ce corp de site?');">Ajouter</button>
			<button type='submit' class='btn btn-warning' name="supprsection" value="2" onclick="return confirm('Voulez vous supprimer ce corp de site?');">Supprimer</button>
	</div>	


<p class="text-success">Contruction du pied de page</p>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1">Titre du footer</span>
	  </div>
	  <input type="text" class="form-control" placeholder="Titre du footer" aria-label="Username" aria-describedby="basic-addon1" name="titrefooter">
	</div>
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1">1er liste du titre</span>
	  </div>
	  <input type="text" class="form-control" placeholder="1er liste du titre" aria-label="Username" aria-describedby="basic-addon1" name="liste1">
	</div>
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1"> 2eme liste du titre </span>
	  </div>
	  <input type="text" class="form-control" placeholder="2eme liste du titre " aria-label="Username" aria-describedby="basic-addon1" name="liste2">
	</div>
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1"> 3eme liste du titre</span>
	  </div>
	  <input type="text" class="form-control" placeholder="3eme liste du titre" aria-label="Username" aria-describedby="basic-addon1" name="liste3">
	</div>
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1">4eme liste du titre</span>
	  </div>
	  <input type="text" class="form-control" placeholder="4eme liste du titre" aria-label="Username" aria-describedby="basic-addon1" name="liste4">
	</div>
	 <div class="btn-group">
			<button type="submit" class="btn btn-success" name="ajoutfooter" value="1" onclick="return confirm('Voulez vous ajouter ce footer?');">Ajouter</button>
			<button type='submit' class='btn btn-warning' name="supprfooter" value="2" onclick="return confirm('Voulez vous supprimer ce footer?');">Supprimer</button>
	</div>	
</form>
      </div>
    </div>
  </div>
   <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        Des couleurs du barre de navigation et du corps
      </a>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body">
         <p class="text-success">Les Couleurs:</p>
	<p class="text-warning">Du navbar(menu)</p>
	<form action="requeteblog.php" method="POST">
	<div class="form-group">
		  <label for="sel1">Texte</label>
		 <select class="form-control" id="sel1" name="texte">
			<option value="text-success">Vert</option>
			<option value="text-info">Bleu ciel</option>
			<option value="text-warning">Jaune</option>
			<option value="text-danger">Rouge</option>
			<option value="text-muted">Noir</option>
			<option value="text-white">Transparent</option>
		</select>
	</div>
	<div class="form-group">
		  <label for="sel1">Fond</label>
		 <select class="form-control" id="sel1" name="fond">
			<option value="bg-primary">Bleu</option>
			<option value="bg-success">Vert</option>
			<option value="bg-info">Bleu ciel</option>
			<option value="bg-warning">Jaune</option>
			<option value="bg-danger">Rouge</option>
			<option value="bg-inverse">Noir</option>
			<option value="bg-faded">Transparent</option>
		</select>
	</div>
	<div class="btn-group">
			<button type="submit" class="btn btn-success" name="ajoutcouleurmenu" value="1" onclick="return confirm('Voulez vous ajouter ce couleur de menu?');">Ajouter</button>
			<button type='submit' class='btn btn-warning' name="supprcouleurmenu" value="2" onclick="return confirm('Voulez vous supprimer ce couleur de menu?');">Supprimer</button>
	</div>
	
	<p class="text-warning">Du corp de page</p>
	
	<div class="form-group">
		  <label for="sel1">Texte du titre</label>
		 <select class="form-control" id="sel1" name="titrebody">
			<option value="text-success">Vert</option>
			<option value="text-info">Bleu ciel</option>
			<option value="text-warning">Jaune</option>
			<option value="text-danger">Rouge</option>
			<option value="text-muted">Noir</option>
			<option value="text-white">Transparent</option>
		</select>
	</div>
	<div class="form-group">
		  <label for="sel1">Fond du titre</label>
		 <select class="form-control" id="sel1" name="fondtitrebody">
			<option value="bg-primary">Bleu</option>
			<option value="bg-success">Vert</option>
			<option value="bg-info">Bleu ciel</option>
			<option value="bg-warning">Jaune</option>
			<option value="bg-danger">Rouge</option>
			<option value="bg-inverse">Noir</option>
			<option value="bg-faded">Transparent</option>
		</select>
	</div>
	<div class="form-group">
		  <label for="sel1">Texte du corps de la page</label>
		 <select class="form-control" id="sel1" name="textebody">
			<option value="text-success">Vert</option>
			<option value="text-info">Bleu ciel</option>
			<option value="text-warning">Jaune</option>
			<option value="text-danger">Rouge</option>
			<option value="text-muted">Noir</option>
			<option value="text-white">Transparent</option>
		</select>
	</div>
	<div class="form-group">
		  <label for="sel1">Fond de l element du titre du corp</label>
		 <select class="form-control" id="sel1" name="fondtextebody">
			<option value="bg-primary">Bleu</option>
			<option value="bg-success">Vert</option>
			<option value="bg-info">Bleu ciel</option>
			<option value="bg-warning">Jaune</option>
			<option value="bg-danger">Rouge</option>
			<option value="bg-inverse">Noir</option>
			<option value="bg-faded">Transparent</option>
		</select>
	</div>
	<div class="btn-group">
			<button type="submit" class="btn btn-success" name="ajoutcouleurbody" value="1" onclick="return confirm('Voulez vous ajouter ce couleur de corps du page?');">Ajouter</button>
			<button type='submit' class='btn btn-warning' name="supprcouleurbody" value="2" onclick="return confirm('Voulez vous supprimer ce couleur de corps du page?');">Supprimer</button>
	</div>
	</form>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
        Des couleurs du pied de page
      </a>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#accordion">
      <div class="card-body">
        <form action="requeteblog.php" method="POST">
	<p class="text-warning">Du pied de page</p>
	<div class="form-group">
		  <label for="sel1">Texte du grand titre</label>
		 <select class="form-control" id="sel1" name="textegfoot">
			<option value="text-success">Vert</option>
			<option value="text-info">Bleu ciel</option>
			<option value="text-warning">Jaune</option>
			<option value="text-danger">Rouge</option>
			<option value="text-muted">Noir</option>
			<option value="text-white">Transparent</option>
		</select>
	</div>
	<div class="form-group">
		  <label for="sel1">Fond du  grand titre</label>
		 <select class="form-control" id="sel1" name="fondgfoot">
			<option value="bg-primary">Bleu</option>
			<option value="bg-success">Vert</option>
			<option value="bg-info">Bleu ciel</option>
			<option value="bg-warning">Jaune</option>
			<option value="bg-danger">Rouge</option>
			<option value="bg-inverse">Noir</option>
			<option value="bg-faded">Transparent</option>
		</select>
	</div>
	<div class="form-group">
		  <label for="sel1">Des texte titre1</label>
		 <select class="form-control" id="sel1" name="textetitre1">
			<option value="text-success">Vert</option>
			<option value="text-info">Bleu ciel</option>
			<option value="text-warning">Jaune</option>
			<option value="text-danger">Rouge</option>
			<option value="text-muted">Noir</option>
			<option value="text-white">Transparent</option>
		</select>
	</div>
	<div class="form-group">
		  <label for="sel1">Fond du titre1</label>
		 <select class="form-control" id="sel1" name="fondtitre1">
			<option value="bg-primary">Bleu</option>
			<option value="bg-success">Vert</option>
			<option value="bg-info">Bleu ciel</option>
			<option value="bg-warning">Jaune</option>
			<option value="bg-danger">Rouge</option>
			<option value="bg-inverse">Noir</option>
			<option value="bg-faded">Transparent</option>
		</select>
	</div>
	<div class="form-group">
		  <label for="sel1">Fond des textes dans titre1</label>
		 <select class="form-control" id="sel1" name="fondtextetitre1">
			<option value="bg-primary">Bleu</option>
			<option value="bg-success">Vert</option>
			<option value="bg-info">Bleu ciel</option>
			<option value="bg-warning">Jaune</option>
			<option value="bg-danger">Rouge</option>
			<option value="bg-inverse">Noir</option>
			<option value="bg-faded">Transparent</option>
		</select>
	</div>
	<div class="form-group">
		  <label for="sel1">Des textes titre2</label>
		 <select class="form-control" id="sel1" name="textetitre2">
			<option value="text-success">Vert</option>
			<option value="text-info">Bleu ciel</option>
			<option value="text-warning">Jaune</option>
			<option value="text-danger">Rouge</option>
			<option value="text-muted">Noir</option>
			<option value="text-white">Transparent</option>
		</select>
	</div>
	<div class="form-group">
		  <label for="sel1">Fond du titre2</label>
		 <select class="form-control" id="sel1" name="fondtitre2">
			<option value="bg-primary">Bleu</option>
			<option value="bg-success">Vert</option>
			<option value="bg-info">Bleu ciel</option>
			<option value="bg-warning">Jaune</option>
			<option value="bg-danger">Rouge</option>
			<option value="bg-inverse">Noir</option>
			<option value="bg-faded">Transparent</option>
		</select>
	</div>
	<div class="form-group">
		  <label for="sel1">Fond des textes dans titre2</label>
		 <select class="form-control" id="sel1" name="fondtextetitre2">
			<option value="bg-primary">Bleu</option>
			<option value="bg-success">Vert</option>
			<option value="bg-info">Bleu ciel</option>
			<option value="bg-warning">Jaune</option>
			<option value="bg-danger">Rouge</option>
			<option value="bg-inverse">Noir</option>
			<option value="bg-faded">Transparent</option>
		</select>
	</div>
	<div class="form-group">
		  <label for="sel1">Des textes titre3</label>
		 <select class="form-control" id="sel1" name="textetitre3">
		<option value="text-primary">Bleu</option>
			<option value="text-success">Vert</option>
			<option value="text-info">Bleu ciel</option>
			<option value="text-warning">Jaune</option>
			<option value="text-danger">Rouge</option>
			<option value="text-muted">Noir</option>
			<option value="text-white">Transparent</option>
		</select>
	</div>
	<div class="form-group">
		  <label for="sel1">Fond du titre3</label>
		 <select class="form-control" id="sel1" name="fondtitre3">
			<option value="bg-primary">Bleu</option>
			<option value="bg-success">Vert</option>
			<option value="bg-info">Bleu ciel</option>
			<option value="bg-warning">Jaune</option>
			<option value="bg-danger">Rouge</option>
			<option value="bg-inverse">Noir</option>
			<option value="bg-faded">Transparent</option>
		</select>
	</div>
	<div class="form-group">
		  <label for="sel1">Fond des textes dans titre3</label>
		 <select class="form-control" id="sel1" name="fondtextetitre3">
			<option value="bg-primary">Bleu</option>
			<option value="bg-success">Vert</option>
			<option value="bg-info">Bleu ciel</option>
			<option value="bg-warning">Jaune</option>
			<option value="bg-danger">Rouge</option>
			<option value="bg-inverse">Noir</option>
			<option value="bg-faded">Transparent</option>
		</select>
	</div>
	<div class="btn-group">
			<button type="submit" class="btn btn-success" name="ajoutcouleurfooter" value="1" onclick="return confirm('Voulez vous ajouter ce couleur de pied de page?');">Ajouter</button>
			<button type='submit' class='btn btn-warning' name="supprcouleurfooter" value="2" onclick="return confirm('Voulez vous supprimer ce couleur de pied de page?');">Supprimer</button>
	</div>
</form>
      </div>
    </div>
  </div>

</div>

