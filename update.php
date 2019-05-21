<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <title>update.php</title>
</head>
<body>
    <div class="conteneur">
            <h1 class="titre">update produit dans la list des produits</h1>
        <div class="update">
            <form class="form-horizontal" method="POST">
                <div class="row">
                     <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <label>update produit </label>
                            <input type="text"  id="inputNom" class="form-control" placeholder="Taper le nom du produit" name="Nom" >
                        </div>
                    <div class="col-lg-3"></div>  
                </div>
                <br> 
                    <div class="row">
                        <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <button class="submit" type="btn btn-default"> taper le nom</button>
                            </div>
                        <div class="col-lg-3"></div>
                     
                    </div>
                <br> 
            </form>
        </div>
    </div>
        <?php
                echo" <table border=\"1\" width=\"100%\" background-color=\"grey\" >";
           
                    //En tete du tableau
                echo" <thead>
                        <tr>
                            <th>Nom </th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            <th>Montant</th>
                        </tr>
                    </thead>";
                    $produit=array(
                        array('Nom'=>'parfun','Prix'=>5000,'Quantite'=>100,'Montant'=>500000),
                        array('Nom'=>'parfun','Prix'=>5000,'Quantite'=>100,'Montant'=>500000),
                        array('Nom'=>'sucre','Prix'=>5000,'Quantite'=>100,'Montant'=>500000),
                        array('Nom'=>'parfun','Prix'=>5000,'Quantite'=>100,'Montant'=>500000),
                        array('Nom'=>'savon','Prix'=>5000,'Quantite'=>100,'Montant'=>500000),
                        array('Nom'=>'parfun','Prix'=>50,'Quantite'=>100,'Montant'=>500000),
                        array('Nom'=>'bois','Prix'=>500,'Quantite'=>100,'Montant'=>500000),
                        array('Nom'=>'parfun','Prix'=>5000,'Quantite'=>100,'Montant'=>500000),
                        array('Nom'=>'parfun','Prix'=>5000,'Quantite'=>100,'Montant'=>500000),
                        array('Nom'=>'parfun','Prix'=>5000,'Quantite'=>100,'Montant'=>500000),
                        array('Nom'=>'parfun','Prix'=>5000,'Quantite'=>100,'Montant'=>500000),
                        array('Nom'=>'parfun','Prix'=>5000,'Quantite'=>100,'Montant'=>500000),
                        array('Nom'=>'parfun','Prix'=>5000,'Quantite'=>100,'Montant'=>500000),
                        array('Nom'=>'parfun','Prix'=>5000,'Quantite'=>100,'Montant'=>500000),
                        );
                        
                        //afficher le tableau
                        foreach($produit as $cle=>$tab){
                            foreach($tab as $sky=>$valeur){
                               echo" <td><strong> $valeur </strong></td>";
                            }
                            echo "</tr>";
                        }
                        echo "</table>";
            ?>
    <style>
        .titre{
            text-align:center;
        }

        body{
       background:#7777;
   }
    </style>
</body>
</html>