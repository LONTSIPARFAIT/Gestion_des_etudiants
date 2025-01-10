<?php 
  require('connexion.php');
  
include 'connexion.php';

    
    $id=$_GET['id'];
    echo $id;

$sql="DELETE FROM etudiants.inscription WHERE id = $id";

if($exe=$pdo->query($sql)){
    header('location: listeEtudiants.php');
}else{
    header('location: listeEtudiants.php');

};

?>