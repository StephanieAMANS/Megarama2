<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mégarama Bordeaux</title>
    <link rel="stylesheet" href="style.css" />
    <title>Mégarama Bordeaux</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
    </style>
    <link rel="shortcut icon" type="image/x-icon" href="logoOnglet.png" />
</head>
<body>

<?php require 'items.php' ?>
<nav class="navbar open-mode" role="navigation">
    <?php
      require("navbar.php");
    ?>
</nav>

<div class=" all-body">
    <div class="first-part-body"></div>
    <div class="second-part-body">
        




        <section id="sectionAffiche" class="sectionAffiche">
            <h1> Bienvenue au Mégarama de Bordeaux</h1>
            <section>
                <div id="anchor-coming-soon"></div>
                <h3 class="h3-coming-soon"> Films prochainement à l'affiche<h3>
            <div class="coming-soon">
                <ul class="ul-coming-soon">
                    <li class="li-coming-soon"><a  href="https://www.imdb.com/title/tt7097896/?ref_=nv_sr_srsg_0"><img class="movies-coming-soon" src="img/venom.jpg"/></a> </li>
                    <li class="li-coming-soon"><a  href="https://www.imdb.com/title/tt10872600/?ref_=nv_sr_srsg_0"><img class="movies-coming-soon" src="img/spider.jpg"/></a> </li>
                    <li class="li-coming-soon"><a  href="https://www.imdb.com/title/tt10366514/?ref_=fn_al_tt_2"><img class="movies-coming-soon" src="img/eifel.jpg"/></a> </li>       
            </div>
        </section>   
            <h2 class = "actual-movies-title">à l'affiche</h2>
            <div class = "actual-movies">
                <?php foreach ($actualMovies as $key => $movieDetails): ?>
                    <div class="overlay">
                        <a class="link-movies" href="<?= $movieDetails['synopsis']?>" target="_blank">
                            <div class="content-overlay"></div>
                            <img class="films" src="<?= $movieDetails['img']?>" alt="<?= $movieDetails['title']?>">
                            <div class="overlay-details overlay-bottom">
                                <h3 class="overlay-title">+ d'infos</h3>
                            </div>
                        </a>
                        <a class="link-movies2" href="http://bordeaux.megarama.fr/FR/achat-place" target="blank">
                            <div class="overlay-details2 overlay-bottom2">
                                <h3 class="overlay-title2">réserver</h3>
                            </div>
                        </a>

                    </div>
                <?php endforeach; ?>
            </div>
        </section>

  
        <?php
            require("appli.php");
        ?>

        <?php
            require("contact.php");
        ?>


    </div>
    <div class="third-part-body"></div>
</div>

<footer>
    <?php
    require("footer.php");
    ?>
</footer>

<script src ="script.js"></script>
</body>
</html>