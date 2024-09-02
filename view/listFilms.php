    <?php ob_start();?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount() ?>films</p>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>TITRE</th>
            <th>ANNEE SORTIE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // foreach($requete->fetchAll($films) as $film) 
        $film = $requete->fetch();
        foreach($titres as $film) { 
        echo $film["titre"] .["annee_sortie"] . ['duree'] . ['synopsis']; 
}?>
        <tr>
            <td><?= $film["titre"] ?></td>
            <td><?= $film["annee_sortie"]?></td>
        </tr>
    </tbody>
    </table>

    <?php

    $titre = "Liste des films";
    $titre_secondaire = "Liste des films";
    $film = $requeteFilm->fetch();
    echo $film["titre"];
    $contenu = ob_get_clean();
    require "view/template.php";

