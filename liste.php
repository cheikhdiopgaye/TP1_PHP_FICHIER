<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <title>liste produits </title>
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
<center>
<h2 class="tete"> LA LISTE DE NOS PRODUITS</h2>
<br>
<br>
<?php

$prod=fopen("fichiersup.txt", 'r' );
echo "<table class='tete' border=1 width='100%' >";
echo "<tr class='titre'>

    <th><strong>Nom du produit</strong></th>
    <th><strong>Prix</strong></th>
    <th><strong>Quantité</strong></th>
    <th><strong>Montant</strong></th>

</tr>";
while(!feof($prod)){
    $lines=fgets($prod);
    $fichier=explode(',', $lines);
    //echo fread($prod, filesize('listeproduits.txt'));
    if($fichier[2]<10){             
     echo "<tr class='dim'>";				

     echo "<td>" . $fichier[0] . "</td>";
     echo "<td>" . $fichier[1] . "</td>";
     echo "<td>" . $fichier[2] . "</td>";
     echo "<td>" . $fichier[1]*$fichier[2] . "</td>";
    echo "</tr>";
    } else{
        echo "<tr class='liste'>";				

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
}
body{
    background-color:#2222
}


.liste{
text-align:center;
font-size: 18px;
background-color: white;
}
</style>
</body>
</html>