<?php

namespace Controller;
use Model\Connect;

class CinemaController{
    public function main(){
    $pdo = Connect::seConnecter();
    $requeteFilm = $pdo->prepare("SELECT titre FROM film ORDER BY annee_sortie DESC LIMIT 5;"); 
    
    $requeteFilm->execute([]);
     
     require "./view/home.php" ;
    }
    
    public function listFilms(){
        $pdo = Connect::seConnecter();
        // Préparez la requête SQL avec une clause WHERE pour filtrer par titre
        $requete = $pdo->prepare("SELECT titre, annee_sortie, duree, resume  FROM film  WHERE film.titre = titre");
        
        // Exécutez la requête avec le paramètre correct
        $requete->execute(["titre" => $requete]);
    
        // Inclusion du fichier de vue
        require "view/listFilms.php";
    }
    public function casting(){
        
    }
    
    public function detActeur($id) {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare("SELECT * FROM acteur WHERE id_acteur = :id");
        $requete->execute(["id" => $id]);
        require "view/acteur/detailActeur.php";
        
    }

    
};