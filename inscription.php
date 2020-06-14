<!DOCTYPE html>
 <html lang ="FR">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"><!--CDN bootsrap-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><!--CDN jquery-->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script><!--CDN bootstrap-->
 <head>
 <style>


 #dedans{
	 padding-left:50px;
	 border-radius: 10px;
	 border: 1px solid black;
	 background-color: #333454;
	 text-color:#225544;
	 width:300px;
	 margin: 0px; auto;
	 margin-left:500px;
	  margin-top:150px;
	 position:relative;

 }
 
.image{
	  -webkit-border-radius:50px;
    -moz-border-radius:50px;
	border-radius:50px;
	width:100px;
	height:100px;
	margin-right:50px;
}
.btn{
	 border-radius: 10px;
	 margin-left:50px;
	 background-color: #524433;
}

.img{
	margin-left:40px;
}

body{
	 margin:0;
  padding:0;
  background: url(back2.jpg) no-repeat center fixed; 
  -webkit-background-size: cover; /* pour anciens Chrome et Safari */
  background-size: cover; /* version standardisée */
}
.admin{
	border-radius:7px;
}
.md{
	font-weight:bold;
	color: #877788;
	font-style:italic;
}
 </style>
 </head>
 <body>
 <form action="requeteuser.php" method="post" id="dedans">
		<div class="form-group">
			<div class="img">
				<img class="image" src="user.jpg">
			</div>
			<div id="usercss">
					<label class="md">Login:</label>
					<p><input class="admin" type="string" placeholder="admin" name="util" class="form-control input-lg" required></p>
					</input>
					<label class="md">Mot de Passe:</label>
					<p>
					<input class="admin" type="password" placeholder="votre mot de passe" name="mdp" class="form-control input-lg" required></p>
					</input>
					<label class="md">Entrez a nouveau:</label>
					<p>
					<input class="admin" type="password" placeholder="entrez a nouveau" name="nmdp" class="form-control input-lg" required></p>
					</input>
				<div class="btn-group">
							<a href="connexionuser.php" type="submit" class="btn btn-warning" name="valide" value="1">Revenir</a>
							<button  type='submit' class='btn btn-success' name="inscription" value="2" onclick="return confirm('Voulez vous vous inscrire?');">Inscription</button>	
				</div>
			</div>
	 </div>	
 </form>
 </body>
 </html>