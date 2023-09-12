
<html>
<head>
    <title>Inscription</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styleind.css">
    <link rel="shortcut icon" href="image/leaf.png" type="image/x-icon"/>

</head>
<body>
    
<?php
include("navbar.php");

    
    ?>
    <?php
$nomerr=$prenerr=$emaierr=$nomuterr=$motpassErr=$passerr=$remotpasserr="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    extract($_POST);

      if(!isset($nomi)||empty($nomi)){
        $nomerr="Nom Vide";
      }
      else{
      if(!isset($prenomi)||empty($prenomi)){
        $prenerr="Prenom Vide";

      }
      else{
      if(!isset($emaili)|| empty($emaili)||!filter_var($emaili,FILTER_VALIDATE_EMAIL)){
      $emaierr="Email vide ou incorrecte";
      }
      else{
      if(!isset($nutilisi)||empty($nutilisi)){
        $nomuterr="nom d'utilisateur vide";
      }else if(!preg_match("/[A-Za-z]/",$nutilisi)){
        $nomuterrf=" nom dutilisateur doit commancer par Majuscule";
      }else{
      if(!isset($mpi) || empty($mpi)){
        $motpassErr=" Mot pass Vide";
      }
      else if(!preg_match("/[A-Za-z]/",$mpi)){
        $passerr="le mot pass doit commencer par majuscule";
      }else {
      if ($mpi != $rmpi){
        $remotpasserr=" les mots pass ne sont pas identiques";

      }        
  
  else{

    include("bdconnect.php");
// echo"hua hadax";
try{
$req=$based->prepare("INSERT INTO utilisateur(nom,prenom,email,nomUtilisateur,pass) VALUES (?,?,?,?,?)");
 $req->execute(array($nomi,$prenomi,$emaili,$nutilisi,$mpi));
//  echo"registratyin succesfull";
 header("Location:seconnecter.php");

}
catch(PDOException $e){
die("Erreur d'insertion".$e->getMessage());
}

    
      
}
      }
    }
}
      }
    }

}
?>

<section class="contact">
        <h1 class="title compte">Créez votre compte</h1>
        <div class="form-image">
            <form method="POST" id="form1">
           
            <small class="erreur"></small>
              <span class="error"> <?php echo $nomerr;?></span>
            <input type="text" name="nomi"  placeholder="Nom" id="nom"   />
           
            <small class="erreur"></small>
    <span class="error"> <?php echo $prenerr;?></span>
    <input type="text" name="prenomi" placeholder="Prénom" id="pren"  />

    <small class="erreur"></small>
    <span class="error"> <?php echo $emaierr;?></span>
    <input type="email"  name="emaili" class="form-control" id="ema" placeholder="email">

    <small class="erreur"></small>
    <span class="error"> <?php echo $nomuterr;?></span>
    <input type="text"  name="nutilisi" placeholder="nom d'utilsateur" id="user">
    <small class="erreur"></small>
    <input type="password" name="mpi" class="form-control"  placeholder="Mot pass" id="pw">
    <small class="erreur"></small>
    <input type="password" name="rmpi"  class="form-control" placeholder="Confirmer mot pass"  id="pww">
                <input type="submit" class="btn-sub">
            </form>
            <div class="image">
                <img src="image/img2.jpg" >
            </div>
        </div>
    </section>
</body>
</html>