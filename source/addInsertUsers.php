<?php
require('connexion.php');
$identifiant = $_GET['nom'];
$password = $_GET['password'];
$role = $_GET['role'];

$req="INSERT INTO etudiants.users(identifiant,password,role) VALUES('$identifiant','$password','$role')";

try{

    $exe=$pdo->exec($req);
    header('location:listeUsers.php');
}catch(PDOexception $err){
    echo 'echec';
}
var_dump($exe);

$req="CREATE USER '$identifiant'@'%' IDENTIFIED BY '$password';GRANT USAGE ON *.* TO '$identifiant'@'%' IDENTIFIED BY '$password' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;GRANT ALL PRIVILEGES ON `etudiants`.* TO '$identifiant'@'%';";

try{

    $exe=$pdo->exec($req);
    header('location:listeUsers.php');
}catch(PDOexception $err){
    echo 'echec';
}
var_dump($exe);


?>
<!-- 
CREATE USER 'moi'@'%' IDENTIFIED BY '***';GRANT USAGE ON *.* TO 'moi'@'%' IDENTIFIED BY '***' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;GRANT ALL PRIVILEGES ON `etudiants`.* TO 'moi'@'%'; -->