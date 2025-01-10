<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire
    </title>
    <link rel="stylesheet" href="./addEnseignant.css">


</head>
<?php 
  require('connexion.php');
  ?>

<body class="formularieBody">
    <form method="get" action="inscriptionEnseignant.php">
        <fieldset>

            <h1 class="titre">Formulaire d'inscription de l'enseignant</h1>

            <span class="para">Information sur l'enseignant</span>
            <div><label for="nom">Nom </label><input type="text" id="nom" placeholder="Tsemo Abena" name="nom"></div>
            <div><label for="prenom">Prenom </label><input type="text" id="prenom" placeholder="Dominique Expedit"
                    name="prenom"></div>
            <div><span>Sexe</span>
                <div>
                    <div><label for="male">Homme </label><input type="radio" value="homme" name="sexe" checked></div>
                    <div><label for="male">Femme </label><input type="radio" value="femme" name="sexe"></div>
                </div>


            </div>

            <div>
                <label for="serie">matiere dispencée </label> <input type="text" id="serie" placeholder="Anglais"
                    name="matiere">

            </div>
            <div>
                <?php $requ=" select filiere.nom from filiere";
                        try{
                            $exec=$pdo->query($requ);
                        }catch(PDOexception $err){
                            echo 'echec de connexion :'.$err;
                        };
                        ?>
                <label for="serie">filiere enseignée </label><select name="filiere" id="">
                    <?php 
if($exec){
    while($rows =$exec-> fetch()){
        $nom=$rows[0];
        echo "<option>  $nom </option>";
    }
} ?>
                </select>
            </div>
            <div>
                <?php $requ=" select niveau.num_niveau from niveau";
                        try{
                            $exec=$pdo->query($requ);
                        }catch(PDOexception $err){
                            echo 'echec de connexion :'.$err;
                        }; ?>
                <label for="serie">Niveau d'enseignement</label>
                <select name="niveau" id="">
                    <?php
                        if($exec){
                            while($rows =$exec-> fetch()){
                                $nom=$rows[0];
                                echo "<option>  $nom </option>";
                            }}
                        ?>
                </select>
            </div>




            <div><label for="mail">Adresse e-mail </label><input type="text" id="mail"
                    placeholder="clashofclan@gmail.com" name="mail"></div>

            
                <div>
                    <label for="tel1">Numero de téléphone</label><input type="number" id="tel"
                        placeholder="6 54 62 36 87" name="tel1">
                </div>






            <input type="submit" value="S'inscrire" name="send">

        </fieldset>
    </form>
    <?php 

?>
</body>

</html>