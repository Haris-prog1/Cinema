<?php ob_start();?>
<thead>
<table class="table">
 <!-- Tableau de classe table, recueillant différentes propriétés, la couleur, titre... -->   
<tr style="background: linear-gradient(#000044, #000000); color: #FFFFFF;">
            <th class="titreNavprincipale" scope="col">Libelle Acteur</th>
            <th class="titreNavsecondaire" scope="col">Rôle(s) joué(s) :</th>
            <th class="titreNavsecondaire" scope="col">Image</th>


        </tr>
    </thead>
</tbody>
<?php
$films = $requete->fetch(); 
$casting = $casting->fetchAll();
// Requète acteur permettant de récupéré les différentes données émises par la requète, retournant un seul resultat, la requête secondaire, en renvoie plusieurs.


?>



         <?php 
                 // Boucle foreach, permettant création d'un tableau pour chaque ligne de résultats, avec titre, couleurs etc.
         foreach ($casting as $cast) { ?>

            <tr class="table-row" style="background-color: #999999; color:#454454;">
                <td class="blocBody" style="color:#2D241E;">
                    <?= htmlspecialchars($cast['civilte']) ?></td>
                    <td class="blocBody" style="color:#2D241E;">
                    <?= htmlspecialchars($cast['libelle']) ?>
                    </td>
                    <td class="blocBody" style="width:10%;">
                   <img style="height:100%; width: 100%;" src="<?= $cast['image']?>" alt="<?= $cast['civilte']?>"> <!-- -->
                    </td>
            </tr>
        <?php } ?>

          
          

        
</tbody>
</table>
<?php  

$titre = "Liste des films";
$titre_secondaire = "Liste des films";
$content= ob_get_clean();
require "view/template.php";
