<?php ob_start();?>

<thead>
<table class="table">
    <!-- Tableau de classe table, recueillant différentes propriétés, la couleur, titre... -->
            <tr style="background: linear-gradient(#000044, #000000); color: #FFFFFF;">
                
                <th class="titreNavprincipale" scope="col">Titre</th>
                <th class="titreNavsecondaire"scope="col">Année de sortie</th>
                <th class="titreNavsecondaire"scope="col">Duree</th>
                <th class="titreNavsecondaire"scope="col">Resume</th>
                <th class="titreNavsecondaire"scope="col">Note</th>
            </tr>   




    </thead>
</tbody>
<?php

?>
<?php $detailCinema = $detailCinema->fetchAll();
// Requète acteur permettant de récupéré les différentes données émises par la requète, retournant un seul resultat, la requête secondaire, en renvoie plusieurs.

?>
         <?php
         // Boucle foreach, permettant création d'un tableau pour chaque ligne de résultats, avec titre, couleurs etc.
          foreach ($detailCinema as $detail) { ?>
        <tr class="table-row" style="background-color: #999999; color:#454454;">
        <td class="blocBody" style="color:#2D241E;"><?= $detail['titre'] ?></td>
        <td class="blocBody" style="color:#2D241E;"><?= $detail['annee_sortie']?></td>
        <td class="blocBody" style="color:#2D241E;"><?= $detail['duree'] ?></td>
        <td class="blocBody" style="color:#2D241E;"><?= $detail['resume'] ?></td>
        <td class="blocBody" style="color:#2D241E;"><?= $detail['note'] ?></td>
        </tr>
    <?php } ?>
</tbody>
</table>
<?php  

$titre = "Liste des genre";
$titre_secondaire = "Liste des genre";
$content= ob_get_clean();
require "view/template.php";
