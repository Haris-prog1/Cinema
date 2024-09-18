<?php ob_start(); ?>
<table>
    <thead>
<!-- Début du tableau -->
<table class="table">
    <!-- En-tête du tableau -->
    <thead>
        <tr style="background: linear-gradient(#000044, #000000); color: #FFFFFF;">
            <!-- En-tête de la colonne avec un style de fond dégradé et texte blanc -->
            <th class="titreNavsecondaire" scope="col">Libelle</th>
        </tr>
    </thead>

    <!-- Corps du tableau -->
    <tbody>
        <?php
        // Exécution de la requête pour obtenir tous les rôles
        $roles = $requete->fetchAll();
        
        // Boucle à travers chaque rôle retourné par la requête
        foreach ($roles as $role) { ?>
            <!-- Ligne du tableau pour chaque rôle avec une couleur de fond grise -->
            <tr class="table-row" style="background-color: #999999;">
                <!-- Cellule contenant un lien vers les détails du rôle -->
                <td class="blocBody">
                    <!-- Lien vers la page des détails du rôle avec l'identifiant du rôle dans l'URL -->
                    <a style="color:#2D241E;" href="index.php?action=detailRole&id=<?= $role["id_role"] ?>">
                        <?= $role["libelle"] ?>
                    </a>
                </td>
            </tr> 
        <?php } ?>
    </tbody>
</table>


        <?php

        $titre = "Liste des rôles";
        $titre_secondaire = "Liste des rôles";
        $content = ob_get_clean();
        require "view/template.php";
