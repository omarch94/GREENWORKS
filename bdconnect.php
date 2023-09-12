<?php
try{
   $based= new PDO("mysql:host=localhost;dbname=greenwork;port:8889;charset=utf8","root","root",[PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION]);
}
catch(PDOException $e){
    die("Erreur connexion :".$e->getMessage());
}
?>