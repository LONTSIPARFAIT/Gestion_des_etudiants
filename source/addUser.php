<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./addUser.css">
    <link rel="stylesheet" href="./fontawesome-free-6.5.1-web/css/all.min.css">
    <title>Formulaire
    </title>


</head>
<?php 
  require('connexion.php');
  include 'entete.php'
?>
<body>
    <div class="container">
    <form method="post " action="addInsertUsers.php"  style="height: 40vh">
        <fieldset class="fieldset">
<?php if(isset($_GET['message'])){
    $message=$_GET['message'];
echo "<span class=message>$message</span>";
}?>
            <h1 class="titre" style="text-align:center">Add user</h1>

            <div><label for="Identifiant">Identifiant</label><input type="text" id="nom" placeholder="Tsemo Abena"
                    name="nom"></div>


            <div>
                <label for="password">Password</label><input type="password" placeholder="lktkrmelkmlk" name="password">
            </div>


            <div>
                <label for="password">Role</label><input type="text" placeholder="lktkrmelkmlk" name="role">
            </div>

            <button type="submit"><a href="./autorisation.php" class="autorisation"> AUTORISATION</a><a> ADD</a></button >

        </fieldset>
    </form>
    <div class="retourUser"><a href="./pagePrincipale.php"><i class="fa fa-backward"></i>Retour</a></div>
</div>
</body>

</html>