<link rel="stylesheet" href="./listeUsers.css">

<?php
include 'entete.php';
?>

<div class="main">
    <h1>All Users</h1>

    <table>

    <?php
  require('connexion.php');
   
  
$req="select * from etudiants.users";
try{
    $exe=$pdo->query($req);
}catch(PDOexception $err){
    echo 'echec de connexion :'.$err;
}
while($rows = $exe-> fetch()){


 $identifiant=$rows['identifiant'];
 $password=$rows['password'];
 $role=$rows['role'];
echo " <tr>
   <td>$identifiant</td>
   <td>$password</td>
   <td>$role</td>
  //  <td>$autorisation</td>
 </tr>";
}
?>
    </table>
</div>