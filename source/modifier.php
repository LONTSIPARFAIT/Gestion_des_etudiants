<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./modifier.css">
    <title></title>
</head>
<?php
  require('connexion.php');
  ?>
<body class="formularieBody">
    <?php
    $id=$_GET['id'] ;
    echo '<form method="get" action="update.php?id='.$id.'">';
    ?>
        <fieldset> 
            <input type="text" name="id"  value=<?=$id?> style="display:none">
            <h1 class="titre">Formulaire d'inscription de Etudiants</h1>

<?php

include 'connexion.php';
$id=$_GET['id'];
$req="SELECT * from etudiants.inscription where id=$id";
try{
    $exe=$pdo->query($req);
}catch(PDOexception $err){
    echo 'echec de connexion :'.$err;
}
if($exe){
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

echo '
    <span class="para">Information sur l\'etudiant</span>
    <div><label for="nom">Nom   </label><input type="text" id="nom"  placeholder="Tsemo Abena" name="nom" value='.$rows['nom'].'></div>
    <div><label for="prenom" >Prenom   </label><input type="text" id="prenom" placeholder="Dominique Expedit" name="prenom"  value='.$rows['prenom'].'></div>
    <div><label for="birth">Date de naissance   </label><input type="text" id="birth" placeholder="04 fevrier 2005" name="birth"  value='.$rows['naissance'].'> </div>
    <div><span>Sexe</span>
        <div>';?>

<?php 

if($sexe=="homme"){
    ?>
    <div><label for="male">Homme   </label><input type="radio" value="homme" name="sexe" checked></div>
    <div><label for="male">Femme   </label><input type="radio" value="femme" name="sexe"></div>
    <?php
}else{?>
    <div><label for="male">Homme   </label><input type="radio" value="homme" name="sexe"></div>
    <div><label for="male">Femme   </label><input type="radio" value="femme" name="sexe" checked></div>

<?php } ?>    
        </div>
    
<?php
echo '</div>
<div><label for="country">Ville et pays de naissance   </label><input type="text" placeholder="bafoussam cameroun" name="country" id="country" value='.$country.'>
</div>

<div><label for="nation">Nationalité   </label><input type="text" id="nation" placeholder="Camerounaise" name="nationalite" value='.$nationalite.'></div>

<div><label for="mail">Adresse e-mail   </label><input type="text" id="mail" placeholder="clashofclan@gmail.com" name="mail" value='.$mailur.'>
</div>
<div><span for="tel">Numero de téléphone</span>
    <div>
        <div><label for="tel1">Tel 1 </label><input type="number" id="tel" placeholder="6 54 62 36 87" name="tel1" value='.$tel1.'></div>
        <div><label for="tels2">Tel 2 </label><input type="number" placeholder="6 87 21 35 45" name="tel2" value='.$tel2.'></div>
    </div>
</div>
<div>
    <label for="serie">Specialité </label> <input type="text" id="serie" placeholder="Devellopement d\'Aplication" name="specialite" value='.$specialite.'>
</div>  

<div><label for="lastdip">Dernier diplome obtenu  </label>                   
<input type="text" id="dip" placeholder="baccaulaureat TI" name="diplome" value='.$diplome.'>
</div>

<div><label for="lastschool">Dernier Etablissement frequenté  </label>                   
<input type="text" id="dip" placeholder="Collège polyvalent les pointoises" name="lastschool" value='.$lastschool.'>
</div>

<div><label for="photo">Photo d\'identité  </label>                   
<input type="file" id="dip" name="photo">
</div>


<span class="para">Personne a contacter en cas d\'urgence</span>
<div><label for="nameur">Noms et prenoms   </label><input type="text" if="nameur" placeholder="Talla abena" name="nameur" value='.$nameur.'></div>
<div><label for="telur">telephone   </label><input type="text" if="telur" placeholder="6 44 55 87 98" name="telur" value='.$telur.'></div>
<div><label for="mailur">adresse e-mail   </label><input type="text" if="mailur" placeholder="expedit@gmail.com" name="mailur" value='.$mailur.'></div>
<input type="submit" value="Modifier" name="send">   
';
} 
}else{
    header('location:listeEtudiants.php');

}
?>

</fieldset>
    </form>
</body>
</html>