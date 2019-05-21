
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">
    <title>modifier un produit</title>
</head>
<body>
<div>

<center>
<h2 class="tete"> SUPPRIMER UN PRODUIT</h2>
    <div class="ajout">

<form class="form-horizontal" method="POST">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
            <label></label>
                <input type="text" class="form-control" id="inputNom" placeholder="veillez taper le nom du produit à supprimer" name="nom">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
        
                <button type="submit" class="btn btn-primary" name="motidif" >Supprimer le produit </button>
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
  $newlines="";
   
 $prod=fopen("fichiersup.txt", 'r' );
    while(!feof($prod)){
      $lines=fgets($prod);
      $fichier=explode(',', $lines);

        if($nom==$fichier[0]){
            
            $effacer="";
           
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
</div>
<style>
.tete{
    background-color:#7777;
    border: 1px solid blue;
    height:50px;
    line-height:50px;
    width:100%;
}
body{
    background-color:#2222
}
.liste{
text-align:center;
font-size: 18px;
background-color: white;
}


.titre{

}
.titre{
    text-align: center;
    background-color: grey;
    font-size: 20px;
}
</style>
    
</body>
</html>