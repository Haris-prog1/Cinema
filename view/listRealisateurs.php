<?php ob_start(); ?>
<table>
  <thead>

  <tbody>
    <thead>
      <!-- Tableau de classe table, recueillant différentes propriétés, la couleur, titre... -->
      <table class="table">
        <tr style="background: linear-gradient(#000044, #000000); color: #FFFFFF;">
          <th class="titreNavprincipale" scope="col">Nom</th>
          <th class="titreNavsecondaire" scope="col">Prénom</th>
    </thead>
  </tbody>
  <?php
  $realisateurs = $requete->fetchAll();
  foreach ($realisateurs as $realisateur) { ?>
    <tr class="table-row" style="background-color: #999999;">
      <td class="blocBody"><a style="color:#2D241E;"
          href="index.php?action=detailRealisateur&id=<?= $realisateur["id_realisateur"] ?>"><?= $realisateur["nom"] ?></a>
      </td>
      <td class="blocBody"><a style="color:#2D241E;"
          href="index.php?action=detailRealisateur&id=<?= $realisateur["id_realisateur"] ?>"><?= $realisateur["prenom"] ?></a>
      </td>


    </tr> <?php } ?>
  </tbody>
</table>
<?php

$titre = "Liste des acteurs";
$titre_secondaire = "Liste des acteurs";
$content = ob_get_clean();
require "view/template.php";
