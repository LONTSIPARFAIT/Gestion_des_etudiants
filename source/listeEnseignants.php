<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des enseignant</title>
    <!-- <link rel="stylesheet" href="./listeEnseignants.css"> -->
    <link rel="stylesheet" href="./listeEnseignants.css">
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
                <h1>Liste des enseignants</h1>
                <form action="">

                    <div>

                        <div class="niveau">
                            <label for="niveau"> Niveau</label>
                            <select name="name_niv" id="name_niv">
                                <?php
            $req="select num_niveau from niveau ";
            try{    
                $exec=$pdo->query($req);
            }catch(PDOexception $err){
                echo 'echec de connexion :'.$err;
            }
            if($exec){
                echo '<option>tous</option>';
            while($ligne = $exec-> fetch()){
            $niveau =$ligne['num_niveau'];
            echo "
                <option>$niveau</option>
                "; }
            }else{
                echo 'requete echoué';
                
            }
            ?>
            
                            </select>
                        </div>


                        <div class="filiere"><label for="filiere"> Filiere</label>

                            <select name="name_filiere"id="">
                                <?php
                $req="select nom from filiere ";
                try{    
                    $exem=$pdo->query($req);
                }catch(PDOexception $err){
                    echo 'echec de connexion :'.$err;
                }
                if($exem){
                    echo '<option>tous</option>';

                while($ligne = $exem-> fetch()){
                $filiere =$ligne['nom'];
                echo "
                    <option>$filiere</option>
                    "; }
                }else{
                    echo 'requete echoué';
                    
                }
?>
                            </select >
                            <!-- <?=$filiere?> -->
                        </div>


                        <div class="niveau">
                            <label for="niveau"> Matiere</label>
                            <select name="name_mat" id="name_niv">
                                <?php
            $req="select nom from matieres";
            try{    
                $exec=$pdo->query($req);
            }catch(PDOexception $err){
                echo 'echec de connexion :'.$err;
            }
            if($exec){
                echo '<option>tous</option>';
            while($ligne = $exec-> fetch()){
            $matiere =$ligne['nom'];
            echo "
                <option>$matiere</option>
                "; }
            }else{
                echo 'requete echoué';
                
            }
            ?>
            
                            </select>
                        </div>


                        <div class="trier_par">
                            Trier par &nbsp; <select name="" id="">
                                <option value="">A à Z</option>
                                <option value="">Z à A</option>


                            </select>
                        </div>
                        <div class="rechercher">
                            <input type="search" placeholder="Rechercher le matricule"> <i class="fa fa-search"></i>
                        </div>
                    </div>
                    <input type="submit" value="rechercher" ">
                </form>
            </div>
            <div class="champ">
                <div>Matricule</div>
                <div>Nom</div>
                <div>Prenom</div>
                <div>sexe</div>
                <div>Filiere</div>
                <div>matière</div>
                <div>niveau</div>


                <div class="champOperation">
                    <!-- <b>Visualiser</b>
                    <b>Modifier</b> -->
                    <b>Supprimer</b>
                </div>
            </div>

            <script>
let enseignant=[];
console.log(enseignant);


</script>

            <div class="listeEtudiant">

                <?php
if((isset($_GET['name_niv']) && isset($_GET['name_filiere']) and isset($_GET['name_mat'])) ){
$niv=$_GET['name_niv'];
$fil=$_GET['name_filiere'];
$mat=$_GET['name_mat'];


if($niv!='tous' && $fil!= 'tous' && $mat!= 'tous'){  
    $requete="SELECT * FROM etudiants.enseignant join matieres on matieres.id_enseignant= enseignant.id_enseignant join filiere on filiere.id_filiere = matieres.id_filiere join niveau on niveau.num_niveau = matieres.num_niveau where( niveau.num_niveau =$niv and filiere.nom ='$fil' and matieres.nom = '$mat')";
}
       else if($niv=='tous' && $fil== 'tous' and $mat==='tous'){  
        
    $requete="select * from etudiants.enseignant";

       }

    if($niv==='tous' and $fil!=='tous' and $mat==='tous'){
       $requete="SELECT * FROM etudiants.enseignant join matieres on matieres.id_enseignant= enseignant.id_enseignant join filiere on filiere.id_filiere = matieres.id_filiere join niveau on niveau.num_niveau = matieres.num_niveau where filiere.nom = '$fil'";

    }
    if($niv!=='tous' and $fil==='tous' and $mat ==='tous'){
       $requete = "SELECT * FROM etudiants.enseignant join matieres on matieres.id_enseignant= enseignant.id_enseignant join filiere on filiere.id_filiere = matieres.id_filiere join niveau on niveau.num_niveau = matieres.num_niveau where matieres.num_niveau = $niv";

    }
    if($niv==='tous' and $fil==='tous' and $mat !=='tous'){
       $requete="SELECT * FROM etudiants.enseignant join matieres on matieres.id_enseignant= enseignant.id_enseignant join filiere on filiere.id_filiere = matieres.id_filiere join niveau on niveau.num_niveau = matieres.num_niveau where matieres.nom ='$mat'";

    }
    if($niv!=='tous' and $fil!=='tous' and $mat ==='tous'){
        $requete = "SELECT * FROM etudiants.enseignant join matieres on matieres.id_enseignant= enseignant.id_enseignant join filiere on filiere.id_filiere = matieres.id_filiere join niveau on niveau.num_niveau = matieres.num_niveau where matieres.num_niveau = $niv and  filiere.nom = '$fil'";

        echo 'niv et fil';
 
     }
    if($niv!=='tous' and $fil==='tous' and $mat !=='tous'){
        $requete = "SELECT * FROM etudiants.enseignant join matieres on matieres.id_enseignant= enseignant.id_enseignant join filiere on filiere.id_filiere = matieres.id_filiere join niveau on niveau.num_niveau = matieres.num_niveau where matieres.num_niveau = $niv and  matieres.nom = '$mat'";
        echo 'niv et mat';
 
     }
    if($niv==='tous' and $fil!=='tous' and $mat !=='tous'){
       $requete="SELECT * FROM etudiants.enseignant join matieres on matieres.id_enseignant= enseignant.id_enseignant join filiere on filiere.id_filiere = matieres.id_filiere join niveau on niveau.num_niveau = matieres.num_niveau where matieres.nom ='$mat' and filiere.nom = '$fil'";
       echo 'fil et mat';

    }
   
    // SELECT nom from matieres where (matieres.id_enseignant = 90 and matieres.num_niveau =1 and matieres.id_filiere=(SELECT id_filiere FROM filiere where nom='sante'))
}
else{

     $requete="select * from etudiants.enseignant ";
    
}

try{
        $exe=$pdo->query($requete);
    }catch(PDOexception $err){
    echo 'echec de connexion :'.$err;
}
if($exe){
    
    $compNiv=0;
    $tabNiv=[];
    $compFil=0;
    $tabFil=[];
    $compMat=0;
    $tabMat=[];
    while($rows = $exe-> fetch()){
        
          $id=$rows['id_enseignant'];
        
        
        
        if(isset($ancienId)){
            if($ancienId==$id) {            $compNiv++;
            $compFil++;
            $compMat++;
        }else{
            $compNiv=0;
            $tabNiv=[];
            $compFil=0;
            $tabFil=[];
            $compMat=0;
            $tabMat=[];
           
        }
}
         $nom_ensei=$rows['nom_ensei'];
    $prenom=$rows['prenom'];
    $sexe=$rows['sexe'];
    $telephone = $rows['telephone'];
?>
<script>
    enseignant[<?=$id?>]={ 
        'id' : <?=$id?>,
        'nom':'<?=$nom_ensei?>',
        'prenom':'<?=$prenom?>',
        'sexe':'<?=$sexe?>'
    };
    enseignant[<?=$id?>].filiere=[];
    enseignant[<?=$id?>].matieres=[];
    enseignant[<?=$id?>].niveau=[];

</script>

                <div class="etudiant" id=<?=$id?>>

                    <div class="nometprenom">
                        <?=$id?>
                    </div>
                    <div class="">
                        <?=$nom_ensei?>
                    </div>
                    <div class="">
                        <?=$prenom?>
                    </div>
                    <div class="sexe">
                        <?=$sexe?>
                    </div>

                    <div class="filiere">
                        <?php 
// echo $id;
                        
                        $requ=" select filiere.nom from filiere join ensei_fil on ensei_fil.id_filiere = filiere.id_filiere join enseignant on enseignant.id_enseignant = ensei_fil.id_enseignant  where enseignant.id_enseignant = $id";
                        try{
                            $exec=$pdo->query($requ);
                        }catch(PDOexception $err){
                            echo 'echec de connexion :'.$err;
                        }                                                              // echo $fil;
                                                 

                        if($exec){

                            if(isset($fil)){
                              if($niv === 'tous' and $fil === 'tous' and $mat==='tous'){
                                    echo "<select>";
                                }
                            }else{
                                    echo "<select>";
                                    
                                }

                        $i=0;
                        while($ligne = $exec-> fetch()){
                            $serie =$ligne['nom'];
?>

<script>
    enseignant[<?=$id?>].filiere.push('<?=$serie?>');
</script>
<?php
                            if(isset($fil)){
                                if(($fil === 'tous' and $niv !== 'tous' and $mat =='tous') || ($fil === 'tous' and $niv === 'tous' and $mat !=='tous') || ($niv!=='tous' and $fil==='tous' and $mat !=='tous')){
                                    $tabFil[]=$serie;
                                    if($i==0){ echo $tabFil[$compFil];
                                    }
                                    $i++;
                                }else if($mat ==='tous' and $niv ==='tous' and $fil=== 'tous'){
                                    echo "<option>$serie</option>"; 
                                    
                                }else{
echo $fil==$serie?$fil:'';
                                    }
                                                        }else{
                                
                                                            echo "<option>$serie</option>"; 
                                                        }

                            
                         }
                        }else{
                            echo 'requete echoué';
                            
                        }
                        if(isset($fil)){
                            if(($fil === 'tous' and $niv !== 'tous' and $mat =='tous') || ($fil === 'tous' and $niv === 'tous' and $mat !=='tous')){
                                
                                // echo "<select>";
                            }else if($niv === 'tous' and $fil === 'tous' and $mat==='tous'){
                                echo "</select>";
                            }
                                                    }else{
                            
                            
                                                        echo "</select>";
                                                    }

                        ?>
                    </div>

                    <div class="matiere">
                        <?php

                        if(isset($mat) && isset($niv) && isset($fil)){

                            
                            if($mat == 'tous' && $niv =='tous' && $fil =='tous'){
                                
                                
                                $req="SELECT nom from matieres where (matieres.id_enseignant = $id)";
                            }
                            if($mat !=='tous' && $niv =='tous' && $fil =='tous'){
                                $req="SELECT nom from matieres where (matieres.id_enseignant = $id and matieres.nom='$mat')";
                                
                            }
                            if($mat ==='tous' && $niv !=='tous' && $fil ==='tous'){
                                // echo 'iciiiiiiiiiiiii';

                                $req="SELECT nom from matieres where (matieres.id_enseignant = $id and matieres.num_niveau='$niv')";
                                
                            }
                            if($mat ==='tous' && $niv ==='tous' && $fil !=='tous'){

                                $req="SELECT nom from matieres where (matieres.id_enseignant = $id and matieres.id_filiere=(SELECT id_filiere FROM filiere where filiere.nom='$fil'))";
                                
                            }
                                if($niv!=='tous' and $fil!=='tous' and $mat ==='tous'){
                                    // echo 'niv et fil';

                                $req="SELECT nom from matieres where (matieres.id_enseignant = $id and matieres.num_niveau = $niv and matieres.id_filiere=(SELECT id_filiere FROM filiere where nom='$fil'))";
                                
                            }
                            if($niv!=='tous' and $fil==='tous' and $mat !=='tous'){

                                $req="SELECT nom from matieres where (matieres.id_enseignant = $id and matieres.num_niveau='$niv' and matieres.nom ='$mat')";
                                
                            }
                            if($niv==='tous' and $fil!=='tous' and $mat !=='tous'){
                                // echo 'fil et mat';
 
                                $req="SELECT nom from matieres where (matieres.id_enseignant = $id and matieres.nom = '$mat' and matieres.id_filiere=(SELECT id_filiere FROM filiere where filiere.nom='$fil'))";
                                
                            }
                        }
                        else{
                            $req="SELECT nom from matieres where (matieres.id_enseignant = $id)";

                        }
try{
    $exec=$pdo->query($req);
}catch(PDOexception $err){
    echo 'echec de connexion :'.$err;
}
// echo $exec.'cccccccccccccccccc';
if($exec){
    if(isset($mat)){
         if($niv === 'tous' and $fil === 'tous' and $mat==='tous'){
            echo "<select>";
        }
    }else{
            echo "<select>";
            
        }
        // var_dump($exec);
        $i=0;

while($ligne = $exec-> fetch()){
  $matie =$ligne['nom'];
  ?>
  

<script>
    enseignant[<?=$id?>].matieres.push('<?=$matie?>');
</script>
  <?php
  if(isset($mat)){

  if(($fil == 'tous' and $niv !== 'tous' and $mat =='tous') || ($fil !== 'tous' and $niv === 'tous' and $mat =='tous') || ($niv!=='tous' and $fil!=='tous' and $mat ==='tous')){
    $tabMat[]=$matie;
    if($i==0) echo $tabMat[$compMat];
    $i++;
    // echo 'lkjlk';
}else if($mat ==='tous' and $niv ==='tous' and $fil=== 'tous'){
      echo " <option>$matie</option>
    "; 
}else{
        echo $mat==$matie?$mat:'';

    }
}else{
    echo " <option>$matie</option>";

}
}}

else{
    echo 'requete echoué';
    
}
if(isset($fil)){
    if(($fil == 'tous' and $niv !== 'tous' and $mat =='tous') || ($fil !== 'tous' and $niv === 'tous' and $mat =='tous')){
        
        // echo "<select>";
    }else if($niv == 'tous' and $fil == 'tous' and $mat==='tous'){
        echo "</select>";
    }}else{
        echo "</select>";

    }
?>
                    </div>
                   
                    <div class="niveau">
                    
                    <?php 
                        $requ=" SELECT niveau.num_niveau from niveau join niv_ensei on niv_ensei.num_niveau = niveau.num_niveau join enseignant on enseignant.id_enseignant = niv_ensei.id_enseignant  where enseignant.id_enseignant = $id";
                        try{
                            $exen=$pdo->query($requ);
                        }catch(PDOexception $err){
                            echo 'echec de connexion :'.$err;
                        }
                        
                        if(isset($niv)){
                            if($niv == 'tous' and $fil != 'tous'){
                                
                                // echo "<select>";
                            }else if($niv == 'tous' and $fil == 'tous'){
                                echo "<select>";
                            }
                                                    }else{
                            
                            
                                                        echo "<select>";
                                                    }
                            
                        
                        if($exen){
                            $i=0;
                        while($ligne = $exen-> fetch()){
                            $serie =$ligne['num_niveau'];
                            ?>
  

                            <script>
                                enseignant[<?=$id?>].niveau.push('<?=$serie?>');
                            </script>
                              <?php
                            if(isset($niv)){
                                if($niv == 'tous' and $fil != 'tous'){
 $tabNiv[]=$serie;
 if($i==0) echo $tabNiv[$compNiv];
 $i++;
                                }else if($niv == 'tous' and $fil == 'tous'){
                                    echo "<option>$serie</option>"; 
                                    
                                }else{
echo $niv==$serie?$niv:'';
                                        
                                    }
                                                        }else{
                                
                                                            echo "<option>$serie</option>"; 
                                                        }

                            
                         }
                        }else{
                            echo 'requete echoué';
                            
                        }

                        if(isset($niv)){
                            if($niv == 'tous' and $fil != 'tous'){
                                
                                // echo "<select>";
                            }else if($niv == 'tous' and $fil == 'tous'){
                                echo "</select>";
                            }
                                                    }else{
                            
                            
                                                        echo "</select>";
                                                    }

                     
                      
                        ?>

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

                <?php $ancienId=$id; }
        }
        else{                echo 'aucun enseignant trouvé';
}

            ?>
            </div>
        </div>
        <script>
            console.log(enseignant);
        </script>
    </main>
</body>

</html>