<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./formulaireConnexionUse.css">
    <link rel="stylesheet" href="./fontawesome-free-6.5.1-web/css/all.min.css">
    <title>Formulaire
    </title>


</head>

<body class="UserBody">
    <form method="get" action="pagePrincipale.php" class="formUSer">
        <fieldset class="fieldset">
<?php if(isset($_GET['message'])){
    $message=$_GET['message'];
echo "<span class=message>$message</span>";
}?>
            <h1 class="titre">Administrator's Connexion</h1>

            <div><label for="Identifiant">Identifiant</label><input type="text" id="nom" placeholder="Tsemo Abena"
                    name="nom"></div>


            <div>
                <label for="password">Password</label><input type="password" placeholder="lktkrmelkmlk" name="password">
            </div>
            <button type="submit" class="buttonUser"><a> Se connecter</a></button >


        </fieldset>
    </form>
    <div class="retourUser"><a href="./choixComptes.php"><i class="fa fa-backward"></i>Retour</a></div>
</body>

</html>