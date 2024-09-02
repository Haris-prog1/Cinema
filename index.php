<?php

session_start();
use Controller\CinemaController;

spl_autoload_register(function ($class_name) {
    include str_replace("\\", DIRECTORY_SEPARATOR, $class_name) . '.php';
});
$ctrlCinema = new CinemaController();


$id = (isset($_GET['id'])) ? $_GET['id'] : null;
$idMovie = (isset($_GET['idMovie'])) ? $_GET["idMovie"] : null;
// $type = (isset($_get["type"])) ? $_GET["type"] : null;

    if(isset($_GET["action"])){
    switch ($_GET["action"]){
        //Films
        case "listFilms": $ctrlCinema->listFilms($film); break;
        case "detailFilm": $ctrlCinema->detActeur($id); break;
    }
} else {
    $ctrlCinema->main(); // Action par défaut si aucune action spécifiée
}


