<?php ob_start();?>
<thead>
    <table class="table">
    
<!-- Tableau de classe table, recueillant différentes propriétés, la couleur, titre... -->
        <tr style="background: linear-gradient(#000044, #000000); color: #FFFFFF;">
            <th class="titreNavprincipale" scope="col">Titre</th>
            <th class="titreNavsecondaire" scope="col">Libelle</th>
            
        </tr>
    </thead>
</tbody>
<?php
// Requète acteur permettant de récupéré les différentes données émises par la requète, retournant un seul resultat, la requête secondaire, en renvoie plusieurs.
$acteur = $requete->fetch();
$dActeur = $dActeur->fetchAll();

?>

     
    
     
       
          
    

        <?php
        // Boucle foreach, permettant création d'un tableau pour chaque ligne de résultats, avec titre, couleurs etc.
         foreach ($dActeur as $acteurDetail) { ?>
            
            <tr class="table-row" style="background-color: #999999;color:#454454">
        <td class="blocBody">
            <a style="display: block; color:#2D241E;" href="index.php?action=detailActeur&id=">
                <?= htmlspecialchars($acteurDetail['libelle']) ?>
            </a>
        </td>
        <td class="blocBody">
            <a style="display: block; color:#2D241E" href="index.php?action=detailActeur&id=">
                <?= htmlspecialchars($acteurDetail['titre']) ?>
            </a>
        </td>
    </tr>


    <?php } ?>
          
</tbody>
</table>
<?php  

$titre = "Liste des acteurs";
$titre_secondaire = "Liste des acteurs";
$content= ob_get_clean();
require "view/template.php";
