
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecologie</title>
    <link rel="stylesheet" href="styleind.css">
    <link rel="shortcut icon" href="image/leaf.png" type="image/x-icon"/>


</head>
<body>
    <?php
    include("navbar.php");
    ?>


<!-- home -->

    <section class="home">
        <div class="left">
            <h1>Univers<span> Green<span></h1>
            <h1>works</h1>
            <p>transformez vos <span>vieux objets</span> en objets précieux
            </p>
            <p>Le système alternatif de recyclage géré par des personnes (Ecorésponsables) autour de la planète.
            </p>
            
            <button class="button-link">
                <a href="Quisomme.php">Nous connaitre !</a>
                <a href="inscription.php">Devenir Recycleur !</a>


            </button>
        </div>
        <div class="right">
            <img src="image/img1.jpg">
        </div>
    </section>


    <!-- services -->
    
    <section class="services">
        <h1 class="title">POURQUOI IL EST INDISPENSABLE DE RECYCLER SES DÉCHETS</h1>
        <div class="list_service">
            <div class="serv">
                <img src="image/green.png" alt="">
                <h4>RESPECTER L’ENVIRONNEMENT
                </h4>
                <ul>
                    <li>Recycler ses cartons évite l’abattage de milliers d’arbres chaque année.
                    </li>
                    <li>Recycler le verre permet d’économiser du sable.
                    </li>
                    <li>Recycler le plastique réduit la consommation de pétrole.
                    </li>
                    <li>Recycler l’aluminium permet de réduire l’extraction de boxite, une roche riche en alumine Al2O3 et en oxydes de fer.
    
                    </li></ul>        
                          
            </div>
            <div class="serv">
                <img src="image/camion-de-livraison.png" alt="">
                <h4>Réduire les gaz à effet de serre</h4>
                <ul>
                    <li>Le recyclage d’une tonne de papier ou de carton revient, par exemple, à éviter un trajet en voiture de 270 km.
                    <li>  Recycler une tonne de plastique recyclé permet d’économiser un trajet en voiture de 15 300 km.
                    </li>
                    <li>Quant au recyclage d’une tonne de verre, il revient à éviter un trajet en voiture de 3 700 km.
                    </li>
                    <li>  Trier 30 000 tonnes de matières revient à éviter près de 140 millions de kilomètres de trajet en voitures !
                    </li></ul>                   
            </div>
            
            <div class="serv">
                <img src="image/energy.png" alt="">
                <h4>Économiser l’énergie</h4>
                <ul>
                    <li>une tonne de cartons recyclés permet d’économiser l’équivalent d’1 an de la consommation en énergie d’un habitant et 6 mois de sa consommation d'eau.
                    </li>
                    <li>Une tonne de verre recyclé fait économiser l’équivalent de 2 mois de consommation en énergie et 8 jours de consommation d’eau d’un habitant.
                    </li>
                    <li>Une tonne d’aluminium recyclé permet d’éviter l’équivalent d’1 an de consommation énergétique et 5 mois de consommation d’eau d’un habitant.
                    </li>
                    <li>Enfin, 1 tonne d’acier recyclé permet d’économiser l’équivalent de 9 mois de consommation en énergie et 6 mois de la consommation en eau d’un habitant.
    
                    </li></ul>
             
            </div>
        </div>
    </section>
    
<!--Partagez vos greenwor-->
<h2 class="title" id="part">PARTAGEZ VOS GREENWORKS</h2>
<div class="containercarte">
    <div class="carte" id="card1">
      <img src="https://irepo.primecp.com/2015/04/218016/Recycled-egg-carton-bowls_2_Large600_ID-966403.jpg?v=966403">
      <p>Produits organiques</p>
    </div>
    <div class="carte" id="card2">
      <img src="https://images.unsplash.com/photo-1564419434663-c49967363849?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=465&q=80">
      <p>Cartonne</p>
    </div>
    <div class="carte" id="card3">
      <img src="https://images.unsplash.com/photo-1623074655373-f3d63a74705f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=513&q=80">
      <p>Plastique et Métal</p>
    </div>
    <div class="carte" id="card4">
      <img src="https://images.unsplash.com/photo-1587578360445-3e451cdb1c46?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=465&q=80">
      <p>Autres</p>
    </div>
    
  </div>

    <!-- about -->

    <section class="about">
        <h2 class="title">Voici comment ça marche  </h2>

        <div class="list_about">
            <h1>1</h1>
            <div class="description">
            <h3> Soyez parmis no collaboreteurs et créez votre compte</h3>
            <button class="button-link">
                <a href="inscription.php">Créez votre compte</a>
            </button>
            </div>
        </div>
        <div class="list_about">
            <h1>2</h1>
            <div class="description">
                <h3> Connectez vous et partagez vos Greenworks</h3>
                <button class="button-link">
                    <a href="seconnecter.php">Connectez-vous!</a>
                </button>
            </div>
        </div>
        <div class="list_about">
            <h1>3</h1>
            <div class="description">
                <h3>Essayez de sensibiliser vos proches au bienfaits du recylage</h3>
                <button class="button-link">
                    <a href="liste_greenwork.php">Découvrez toutes les Greenworks!</a>
                </button>         
                  </div>
        </div>
        
    </section>

    <!-- contact -->
    <?php 
    
    ?>
    <section class="contact" id="contact">
        <h1 class="title">Contactez nous</h1>
        <div class="form-image">
            <form>
                <input type="text" placeholder="Nom">
                <input type="text" placeholder="Adresse Mail">
                <input type="text" placeholder="Objet du Message">
                <textarea  id="" cols="30" rows="10" placeholder="Votre Message"></textarea>
                <button class="button-link form_btn">
                    <a href="#">Envoyer Votre message</a>
                </button>
            </form>
            <div class="image">
                <img src="image/img2.jpg" >
            </div>
        </div>
    </section>
 

    <!-- Footer-->



    <script>
        var small_menu = document.querySelector(".small_menu");
        var menu = document.querySelector(".menu");
        small_menu.onclick = function(){
            small_menu.classList.toggle('active');
            menu.classList.toggle('small');
        }
        
    </script>
    <!-- <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>


<script defer src="https://unpkg.com/scrollreveal"></script> -->

 <footer>
<?php include("footer.php") ?>
    </footer> 
</body>
</html>