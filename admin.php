
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <title>liste produits </title>
    <link rel="stylesheet" type="text/css" href="styles.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


</head>
<body>
<center>
<div>

<h2 class="tete"> LA LISTE DES UTILISATEURS</h2>
<br>

<form class="form-horizontal" method="POST">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
            
                <input  class="form-control" id="inputNom" placeholder="login" name="loginu">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                
                <input  class="form-control " id="inputquantité" placeholder=" Mot de passe" name="passwordu">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                
                <input type="text" class="form-control " id="inputquantité" placeholder=" Taper le nom" name="nomu">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                
                <input type="number" class="form-control " id="inputquantité" placeholder=" Taper son numéro de téléphone" name="tel">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                
                <input  class="form-control " id="inputquantité" placeholder=" Taper son adresse" name="add">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                
                <input type="text" class="form-control " id="inputprofil" placeholder=" Taper son profil" name="profil">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                
                <input type="text" class="form-control " id="inputquantité" placeholder=" Taper son statut" name="statut">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>

        
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-3">
        
                <button type="submit" class="btn btn-primary" name="ajout" >AJOUTER </button>
            </div>
            <div class="col-lg-3">
            <a class="btn btn-primary" href='index.php'>SE DECONNECTER</a>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        
</form>
<?php
if(isset($_POST['ajout'])){ 
    $loginu=$_POST['loginu'];
    $mdpu=$_POST['passwordu'];
    $nomu=$_POST['nomu'];
    $tel=$_POST['tel'];
    $add=$_POST['add'];
    $profil=$_POST['profil'];
    $stat=$_POST['statut'];
     

    

    $prod=fopen("fichier.txt", 'a+' );
    
    while(!feof($prod)){
        $lines=fgets($prod);
    $fichier=explode('|', $lines);
    if($fichier[0]== $loginu){
        echo $fichier[0];
        echo "Ce compte existe déja";
    }else{
   
    $ajout="\n".$loginu."|".$mdpu."|".$nomu."|".$tel."|".$add."|".$profil."|".$stat."|";
    fwrite($prod,$ajout);
  
    }
    fclose($prod);
    }
    
      }
  
      
      $prod=fopen("fichier.txt", 'r' );
      echo "<table class='tete' border='1px' width='95%' >";
      echo "<tr class='titre'>
      
          <th>Login</th>
          <th>Mot de passe</th>
          <th>Nom de l'utilisateur</th>
          <th>Numéro téléphone</th>
          <th>Addresse</th>
          <th>Profil</th>
          <th>Statut</th>
      
      
      </tr>";
      
      while(!feof($prod)){
          $lines=fgets($prod);
          $fichier=explode('|', $lines);
          
             echo "<tr class='liste' >";				
     
                   echo "<td>" . $fichier[0] . "</td>";
                   echo "<td>" . $fichier[1] . "</td>";
                   echo "<td>" . $fichier[2] . "</td>";
                   echo "<td>" . $fichier[3] . "</td>";
                   echo "<td>" . $fichier[4] . "</td>";
                   echo "<td>" . $fichier[5] . "</td>";
                   echo "<td>" ;if($fichier[6]==debloquer){
                         echo "<a id=".$fichier[0]." href='modif1.php?login=$fichier[0]' class='btn btn-success'> debloquer</a>";

                   } else if($fichier[6]==bloquer){
                    echo "<a id=".$fichier[0]." href='modif1.php?login=$fichier[0]' class='btn btn-danger'> bloquer</a>";
                   }
                   echo "</td>";
                   
            echo "</tr>";
         }
     
      fclose($prod);
   
  
  echo "</table>";
  ?>
  
</div>
</center>
<style>
.tete{
    background-color:#7777;
    border: 1px solid blue;
    height:50px;
    line-height:50px;
}
body{
    background-color:#2222;
}


.liste{
text-align:center;
font-size: 20px;
background-color: white;

}
</style>
</body>
</html>