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

    <section class="appli">
        <div class="linkAppli">
            <h2>Application Megarama</h2>
            <p class="txtAppli">L'appli qui vous emmène au cinéma</p>
            <a href="https://play.google.com/store/apps/details?id=fr.erakys.cinepack.mobile.megarama2&hl=fr&gl=US" target="_blank"><img class="appliLogo" src="img/googlestore.png" alt="andrLogo"></a>
            <a href="https://apps.apple.com/fr/app/cin%C3%A9mas-m%C3%A9garama/id1088585443" target="_blank"><img class="appliLogo" src="img/applelogo.png" alt="appleLogo"></a>
        </div>
        <div class="phoneAppli">
            <img class="phone" src="img/appliphone.png" alt="appliPhone">
        </div>
    </section>
  



    <section class="container">

<div id="left-part">
  

    <form id="contactForm">
      
    <h2 class="title-important">Contactez votre cinéma</h2>

<div id="formulaire" class="formulaire">
    <label class="contact-Form" for="name">Nom:</label><br>
    <input class="contact-Form" type="text" id="name" name="name" /><br>
     <label class="contact-Form" for="email">Adresse email:</label><br>
     <input class="contact-Form"
        type="email"
       id="email"
       name="email"
     /><br>
   <label class="contact-Form" for="message">Message:</label><br />
   <textarea class="contact-Form" id="message" name="message"></textarea>
    <br /><br>

 <button id="button" class="button">Envoyer</button>
</div>
    </form>
</div>

  <div id="right-part">
  <h3 class="title1">Adresse</h3> 
  <h4 class="title2">Megarama Bordeaux</h4>

   <ul class="information">
      <li>7 Quai des Queyries<br>33100 Bordeaux</li>
      <li>Téléphone : 05 56 40 66 70</li>   
      <li>Moyens d'accés :</li>
        <ul class="acces">
         <li>Accés tramway Ligne A, arrêt Stalingrad</li>
         <li>Batcub arrêt Pont de Pierre</li>
         <li>Stations Vcub et BlueCub à proximité</li>
         <li>Lignes de bus 10/16/27/28/45/80/91/92, arrêt Stalingrad</li>
      </ul>
    </ul>
   
      <img class="map" src="img/plan-megarama-bordeaux.jpg" alt="map" >
    </div>
 

</section>
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