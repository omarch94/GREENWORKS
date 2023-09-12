<?php 
session_start();
if(count($_SESSION)==0){
    header("Location:seconnecter.php");
}else{
    if(isset($_GET["login"])){
        extract($_GET);
        include("bdconnect.php");
try{
    $r=$based->prepare("SELECT * FROM greenworkp WHERE auteur=?");
    $r->execute([$login]);
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
    <h2 class="titre"> Vous pouvez ajouter encore d'autre greenworks :Mr/Mrs <?php echo $_SESSION["prenom"] ?></h2>
    <div class="number1 ">
    <h2><a href="ajoutergreenwork.php?login=<?php echo $login;?>">ajoutergreenwork</a></h2>
    <h2><a href="deconnection.php"> se deconnecter</a></h2>
        </div>
        <table border="1">
<thead>
<th> ID green</th>
<th> Titre</th>
<th> Description </th>
<th> Image</th>
<th> Auteur</th>
</thead>
<tbody>
<?php 
foreach($greens as $green){
    echo"<tr>";
    $id=$green[0];
    echo"<td>".$green[0]."</td>";
    echo"<td>".$green[1]."</td>";
    echo"<td>".$green[2]."</td>";
    echo"<td><img src='".$green[3]."'></td>";
    
    echo"<td>".$_SESSION["prenom"]."</td>";
   
    echo "<td><a href='supprimergreen.php?id=$id' onClick=\"return confirm('Voulez vous vraiment supprimer le greenwork?')\"><img src='image/delete.png'></a> <a href='modifiergreen.php?id=$id'><img src='image/edit.png'></a> ";
}
?>

</tbody>
</table>

</body>

</html>
<?php } }?>
