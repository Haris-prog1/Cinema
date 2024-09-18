<?php ob_start(); ?>

<!-- <p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount() ?> films</p>

<table class="uk-table uk-table-stripped">
    <
        <tr>
            <th>TITRE</th>
            <th>ANNEE SORTIE</th>
            <th>Durée</th>
            <th>Resumé</th> -->

<tbody>
  <thead>
    <!-- Tableau de classe table, recueillant différentes propriétés, la couleur, titre... -->
  <table class="table">
      <tr style="background: linear-gradient(#000044, #000000); color: #FFFFFF;">
        <th class="titreNavprincipale" scope="col">Titre</th>
        <th class="titreNavsecondaire" scope="col">Année de sortie</th>
        <th class="titreNavsecondaire" scope="col">Durée</th>
        <th class="titreNavsecondaire" scope="col">Résumé</th>
      </tr>
    </thead>

    <?php
    // Exécutez la requête pour récupérer les films
    $films = $requete->fetchAll(); // Suppose que $requete est déjà définie
    foreach ($films as $film) { ?>
      <tr class="table-row" style="background-color: #999999; color:#2D241E;">
        <td class="blocBody" style="color:#2D241E"><a href="index.php?action=detailFilm&id=<?= $film["id_film"] ?>"
            style="color:#2D241E;"><?= ($film["titre"]) ?></a></td>
        <td class="blocBody" style="color:#2D241E"><?= ($film["annee_sortie"]) ?></td>
        <td class="blocBody" style="color:#2D241E"><?= ($film["duree"]) ?> min</td>
        <td class="blocBody" style="color:#2D241E"><?= ($film["resume"]) ?></td>
      </tr>
    <?php } ?>





  </table>
</tbody>








<?php

$titre = "Liste des films";
$titre_secondaire = "Liste des films";
$content = ob_get_clean();
require "view/template.php";

