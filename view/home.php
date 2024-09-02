<?php 
use Controller\CinemaController;

ob_start();
?>
<head>
    
</head>














<?php
$films = $requeteFilm->fetchAll();
foreach($films as $film) { 
    echo $film["titre"] . "<br>"; 
}

?>


<?php
$titre = "Liste des films";
$titre_secondaire = "Liste des films";
$content = ob_get_clean();
require "./view/template.php";
?>