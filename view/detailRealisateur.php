<?php ob_start();?>
<table class="table">
<thead>
    <!-- Tableau de classe table, recueillant différentes propriétés, la couleur, titre... -->

        <tr style="background: linear-gradient(#000044, #000000); color: #FFFFFF;"></>
            
        <th class="titreNavprincipale" scope="col">Titre</th>
        <th class="titreNavsecondaire" scope="col">Libelle</th>
        <th class="titreNavsecondaire" scope="col">Année de sortie</th>
        <th class="titreNavsecondaire" scope="col">Durée</th>
        <th class="titreNavsecondaire" scope="col">Note</th>
            
            
            
        </tr>
    </thead>
</tbody>
<?php
// Requète acteur permettant de récupéré les différentes données émises par la requète, retournant un seul resultat, la requête secondaire, en renvoie plusieurs.

$realisateur = $requete->fetch();
$detailRealisateur = $detailRealisateur->fetchAll();

?>
      
        <?php foreach ($detailRealisateur as $detRealisateur)
                // Boucle foreach, permettant création d'un tableau pour chaque ligne de résultats, avec titre, couleurs etc.
         { ?>
          <tr class="table-row" style="background-color: #999999;color:#454454">
        <td class="blocBody" style="color:#2D241E;"> <?= $detRealisateur['titre'] ?></td>
        <td class="blocBody" style="color:#2D241E;"><?= $detRealisateur['libelle']?></td>
        <td class="blocBody" style="color:#2D241E;"><?= $detRealisateur['annee_sortie']?></td>
        <td class="blocBody" style="color:#2D241E;"><?= $detRealisateur['duree']?></td>
        <td class="blocBody" style="color:#2D241E;"><?= $detRealisateur['note']?></td>
        </tr>
        
    <?php } ?>
</tbody>
</table>
<?php  

$titre = "Liste des realisateurs";
$titre_secondaire = "Liste des realisateurs";
$content= ob_get_clean();
require "view/template.php";
