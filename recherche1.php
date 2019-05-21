<!DOCTYPE html>
<html>
    <head>
        <title>Recherche produit</title>
        <meta charget="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="styles.css">
      
    </head>
      <body>
        <center>
      <h2 class="tete"> RECHERCHE D'UN PRODUIT</h2>
<br>
<br>

      <div id="form1"> 
    <form class="form-inline"  method="POST">
    <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" id="nom1" class="sr-only">Nom du produit</label>
    <input type="text" class="form-control" id="nom3" name="nom" placeholder="Nom du produit">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2"  id="email"  class="sr-only">Prix minimal</label>
    <input type="text" class="form-control" id="input"  name="prix_min" placeholder="Prix minimal">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" id="pass" class="sr-only">Prix maximal</label>
    <input type="text" class="form-control" id="inputPassword3"  name="prix_max" placeholder="Prix maximal">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" id="quant" class="sr-only">Quantité</label>
    <input type="number" class="form-control" id="inputPassword2" name="quantite" placeholder="Quantité">
  </div>
  <br>
  <br>
  <br>
  <br>
 
  <button type="submit" class="btn btn-primary mb-12" id="conn" name="recherche">Recherche</button>
  
</form>
</div> 
<br>




<?php


$quant=$_POST['quantite'];
$nom=$_POST['nom'];
$pmin=$_POST['prix_min'];
$pmax=$_POST['prix_max'];

$prod=fopen("fichiersup.txt", 'r' );


if(!empty($_POST["quantite"])){
  echo "<table class='tete' border=1 width='80%' >";
  echo "<tr class='titre'>
  
      <th><strong>Nom du produit</strong></th>
      <th><strong>Prix</strong></th>
      <th><strong>Quantité</strong></th>
      <th><strong>Montant</strong></th>
  
  </tr>";
    
    while(!feof($prod)){
      $lines=fgets($prod);
      $fichier=explode(',', $lines);

        if($quant==$fichier[2]){

          echo "<tr  class='liste'>";
          echo "<td>" . $fichier[0] . "</td>";
          echo "<td>" . $fichier[1] . "</td>";
          echo "<td>" . $fichier[2] . "</td>";
          echo "<td>" . $fichier[1]*$fichier[2] . "</td>";
          echo "</tr>";
  
            
        }
        
      }
    }

    if(!empty($nom)){
 
      echo "<table class='tete' border=1 width='80%' >";
      echo "<tr class='titre'>
      
          <th><strong>Nom du produit</strong></th>
          <th><strong>Prix</strong></th>
          <th><strong>Quantité</strong></th>
          <th><strong>Montant</strong></th>
      
      </tr>";
      while(!feof($prod)){
        $lines=fgets($prod);
        $fichier=explode(',', $lines);
  
          if($nom==$fichier[0]){
  
            echo "<tr  class='liste'>";
            echo "<td>" . $fichier[0] . "</td>";
            echo "<td>" . $fichier[1] . "</td>";
            echo "<td>" . $fichier[2] . "</td>";
            echo "<td>" . $fichier[1]*$fichier[2] . "</td>";
            echo "</tr>";
    
              
          }
          
        }
      }
      if(!empty($pmax)){
 
        echo "<table class='tete' border=1 width='80%' >";
        echo "<tr class='titre'>
        
            <th><strong>Nom du produit</strong></th>
            <th><strong>Prix</strong></th>
            <th><strong>Quantité</strong></th>
            <th><strong>Montant</strong></th>
        
        </tr>";
        while(!feof($prod)){
          $lines=fgets($prod);
          $fichier=explode(',', $lines);
    
            if($pmax <= $fichier[1]){
    
              echo "<tr  class='liste' >";
              echo "<td>" . $fichier[0] . "</td>";
              echo "<td>" . $fichier[1] . "</td>";
              echo "<td>" . $fichier[2] . "</td>";
              echo "<td>" . $fichier[1]*$fichier[2] . "</td>";
              echo "</tr>";
      
                
            }
            
          }
        }
        if(!empty($pmin)){
          echo "<table class='tete' border=1 width='80%' >";
          echo "<tr class='titre'>
          
              <th><strong>Nom du produit</strong></th>
              <th><strong>Prix</strong></th>
              <th><strong>Quantité</strong></th>
              <th><strong>Montant</strong></th>
          
          </tr>";
    
          while(!feof($prod)){
            $lines=fgets($prod);
            $fichier=explode(',', $lines);
      
              if($pmin >= $fichier[1]){
      
                echo "<tr  class='liste'>";
                echo "<td>" . $fichier[0] . "</td>";
                echo "<td>" . $fichier[1] . "</td>";
                echo "<td>" . $fichier[2] . "</td>";
                echo "<td>" . $fichier[1]*$fichier[2] . "</td>";
                echo "</tr>";
        
                  
              }
              
            }
          }
  



fclose($prod);
echo "</table>";
?>
<style>
.tete{
    background-color:#7777;
    border: 1px solid blue;
    height:50px;
    line-height:50px;
}
body{
    background-color:#2222
}


.titre{

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
</center>
 </body>
</html>