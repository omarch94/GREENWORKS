<?php 

        include("bdconnect.php");
try{
    $r=$based->prepare("SELECT * FROM greenworkp");
    $r->execute();
    $greens = $r->fetchAll();
    
   }
   catch(PDOException $e){
       die("Erreur de selection greenwork".$e->getMessage());
   }
   
    
?>
<html>
<head>
    <title>liste des greenwork</title>
    <link rel="stylesheet" href="styleind.css">
    <link rel="shortcut icon" href="image/leaf.png" type="image/x-icon"/>

</head>
<body>
    <?php include("navbar.php"); ?>

        <h1 class="titre"> Découvrez une selection des Greenworks! </h1>
        <?php 
foreach($greens as $green){
    
    echo "<section class='sgreen'>";
    echo"<div><a href='liste_greenwork.php'><img src='".$green[3]."'></a></div>";
     echo "<div class='info'>";
    echo"<span> ID Green : </span><div>".$green[0]."</div>";
    echo"<span> Titre Green : </span><div>".$green[1]."</div>";
    echo"<span> Description  : </span><div>".$green[2]."</div>";
    echo"<span> Auteur : </span><div>".$green[4]."</div>";

    echo" </div>";
    echo"</section>";
}
?>

</table>
</body>
</html>
