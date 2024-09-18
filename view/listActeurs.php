<?php 
ob_start();
?>
    <thead>
<!-- Tableau de classe table, recueillant différentes propriétés, la couleur, titre... -->
<table class="table">
        
        <tr style="background: linear-gradient(#000044, #000000); color: #FFFFFF;">
            <th class="titreNavprincipale" scope="col">Nom</th>
            <th class="titreNavsecondaire" scope="col">Date de naissance</th>
            <th class="titreNavsecondaire" scope="col">Sexe</th>
        </tr>
    </thead>
    <tbody>
    <?php   
    // Récupérer tous les acteurs
    $acteurs = $requete->fetchAll();
    foreach($acteurs as $acteur) { ?>
        <tr class="table-row" style="background-color: #999999;">
            <td class="blocBody">
                <a style="display: block; color:#2D241E;" href="index.php?action=detailActeur&id=<?= $acteur['id_acteur'] ?>">
                    <?= htmlspecialchars($acteur['libelle']) ?>
                </a>
            </td>
            <td class="blocBody">
                <a style="display: block; color:#2D241E;" href="index.php?action=detailActeur&id=<?= $acteur['id_acteur'] ?>">
                    <?= htmlspecialchars($acteur['date_naissance']) ?>
                </a>
            </td>
            <td class="blocBody">
                <a style="display: block; color:#2D241E;" href="index.php?action=detailActeur&id=<?= $acteur['id_acteur'] ?>">
                    <?= htmlspecialchars($acteur['sexe']) ?>
                </a>
            </td>
        </tr>
<?php } ?>

    </tbody>
</table>
<?php  
$titre = "Liste des acteurs";
$titre_secondaire = "Liste des acteurs";
$content = ob_get_clean();
require "view/template.php";
?>

