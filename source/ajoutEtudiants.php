<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire
    </title>  
      <link rel="stylesheet" href="./ajoutEtudiants.css">
      

</head>
<?php 
  require('connexion.php');
  ?>
<body class="formularieBody">
    <form method="get" action="inscriptionEtudiants.php">
        <fieldset> 
            
            <h1 class="titre">Formulaire d'inscription de Etudiants</h1>

            <span class="para">Information sur l'etudiant</span>
            <div><label for="nom">Nom   </label><input type="text" id="nom" placeholder="Tsemo Abena" name="nom"></div>
            <div><label for="prenom" >Prenom   </label><input type="text" id="prenom" placeholder="Dominique Expedit" name="prenom"></div>
            <div><label for="birth">Date de naissance   </label><input type="text" id="birth" placeholder="04 fevrier 2005" name="birth"> </div>
            <div><span>Sexe</span>
                <div>
                    <div><label for="male">Homme   </label><input type="radio" value="homme" name="sexe" checked></div>
                    <div><label for="male">Femme   </label><input type="radio" value="femme" name="sexe"></div>
                </div>

                
            </div>
            <div><label for="country">Ville et pays de naissance   </label><input type="text" placeholder="bafoussam cameroun" name="country" id="country">
            </div>
            <div><label for="nation">Nationalité   </label><input type="text" id="nation" placeholder="Camerounaise" name="nationalite"></div>
            <div><label for="mail">Adresse e-mail   </label><input type="text" id="mail" placeholder="clashofclan@gmail.com" name="mail"></div>
            <div><span for="tel">Numero de téléphone</span>
                <div>
                    <div><label for="tel1">Tel 1 </label><input type="number" id="tel" placeholder="6 54 62 36 87" name="tel1"></div>
                    <div><label for="tels2">Tel 2 </label><input type="number" placeholder="6 87 21 35 45" name="tel2"></div>
                </div>
            </div>
            <div>
                <label for="serie">Specialité </label> <input type="text" id="serie" placeholder="Devellopement d'Aplication" name="specialite">
        </div>  
            <div>
                <label for="serie">Niveau </label> <input type="text" id="niveau" placeholder="1" name="niveau">
        </div>  

                    <div><label for="lastdip">Dernier diplome obtenu  </label>                   
                    <input type="text" id="dip" placeholder="baccaulaureat TI" name="diplome">
                    </div>

                    <div><label for="lastschool">Dernier Etablissement frequenté  </label>                   
                    <input type="text" id="dip" placeholder="Collège polyvalent les pointoises" name="lastschool">
                    </div>

                    <div><label for="photo">Photo d'identité  </label>                   
                    <input type="file" value='klmlk' id="dip" name="photo">
                    </div>


                    
        <span class="para">Personne a contacter en cas d'urgence</span>
        <div><label for="nameur">Noms et prenoms   </label><input type="text" if="nameur" placeholder="Talla abena" name="nameur"></div>
        <div><label for="telur">telephone   </label><input type="text" if="telur" placeholder="6 44 55 87 98" name="telur"></div>
        <div><label for="mailur">adresse e-mail   </label><input type="text" if="mailur" placeholder="expedit@gmail.com" name="mailur"></div>
    <input type="submit" value="S'inscrire" name="send">    
    
    </fieldset>
    </form>
<?php 

?>
</body>

</html>