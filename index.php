<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/darkly/bootstrap.min.css"
        integrity="sha384-nNK9n28pDUDDgIiIqZ/MiyO3F4/9vsMtReZK39klb/MtkZI3/LtjSjlmyVPS3KdN" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/style.css">
    
</head>

<body>
    <?php
    session_start();
    use Controller\CinemaController;

    spl_autoload_register(function ($class_name) {
        include str_replace("\\", DIRECTORY_SEPARATOR, $class_name) . '.php';
    });

    $ctrlCinema = new CinemaController();

    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $idMovie = isset($_GET['idMovie']) ? $_GET["idMovie"] : null;

    if (isset($_GET["action"])) {
        switch ($_GET["action"]) {
            case "listFilms":
                $ctrlCinema->listFilms();
                break;
            case "listRealisateurs":
                $ctrlCinema->listRealisateurs();
                break;
            case "listActeurs":
                $ctrlCinema->listActeurs();
                break;
            case "listRoles":
                $ctrlCinema->listRoles();
                break;
            case "listCinema":
                $ctrlCinema->listCinema();
                break;
            case "detailFilm":
                $ctrlCinema->detailFilm($id);
                break;
            case "detailActeur":
                $ctrlCinema->detailActeur($id);
                break;
            case "detailRealisateur":
                $ctrlCinema->detailRealisateur($id);
                break;
            case "detailRole":
                $ctrlCinema->detailRole($id);
                break;
            case "detailCinema":
                $ctrlCinema->detailCinema($id);
                break;
        }
    } else {
        $ctrlCinema->main(); // Action par défaut si aucune action spécifiée
    }
    ?>

<script src="public/js/main.js"></script>
</body>
</html>
