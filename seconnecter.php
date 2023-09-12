
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styleind.css">
    <link rel="shortcut icon" href="image/leaf.png" type="image/x-icon"/>

</head>
<body>
<?php include("navbar.php"); ?>

<section class="disclaimer">
    <p>Tout le monde est un recycleur
Vous pouvez créer ou rejoindre l'un de ces espaces Greenworks  et commencer à vous attaquer au problème des déchets. Dès maintenant !</p>
</section>
<section class="contact connecter">
<div class="form-image">
<img  src="image/plant.png" width="300">
<form method="POST"  >
    <fildset  class="field">
        <div class="container">
        <div class="form-group" >
   

    <label for="exampleInputEmail1">Email : </label>
    <input type="email"  name="email" class="form-control" id="ema" placeholder="email">
  
  
      <label for="exampleInputPassword1">Mot de passe  :</label>
  <input type="password" name="mdp" class="form-control"  placeholder="Mot pass" id="pw">

<br>
  <div class="form-group">
  <input type="submit" class="btn-sub" name="connexion">
</div>
</div>
</fieldset>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    extract($_POST);
    if(!isset($email) || empty($email)){
        header('Location:seconnecter.php?err=err_l');
       
    }
    else{
        if(!isset($mdp) || empty($mdp)){
            header('Location:seconnecter.php?err=err_mv');
           
        }
        else{
            if(!preg_match('/^[A-Z]/',$mdp)){
                header('Location:seconnecter.php?err=err_mnv');
            }
            else{
                include("bdconnect.php");
                try{
                    $r=$based->prepare("SELECT * FROM utilisateur");
                    $r->execute();
                    $lignes = $r->fetchAll();
                    $exist =false;
                    foreach($lignes as $ligne){
                        if($ligne[3] == $email && $ligne[5]==$mdp){
                            $exist=true;
                            session_start();
                            $_SESSION["prenom"] = $ligne[2];
                            $_SESSION["login"]=$ligne[4];
                            $_SESSION["id_session"]=session_create_id();
                            header("Location:mesgreenwork.php?login=$ligne[4]");
                        }
                    }
                    if(!($exist))  header('Location:seconnecter.php?err=err_lm');
                }
                catch(Exception $e)  {
                    die("Erreur de selection :".$e->getMessage());
                }
               
            }
    }
    
}

}


?>
</body>
</html>