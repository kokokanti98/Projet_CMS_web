<nav class="navbar navbar-expand-lg navbar-light bg-warning">
<img src="images.png" class="img-fluid rounded float-left" alt="Responsive image">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Creer un Site
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="blog.php">Construire un blog</a>
          <!--<div class="dropdown-divider"></div>-->
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="utilisateur.php">Gerer Utilisateur</a>
      </li>
    </ul>
	 <?php
	 if(!empty($_SESSION['login'])){
	  echo '<ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
        
		
			echo $login;
			
		
        echo '</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="deconnexion.php">Deconnexion</a>
          <!--<div class="dropdown-divider"></div>-->
        </div>
      </li>
    </ul>';
	}
	 ?>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>