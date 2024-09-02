<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <title><?= $titre ?></title>
    </head>
    
    <body>
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compact Navbar with Bootstrap</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <div class="d-flex justify-content-center fs-1 " style="background-color:#FFCB90">
      <h1 class="titrePrincip1 fw-bold" >Cinema</h1>

    </div>
</head>
<body>
<!-- Navbar principale -->
<nav class="navbar1 navbar-expand-lg p-1" style="background-color:#FFCB60">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-between w-100" id="navbarNav1">
    <ul class="navbar-nav text-black fw-bold fs-2 w-100">
      <li class="nav-item flex-grow-1 text-center me-2 border-end border-dark">
        <a class="nav-link" href="listFilms.php">Films</a>
      </li>
      <li class="nav-item flex-grow-1 text-center me-2 border-end border-dark">
        <a class="nav-link" href="detailActeur.php">Acteurs</a>
      </li>
      <li class="nav-item flex-grow-1 text-center me-2 border-end border-dark">
        <a class="nav-link" href="#">Réalisateurs</a>
      </li>
      <li class="nav-item flex-grow-1 text-center me-2 border-end border-dark">
        <a class="nav-link" href="#">Rôles</a>
      </li>
      <!-- Dropdown Menu for Mon Compte -->
      <li class="nav-item dropdown flex-grow-1 text-center me-2 ">
        <a class="nav-link dropdown-toggle" href="#" id="monCompteDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Mon Compte
        </a>
        <div class="dropdown-menu" aria-labelledby="monCompteDropdown1">
          <a class="dropdown-item" href="#">Connexion</a>
          <a class="dropdown-item" href="#">Inscription</a>
        </div>
      </li>
    </ul>
    <!-- Search form -->
    <form class="form-inline">
      <input class="form-control mr-2" type="search" placeholder="Rechercher" aria-label="Search">
      <button class="btn btn-outline-dark text-black" type="submit">Rechercher</button>
    </form>
  </div>
</nav>




<!-- Navbar compacte -->
<nav class="navbar2 navbar-expand-lg" style="background-color:#FCDC12">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav2" aria-controls="navbarNav2" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-between w-100" id="navbarNav2">
    <ul class="navbar-nav text-black w-100">
      <li class="nav-item me-3 flex-grow-1 text-center border-end border-dark"> 
        <a class="nav-link" href="#">Nouveaux Films</a>
      </li>
      <li class="nav-item me-3 flex-grow-1 text-center border-end border-dark"> 
        <a class="nav-link" href="#">Nouvelles Bandes Annonces</a>
      </li>
      <li class="nav-item me-3 flex-grow-1 text-center border-end border-dark"> 
        <a class="nav-link" href="#">Nouveaux Courts-Métrages</a>
      </li>
      <li class="nav-item me-3 flex-grow-1 text-center"> 
        <a class="nav-link" href="#">Dossier</a>
      </li>
    </ul>
  </div>
</nav>


<!-- Bootstrap JS and dependencies -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

        <main>
                
                <?= $content ?>
               

            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>