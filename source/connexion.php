<?php  
// $dsn='mysql:host = localhost; dbname=etudiants;charset=utf8';
//     try{
//     $pdo=new PDO($dsn,'zenwex','dominique2006');
// }catch(PDOexception $err){
//     echo 'echec de connexio a la base de donnés'.$err ;
// }
session_start();
if(isset($_GET['password']) && $_GET['password']=="" && $_GET['nom']=="root") {
$_SESSION['password']=$_GET['password'];
$_SESSION['identifiant']=$_GET['nom'];
}
$dsn='mysql:host = localhost; dbname=etudiants;charset=utf8';
$pass=$_SESSION['password'];
$nom=$_SESSION['identifiant'];
// echo $nom=$_SESSION['identifiant'];
try{
    $pdo=new PDO($dsn,$nom,$pass);
   
}catch(PDOexception $err){
    header("location:formulaireConnexionUser.php?.message=connexion echoué!!!! veuillez verifier vos informations...");
    echo $err;
}



?>