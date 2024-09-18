<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/darkly/bootstrap.min.css"
        integrity="sha384-nNK9n28pDUDDgIiIqZ/MiyO3F4/9vsMtReZK39klb/MtkZI3/LtjSjlmyVPS3KdN" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/style.css">
    <title><?= $titre ?></title>
</head>

<body> 
    <!-- Section background, avec les différents titres et navbar -->
    <section class="background">
        <header class="banner">
            <h1 class="titrePrincip1 fw-bold">
            <a href="index.php" class="titreBievenue">Bienvenue au Cinéma 🎬</a></h1>
            <h4><p>Découvrez les derniers films, critiques, et plus encore !</p>
            </h4>
        </header>


        <nav class="navbar navbar-expand-lg" > <!--style="background: linear-gradient( #000000,#000033);"-->
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                    aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item nav-item-border">
                            <a class="nav-link" href="index.php?action=listFilms">Films</a>
                        </li>
                        <li class="nav-item nav-item-border">
                            <a class="nav-link fw-bold" href="index.php?action=listActeurs">Acteurs</a>
                        </li>
                        <li class="nav-item nav-item-border">
                            <a class="nav-link fw-bold" href="index.php?action=listRealisateurs">Réalisateurs</a>
                        </li>
                        <li class="nav-item nav-item-border">
                            <a class="nav-link fw-bold" href="index.php?action=listRoles">Rôles</a>
                        </li>
                        <li class="nav-item nav-item-border">
                            <a class="nav-link fw-bold" href="index.php?action=listCinema">Genre</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold" href="#" id="monCompteDropdown1" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Mon Compte</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Connexion</a>
                                <a class="dropdown-item" href="#">Inscription</a>
                            </div>
                        </li>
                    </ul>
                    <form class="d-flex ml-3 mr-3">
                        <input class="form-control me-2 bg-dark" type="search" placeholder="Rechercher" aria-label="Search">
                        <button class="btn btn-secondary mb-1 my-sm-0 ml-1 bg-dark" type="submit">Rechercher</button>
                    </form>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg" > <!--style="background: linear-gradient(#000033,#000000);"-->
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
                    aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor02">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item nav-item-border">
                            <a class="nav-link fw-bold" href="#">Nouveaux Films</a>
                        </li>
                        <li class="nav-item nav-item-border">
                            <a class="nav-link fw-bold" href="#">Nouvelles Bandes Annonces</a>
                        </li>
                        <li class="nav-item nav-item-border">
                            <a class="nav-link fw-bold" href="#">Nouveaux Courts-Métrages</a>
                        </li>
                        <li class="nav-item nav-item-border">
                            <a class="nav-link fw-bold" href="#">Dossier</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <main>
        <?= $content ?>
    </main>
    <!-- Footer du bas de page -->
    <footer class="footer">Bienvenue dans mon Cinéma</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>
    <script src="./public/js/main.js"></script>
</body>

</html>
