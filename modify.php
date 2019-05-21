  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">
    <title>modifier un produit</title>
</head>
<body>

<center>
<h2 class="tete"> MODIFIER UN PRODUIT</h2>
    <div class="ajout">

<form class="form-horizontal" method="POST" action="modify.php">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
            <label>Nom du produit</label>
                <input type="text" class="form-control" id="inputNom" placeholder="veillez taper le nom du produit à modifier" name="nom">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
            <label>Prix unitaire</label>
                <input type="number" class="form-control" id="inputprixunitaire" placeholder="veillez taper le nouveau prix unitaire" name="prix">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        
        
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <label>Quantité du produit</label>
                <input type="number" class="form-control " id="inputquantité" placeholder=" Taper la nouvelle quantité" name="quantite">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        
        
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
        
                <button type="submit" class="btn btn-primary"  name="motidif" >Modifier le produit </button>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        
</form>
<?php


echo "<table class='tete' border=1 width='80%' >";
  echo "<tr class='titre'>
  
      <th>Nom du produit</th>
      <th>Prix (FCFA)</th>
      <th>Quantité</th>
      <th>Montant(FCFA)</th>
  
  </tr>";
  if(isset($_POST['motidif'])){
  $nom=$_POST['nom'];
  $prix=$_POST['prix'];
  $quant=$_POST['quantite'];
  $mont=$prix * $quant;
  
  $prod=fopen("fichiersup.txt", 'r' );
    while(!feof($prod)){
      $lines=fgets($prod);
      $fichier=explode(',', $lines);

        if($nom==$fichier[0]){
            $fichier[1]=$prix;
            $fichier[2]=$quant;
            
            $effacer=$fichier[0].",".$fichier[1].",".$fichier[2].",".$fichier[3];
           
        }else {
            $effacer=$lines;
        }
       $newlines=$newlines.$effacer;
    }

    fclose($prod);
    $prod=fopen("fichiersup.txt", 'w+' );
          
            fwrite($prod,$newlines);
      
    fclose($prod);
    }

    
    $prod=fopen("fichiersup.txt", 'r' );
    
    while(!feof($prod)){
        $lines=fgets($prod);
        $fichier=explode(',', $lines);
        if($fichier[2]<10){             
          echo "<tr class='rouge'>";				
   
            echo "<td>" . $fichier[0] . "</td>";
            echo "<td>" . $fichier[1] . "</td>";
            echo "<td>" . $fichier[2] . "</td>";
            echo "<td>" . $fichier[1]*$fichier[2] . "</td>";
          echo "</tr>";
       } else{
           echo "<tr  class='liste'>";				
   
                 echo "<td>" . $fichier[0] . "</td>";
                 echo "<td>" . $fichier[1] . "</td>";
                 echo "<td>" . $fichier[2] . "</td>";
                 echo "<td>" . $fichier[1]*$fichier[2] . "</td>";
          echo "</tr>";
       }
   

    }



    fclose($prod);
 

echo "</table>";
?>

</center>
<style>
.tete{
    background-color:#7777;
    border: 1px solid blue;
    height:50px;
    line-height:50px;
    width:100%;
}
body{
    background-color:#2222;
}

.liste{
text-align:center;
font-size: 18px;
background-color: white;
}

.titre{
    text-align: center;
    background-color: grey;
    font-size: 20px;
}
</style>

</body>
</html>