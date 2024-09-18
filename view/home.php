<?php
use Controller\CinemaController;

ob_start();
?>
<!-- Wrapper pour afficher l'image avec l'animation du zoom -->
<div id="wrapper2" class="wrapper2">
  <div class="content">
    <section class="section hero"></section>
    <section class="section gradient-purple"></section>
    <section class="section gradient-blue"></section>
  </div>
  <div class="image-container">
    <img src="https://assets-global.website-files.com/63ec206c5542613e2e5aa784/643312a6bc4ac122fc4e3afa_main%20home.webp" alt="image">
  </div>
</div>




<?php
$films = $requeteFilm->fetchAll();?>

<!-- Carroussel de films qui tourne, avec affichage dynamique PHP -->
<div class="wrapper">
  <div class="carousel">
    <?php foreach ($films as $film) { ?>
      <div class="carousel__cell";>
      <img src="<?= htmlspecialchars($film["image_url"]) ?>" alt="Image">
        <?= htmlspecialchars($film["titre"]) ?></div>
    <?php } ?>
  </div>
</div>
<div class="items">
    <div class="item" tabindex="0" style="background-image: url(https://res.cloudinary.com/dyvotpxft/image/upload/v1723483677/6_cyknpp.png)"></div>
    <div class="item" tabindex="0" style="background-image: url(https://res.cloudinary.com/dyvotpxft/image/upload/v1723483676/3_mxnxwe.png)"></div>
    <div class="item" tabindex="0" style="background-image: url(https://res.cloudinary.com/dyvotpxft/image/upload/v1723483677/7_pse522.png)"></div>
    <div class="item" tabindex="0" style="background-image: url(https://res.cloudinary.com/dyvotpxft/image/upload/v1723484005/21_wbsty7.png)"></div>
    <div class="item" tabindex="0" style="background-image: url(https://res.cloudinary.com/dyvotpxft/image/upload/v1723483677/5_tyr6bh.png)"></div>
    <div class="item" tabindex="0" style="background-image: url(https://res.cloudinary.com/dyvotpxft/image/upload/v1723483676/2_zja2bq.png)"></div>
    <div class="item" tabindex="0" style="background-image: url(https://res.cloudinary.com/dyvotpxft/image/upload/v1723483677/4_zwjtxg.png)"></div>
    <div class="item" tabindex="0" style="background-image: url(https://res.cloudinary.com/dyvotpxft/image/upload/v1723483676/1_zlqnwl.jpg)"></div>
    <div class="item" tabindex="0" style="background-image: url(https://res.cloudinary.com/dyvotpxft/image/upload/v1723483677/8_ucihr5.png)"></div>
    <div class="item" tabindex="0" style="background-image: url(https://res.cloudinary.com/dyvotpxft/image/upload/v1723483676/16_epnmqm.png)"></div>
    <div class="item" tabindex="0" style="background-image: url(https://res.cloudinary.com/dyvotpxft/image/upload/v1723483676/15_voqq0c.png)"></div>
    <div class="item" tabindex="0" style="background-image: url(https://res.cloudinary.com/dyvotpxft/image/upload/v1723484270/Screenshot_23_8_nbzwdm.png)"></div>
      
    </div>
  

  

















<?php
$titre = "Liste des films";
$titre_secondaire = "Liste des films";
$content = ob_get_clean();
require "./view/template.php";
?>