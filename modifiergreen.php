<?php 
session_start();
if(count($_SESSION)==0){
    header("Location:seconnecter.php");
 }
 else{
     if(isset($_GET["id"])){
         extract($_GET);     
    include("bdconnect.php");
    $p=$_SESSION["login"];
}
try{
    $r = $based->prepare("SELECT * FROM greenworkp WHERE auteur =?");
            $r->execute([$p]);
            $aff=$r->fetch();
}
catch(PDOException $e){
die("ERrreur de selection greenwork  :".$e->getMessage());
}

?>
<html>
<head>
    <title>Modifier greenwork</title>
    <link rel="stylesheet" href="styleind.css">
    <link rel="shortcut icon" href="image/leaf.png" type="image/x-icon"/>

</head>
<body>
    <?php include("navbar.php") ?>
<form method="POST" enctype="multipart/form-data" class="greenform">
<fieldset>
    <legend>Modifier un greenwork </legend>
    <label for="a">Tire greenwork :</label>
    <input type="text" name ="tit"  value="<?php echo $aff[1] ;?>"><br>
    <label for="titre">Description :</label>
    <input type="text" name ="des" value="<?php echo $aff[2] ;?>"><br>


<label for="ed">Image greenwork :</label>
<input type="file" name ="image"  value=""><br>
<label for="a">Auteur :</label>
<input type="text" name ="aut"  value="<?php echo $p;?>"><br>
<input type="submit" name ="ajouter" value="Modifier " class="ajouter"><br>
</form>

</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    extract($_POST);
   
    if(isset($_FILES["image"]) && $_FILES["image"]["error"]==0 ){
        if($_FILES["image"]["size"]<=1000000){
            $t = $_FILES["image"]["type"];
            $exts=["image/png","image/jpg","image/gif","image/jpeg","image/ico","image/jfif"];
            if(in_array($t,$exts)){
                move_uploaded_file($_FILES["image"]["tmp_name"],"./image/".$_FILES["image"]["name"]);
            }
        }
    }
    try{
        $ri = $based->prepare("UPDATE greenworkp SET Titre=?,description=?,image=? WHERE  id=?");
        $ri->execute([$tit,$des,".\\image\\".$_FILES["image"]["name"],$id]);
        header("Location:mesgreenwork.php?login=$p");
    }
    catch(PDOException $e){
        die("Erreur d'insertion produit :".$e->getMessage());
    }
}


 }
?>
