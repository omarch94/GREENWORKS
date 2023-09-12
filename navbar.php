<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleind.css">

</head>
<body>
<header>
        <div class="logo">
            <a href="Aindex.php">
            <img src="image/leaf.png" alt="">
            <h1> Greenworks</h1>
            </a>
        </div>
        <ul class="menu">
            <li><a href="Aindex.php">Accueil</a></li>
            <li><a href="Quisomme.php">Qui sommes Nous ?</a></li>
            <li><a href="liste_greenwork.php">Tous les Greenworks</a></li>
            <li><a href="seconnecter.php">se connecter</a></li>
        </ul>
        <div class="number">
            <p><a href="#contact">Contactez-nous</a></p>
        </div>
        <div class="small_menu">
            <span>
                <div></div>
                <div></div>
            </span>
            <span>
                <div></div>
                <div></div>
            </span>
        </div>

    </header>
    <script>
        var small_menu = document.querySelector(".small_menu");
        var menu = document.querySelector(".menu");
        small_menu.onclick = function(){
            small_menu.classList.toggle('active');
            menu.classList.toggle('small');
        }
        

    </script>
</body>
</html>