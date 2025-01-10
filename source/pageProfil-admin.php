<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fontawesome-free-6.5.1-web/css/all.min.css">
    <link rel="stylesheet" href="./pageProfil-admin.css">
</head>
<?php 
require('connexion.php');
$pass=$_SESSION['password'];
$nom=$_SESSION['identifiant'];
?>

<body>
    <?php include 'entete.php';?>
    <div class="main">
        <h1>Profil de l'administrateur</h1>
        <div class="img">
            <i class="fa fa-user-circle"></i>
            <!-- <img src="" alt=""> -->
        </div>

        <table border="0">
            <tr>
                <td>Identifiant : </td>
                <td>
                    <?=$nom?>
                </td>
            </tr>
            <tr>
                <td>Password : </td>
                <td>
                    <?=$pass?>
                </td>
            </tr>
        </table>

        <section class="autorisationAdmin">
            <div>Tous les autorisation detenu!!!</div>
        </section>
    </div>
</body>

</html>