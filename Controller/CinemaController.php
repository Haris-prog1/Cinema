<?php

namespace Controller;
use Model\Connect;

class CinemaController
{
    public function main()
    {
        $pdo = Connect::seConnecter();
        $requeteFilm = $pdo->prepare("SELECT titre, image_url FROM film ORDER BY annee_sortie DESC LIMIT 9;");
        $requeteFilm->execute([]);
        require "./view/home.php";
    }

    public function listFilms()
    {
        $pdo = Connect::seConnecter();
        // Préparez la requête SQL avec une clause WHERE pour filtrer par titre
        $requete = $pdo->prepare("SELECT id_film, titre, annee_sortie, duree, resume FROM film");

        // Exécutez la requête avec le paramètre correct
        $requete->execute();

        // Inclusion du fichier de vue
        require "view/listFilms.php";
    }

    // Fonction permettant de récuperer la liste des acteurs et de l'afficher dans la view que l'on désire
    // Chaqu'une des fonction comprends une méthode de connexion, une requête que l'on prépare, puis execute, qu'on appel dans la view mentionné dans le require:
    public function listActeurs()
    {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare("SELECT concat(p.nom, p.prenom) as libelle, p.date_naissance, p.sexe, id_acteur FROM acteur a INNER JOIN personne p ON p.id_personne = a.personne_id");
        $requete->execute();
        require "view/listActeurs.php";
    }

    // Fonction permettant de récuperer la liste des réalisateurs et de l'afficher dans la view que l'on désire
    public function listRealisateurs()
    {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare("SELECT r.id_realisateur, r.personne_id, p.nom, p.prenom FROM realisateur r INNER JOIN personne p ON p.id_personne = r.personne_id");
        $requete->execute();
        require "view/listRealisateurs.php";
    }

    // Fonction permettant de récuperer la liste des rôles et de l'afficher dans la view que l'on désire
    public function listRoles()
    {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare("SELECT id_role, libelle FROM role");
        $requete->execute();
        require "view/listRoles.php";
    }

    // Fonction permettant de récuperer la liste des genre et de l'afficher dans la view que l'on désire
    public function listCinema()
    {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare("SELECT id_genre, libelle FROM genre");
        $requete->execute();
        require "view/listCinema.php";
    }

    // Fonction permettant de récuperer le détail du film et de l'afficher dans la view que l'on désire
    public function detailFilm($id)
    {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare("SELECT * FROM film WHERE id_film = :id");
        $requete->execute(['id' => $id]);

        $casting = $pdo->prepare("SELECT CONCAT(p.nom, ' ', p.prenom) AS civilte, r.libelle, p.image FROM personne p INNER JOIN acteur a ON p.id_personne = a.personne_id INNER JOIN casting c ON c.acteur_id = a.id_acteur INNER JOIN role r ON r.id_role = c.role_id WHERE film_id = :id");
        $casting->execute(['id' => $id]);
        require "view/detailFilm.php";
    }

    // Fonction permettant de récuperer le détail d'un acteur et de l'afficher dans la view que l'on désire
    public function detailActeur($id)
    {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare("SELECT id_acteur, nom, prenom FROM acteur INNER JOIN personne WHERE personne.id_personne = acteur.personne_id AND id_acteur = :id");
        $requete->execute(['id' => $id]);

        $dActeur = $pdo->prepare("SELECT f.titre, r.libelle FROM acteur a INNER JOIN casting c ON c.acteur_id = a.id_acteur INNER JOIN film f ON f.id_film = c.film_id INNER JOIN role r ON r.id_role = c.role_id WHERE id_acteur = :id");
        $dActeur->execute(['id' => $id]);
        require "view/detailActeur.php";
    }

    // Fonction permettant de récuperer le détail d'un réalisateur et de l'afficher dans la view que l'on désire
    public function detailRealisateur($id)
    {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare("SELECT id_realisateur, nom, prenom FROM realisateur r INNER JOIN personne p ON p.id_personne = r.personne_id WHERE id_realisateur = :id");
        $requete->execute(['id' => $id]);

        $detailRealisateur = $pdo->prepare("SELECT f.titre, g.libelle, f.annee_sortie, f.duree, f.note FROM genre_film gf INNER JOIN film f ON f.id_film = gf.film_id INNER JOIN realisateur r ON f.realisateur_id = r.id_realisateur INNER JOIN genre g ON g.id_genre = gf.genre_id WHERE f.realisateur_id = :id");
        $detailRealisateur->execute(['id' => $id]);
        require "view/detailRealisateur.php";
    }

    // Fonction permettant de récuperer le détail d'un rôle et de l'afficher dans la view que l'on désire
    public function detailRole($id)
    {
        $pdo = Connect::seConnecter();
        $requete = $pdo->prepare("SELECT id_role, libelle FROM role WHERE id_role = :id");
        $requete->execute(['id' => $id]);

        $infoRoles = $pdo->prepare("SELECT p.nom, p.prenom FROM personne p INNER JOIN acteur a ON a.personne_id = p.id_personne INNER JOIN casting c ON c.acteur_id = a.id_acteur INNER JOIN film f ON f.id_film = c.film_id WHERE c.role_id = :id");
        $infoRoles->execute(['id' => $id]);
        require "view/detailRole.php";
    }

    // Fonction permettant de récuperer le détail des films qui répondes à un id de genre et de l'afficher dans la view que l'on désire
    public function detailCinema($id)
    {
        $pdo = Connect::seConnecter();
        $detailCinema = $pdo->prepare("SELECT f.titre, f.annee_sortie, f.duree, f.resume, f.note FROM genre g INNER JOIN genre_film gf ON gf.genre_id = g.id_genre INNER JOIN film f ON f.id_film = gf.film_id WHERE g.id_genre = :id");
        $detailCinema->execute(['id' => $id]);
        require "view/detailCinema.php";
    }
}
;
