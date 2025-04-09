<?php
require "./uploads/config.php";

$nom =isset( $_POST['nom']) ?  $_POST['nom'] : '';
$prenom =isset( $_POST['prenom']) ?  $_POST['prenom'] : '';
$email =isset( $_POST['email']) ?  $_POST['email'] : '';




$sql = " INSERT INTO users( nom, prenom, email) VALUES(:nom, :prenom, :email )";
$req = $pdo->prepare($sql);
$exec = $req->execute(array(
    ':nom'=>$nom,
    ':prenom'=>$prenom,
    ':email'=>$email
 
));
if ($exec) {
    echo "donnees inseré";
    
}else{
    echo "echec d'insertion";
}

?>