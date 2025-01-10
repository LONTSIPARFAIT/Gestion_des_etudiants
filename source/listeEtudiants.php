<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des etudiants</title>
    <link rel="stylesheet" href="./listeEtudiant.css">
    <link rel="stylesheet" href="./fontawesome-free-6.5.1-web/css/all.min.css">

</head>
<?php
require('connexion.php');
?>

<body class="bodyListe">
    <?php include 'entete.php';?>
    <main>

        <?php include './menu-lateral.php';?>

        <div class="partie-principale">

        <div class="trie">
            <h1>Liste des etudiants</h1>
            <div>Trier par &nbsp; <select name="" id=""><option value="">fsqdqsd</option>
            <option value="">ds</option>
            <option value="">fds</option>
            <option value="">fds</option>
            <option value="">fdsf</option></select> </div>
        </div>
            <div class="champ">
                <div>matricule</div>
                <div>Nom</div>
                <div>Prenom</div>
                <div>sexe</div>
                <div>Filière</div>
                <div>Niveau</div>
                <div>Contact</div>

                
                <div class="champOperation">
                    <!-- <b>Visualiser</b>
                    <b>Modifier</b> -->
                    <b>Supprimer</b>
                </div>
            </div>


            <div class="listeEtudiant">

                <?php

$req="select * from etudiants.inscription";
try{
    $exe=$pdo->query($req);
}catch(PDOexception $err){
    echo 'echec de connexion :'.$err;
}
while($rows = $exe-> fetch()){


$id=$rows['id'];
$id=$rows['id'];
$nom=$rows['nom'];
$prenom=$rows['prenom'];
$sexe=$rows['sexe'];
$specialite = $rows['specialite'];
$telephone = $rows['telelephone'];
$niveau = $rows['num_niveau'];
?>
                <div class="etudiant" id=<?=$id?>>

                    <div class="id">
                        <?=$id?>
                    </div>

                    <div class="nometprenom">
                        <?=$nom?>
                    </div>
                    <div class="nometprenom">
                        <?=$prenom?>
                    </div>
                    <div class="sexe">
                        <?=$sexe?>
                    </div>
                    <div class="serie">
                        <?=$specialite?>
                    </div>
                    <div class="niveau">
                        <?=$niveau?>
                    </div>
                    <div class="telephone">
                        <?=$telephone?>
                    </div>
                    <div class="operation">


                        <!-- <a href="./visualiser.php?id=<?=$id?>">
                            <i class="fa fa-eye eyeEtudiants" data-id=<?=$id ?>></i>
                        </a> -->

                        <!-- <a href="./modifier.php?id=<?=$id?>">
                            <i class="fa fa-pencil pencilEtudiants" data-id=<?=$id ?>></i>
                        </a> -->


                        <a href="./supprimerEtudiant.php?id=<?=$id?>">
                            <i class="fa fa-close closeEtudiants" data-id=<?=$id ?>></i>
                        </a>

                    </div>

                </div>

                <?php }?>
            </div>
        </div>
    </main>
</body>

</html>