<?php ob_start();?>
<thead>
    <table class="table">
    <!-- Tableau de classe table, recueillant différentes propriétés, la couleur, titre... -->

        <tr style="background: linear-gradient(#000044, #000000); color: #FFFFFF;">
            <th>Nom</th>
            <th>Prénom</th>
            
            
        </tr>
    </thead>
</tbody>
<?php
// Requète acteur permettant de récupéré les différentes données émises par la requète, retournant un seul resultat, la requête secondaire, en renvoie plusieurs.

$role = $requete->fetch();
$infoRoles = $infoRoles->fetchAll();

?>
  


     <?php foreach
             // Boucle foreach, permettant création d'un tableau pour chaque ligne de résultats, avec titre, couleurs etc.
         ($infoRoles as $Roles) { ?>
        <tr class="table-row" style="background-color: #999999; color:#454454;">
        <td class="blocBody" style="color:#2D241E;">
        <?= $Roles['nom'] ?></td>
        <td class="blocBody" style="color:#2D241E;"><?= $Roles['prenom'] ?></td></tr>
        
    <?php ;} ?>
          
</tbody>
</table>
<?php  

$titre = "Liste des roles";
$titre_secondaire = "Liste des roles";
$content= ob_get_clean();
require "view/template.php";
