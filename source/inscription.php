<?php 
    require('connexion.php');

include 'connexion.php';
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

// $req="INSERT INTO etudiants.inscription(nom,prenom,naissance,sexe,residence,nationalite,mail,telelephone,telelephone2,diplome,specialite,nomurgent,mailurgent,telur) VALUES('7','7','7','7','7','7','7',7,7,'7','7','7','7',7)";


$req="INSERT INTO etudiants.inscription(nom,prenom,naissance,sexe,residence,nationalite,mail,telelephone,telelephone2,specialite,diplome,etablissement,photo,nomurgent,mailurgent,telur) VALUES('$nom','$prenom','$birth','$sexe','$country','$nationalite','$mail','$tel1','$tel2','$diplome','$specialite','$lastschool','$photo','$nameur','$mailur','$telur')";
try{

    $exe=$pdo->exec($req);
    header('location:listeEtudiants.php');
}catch(PDOexception $err){
    echo 'echec';
}
var_dump($exe);

?>