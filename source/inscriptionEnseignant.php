<?php 
    require('connexion.php');

$nom= $_GET['nom'];
$prenom = $_GET['prenom'];
$filiere = $_GET['filiere'];
$sexe = $_GET['sexe'];
$matiere = $_GET['matiere'];
$niveau=$_GET['niveau'];
$mail = $_GET['mail'];
$tel1 = $_GET['tel1'];



//insertion de l'enseignant 
$req="INSERT INTO `etudiants`.`enseignant` (`id_enseignant`, `nom_ensei`, `prenom`, `sexe`, `mail`, `telephone`) VALUES (NULL,'$nom','$prenom','$sexe','$mail','$tel1')";

try{
    $exe=$pdo->exec($req);

}catch(PDOexception $err){
    echo 'echec';
}  

var_dump($exe);


    //recuperation des id 
    $idEnsei="SELECT id_enseignant  from enseignant where telephone='$tel1'";

    $idFiliere="SELECT id_filiere from filiere where nom ='$filiere'";

    $idNiveau="SELECT num_niveau from niveau where num_niveau ='$niveau'";
    // echo $niveau;
    $execute= $pdo ->query($idEnsei);
    $executer= $pdo ->query($idFiliere);
    $executen= $pdo ->query($idNiveau);
    header('location:listeEnseignants.php');

    while($rowidEnsei= $execute -> fetch() and $rowidFil= $executer -> fetch() and $rowidNiv= $executen -> fetch()){
        echo 'klk';
        

        //insertion dans matiere
        
        
        $insertMatiere="INSERT INTO `matieres`(`nom`, `id_matiere`, `id_enseignant`, `id_filiere`, `num_niveau`) VALUES ('$matiere',null,'$rowidEnsei[0]','$rowidFil[0]','$rowidNiv[0]')";

        try{
        
            $executemat= $pdo ->exec($insertMatiere);
            // header('location:listeEnseignants.php');
        
        }catch(PDOexception $err){
            die('error de la requete');
        }
        var_dump($executemat);
        //si la matiere est inserer


        //insertion dans ensei_fil
        $insertEnsei_fil="INSERT INTO `ensei_fil`(`id_enseignant`, `id_filiere`) VALUES ('$rowidEnsei[0]','$rowidFil[0]')";
        
        
        try{
            $executer= $pdo ->exec($insertEnsei_fil);
            
        }catch(PDOexception $err){
            echo 'echec';
        }

//insertion dans niv_ensei
$reqniv_ensei="INSERT INTO `niv_ensei`(`id_enseignant`, `num_niveau`) VALUES ('$rowidEnsei[0]','$rowidNiv[0]')";


try{
    $executer= $pdo ->exec($reqniv_ensei);
    
}catch(PDOexception $err){
    echo 'echec';
}
}


    
        


?>   
<script>

    console.log('slsll')
</script>