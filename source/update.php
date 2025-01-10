<?php
  require('connexion.php');
include 'connexion.php';

$id=$_GET['id'];


    $nom= $_GET['nom'];
    $prenom = $_GET['prenom'];
    $birth = $_GET['birth'];
    $sexe = $_GET['sexe'];
    $country = $_GET['country'];
    $nationalite = $_GET['nationalite'];
    $mail = $_GET['mail'];
    $tel1 = $_GET['tel1'];
    $tel2 = $_GET['tel2'];
    $diplome = $_GET['diplome'];
    $specialite = $_GET['specialite'];
    $nameur = $_GET['nameur'];
    $mailur = $_GET['mailur'];
    $telur = $_GET['telur'];
    $lastschool = $_GET['lastschool'];
    $photo=$_GET['photo'];

$sql="UPDATE etudiants.inscription set nom='$nom' ,prenom='$prenom', naissance='$birth', sexe='$sexe', residence='$country', nationalite='$nationalite', mail='$mailur', telelephone='$tel1', telelephone2='$tel2', specialite='$specialite', diplome='$diplome', etablissement='$lastschool', photo='$photo', nomurgent='$nameur', mailurgent='$mailur',telur='$telur' where id='$id'";
$exe=$pdo->exec($sql);
if($exe){
    echo 'modification reussi';   
    header('location:listeEtudiants.php');
    
}else{
    header('location:listeEtudiants.php');

};
var_dump($exe);
?>