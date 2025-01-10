<?php

require('connexion.php');
session_unset($identifiant);
session_write_close();
header('location:formulaireConnexionUser.php');
?>