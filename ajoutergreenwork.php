<?php 
session_start();
if(count($_SESSION)==0){
    header("Location:seconnecter.php");
 } else{
     include("bdconnect.php");
    if(isset($_GET["login"])){
        extract($_GET);
    }
?>
<html>
<head>
    <title>Ajouter greenwork</title>
    <link rel="shortcut icon" href="image/leaf.png" type="image/x-icon"/>

</head>
<body>
    <?php include("navbar.php"); ?>

    <section class="diss">
        <h1> Partagez avec nous vos Greenworks</h1>
</section>
<form method="POST" enctype="multipart/form-data" class="greenform">
<fieldset>
    <legend>Ajouter un greenwork </legend>
<label for="titre">Titre :</label>
<input type="text" name ="des" value=""><br>
<label for="a">description  :</label>
<input type="text" name ="tit"  value=""><br>


<label for="ed">Image Produit :</label>
<input type="file" name ="photo"  value=""><br>
<label for="a">Auteur :</label>
<input type="text" name ="aut"  value="<?php echo $login; ?>"><br>

<input type="submit" name ="ajouter" value="Ajouter" class="ajouter"><br>
</form>
</body>

</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    extract($_POST);
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"]==0 ){
        if($_FILES["photo"]["size"]<=1000000){
            $t = $_FILES["photo"]["type"];
            $exts=["image/png","image/jpg","image/gif","image/jpeg","image/ico","image/jfif"];
            if(in_array($t,$exts)){
                move_uploaded_file($_FILES["photo"]["tmp_name"],"./image/".$_FILES["photo"]["name"]);
            }
        }
    }
    try{
        $ri = $based->prepare("INSERT INTO greenworkp(titre,description,image,auteur) VALUES (?,?,?,?)");
        $ri->execute([$tit,$des,".\\image\\".$_FILES["photo"]["name"],$aut]);
        header("Location:mesgreenwork.php?login=$login");
    }
    catch(PDOException $e){
        die("Erreur d'insertion produit :".$e->getMessage());
    }
}




?>

<?php } ?>