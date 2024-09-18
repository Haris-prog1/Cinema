<?php ob_start(); ?>

    <thead>


        <table class="table">
            <!-- Tableau de classe table, recueillant différentes propriétés, la couleur, titre... -->
            <tr style="background: linear-gradient(#000044, #000000); color: #FFFFFF;">
                
                <th class="titreNavsecondaire" scope="col">Libelle</th>

            </tr>




            </tr>
    </thead>

    <?php
    $genres = $requete->fetchAll();
    // Requète acteur permettant de récupéré les différentes données émises par la requète, retournant un seul resultat, la requête secondaire, en renvoie plusieurs.



    
    // Boucle foreach, permettant création d'un tableau pour chaque ligne de résultats, avec titre, couleurs etc.
    foreach ($genres as $genre){ ?>

        <tr class="table-row" style="background-color: #999999;">
            <td class="blocBody"><a style="color:#2D241E;"
                    href="index.php?action=detailCinema&id=<?= $genre["id_genre"] ?>"><?= $genre["libelle"] ?></a></td>


        </tr> <?php } ?>






    </tbody>


</table>

<?php

$titre = "Liste des genres";
$titre_secondaire = "Liste des genres";
$content = ob_get_clean();
require "view/template.php";
