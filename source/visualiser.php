<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>visualiser</title>
    <link rel="stylesheet" href="./visualiser.css">
</head>
<body>
    <?php 
    require('connexion.php');
    
$id=$_GET['id'];
    
$req="SELECT * from etudiants.inscription where id=$id";
try{
    $exe=$pdo->query($req);
}catch(PDOexception $err){
    echo 'echec de connexion :'.$err;
    header('location:listeEtudiants.php');

}
while($rows = $exe-> fetch()){

    
    $nom= $rows['nom'];
    $prenom = $rows['prenom'];
    $birth = $rows['naissance'];
    $sexe = $rows['sexe'];
    $country = $rows['residence'];
    $nationalite = $rows['nationalite'];
    $mail = $rows['mail'];
    $tel1 = $rows['telelephone'];
    $tel2 = $rows['telelephone2'];
    $diplome = $rows['diplome'];
    $specialite = $rows['specialite'];
    $nameur = $rows['nomurgent'];
    $mailur = $rows['mailurgent'];
    $telur = $rows['telur'];
    $lastschool = $rows['etablissement'];
    $photo=$rows['photo'];
    

 }

    ?>
<div class="visualiser">
    <div class="headervisualise">
        <div class="nompre"><?= $nom.' '. $prenom?></div>
        <div class="imgvsualise"><img src="./img/<?=$photo?>" alt=""></div>
        <div><?=$specialite?></div>
    </div>
    <div class="content">

    <table border='0'>
        <tr>
            <td>sexe</td>
            <td><?=$sexe?></td>
        </tr>
        <tr>
            <td>telephone</td>
            <td><?$tel1.' / '.$tel2?></td>
        </tr>
        <tr>
            <td>Date de naissance</td>
            <td><?=$birth?></td>
        </tr>
        <tr>
            <td>ville</td>
            <td><?=$country?></td>
        </tr>
        <tr>
            <td>Mail</td>
            <td><?=$mail?></td>
        </tr>
        <tr>
            <td>Dernier diplome</td>
            <td><?=$diplome?></td>
        </tr>
        <tr>
            <td>En cas d'urgence</td>
        </tr>
        <tr>
            <td>Nom</td>
            <td><?=$nameur?></td>
        </tr>
        <tr>
            <td>telephone</td>
            <td><?=$telur?></td>
        </tr>
        <tr>
            <td>mail</td>
            <td><?=$mailur?></td>
        </tr>
    </table>
    </div>
</div>

</body>
</html>