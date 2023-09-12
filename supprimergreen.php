<?php 
session_start();
if(count($_SESSION)==0){
    header("Location:seconnecter.php");
}
else{
    if(isset($_GET["id"])){
        extract($_GET);
        $p=$_SESSION["login"];

        include("bdconnect.php");
        try{
        $sp = $based->prepare("DELETE FROM  greenworkp WHERE id =? && auteur=?");
        $sp->execute([$id,$p]);
     header("Location:mesgreenwork.php?login=$p");
        }
        catch(PDOException $e){
            die("Erreur de suppression :".$e->getMessage());
        }
    }
}
    ?>