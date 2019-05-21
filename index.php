<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>login</title>
</head>
<body>

<center>
 
<div class="container">   
    <br>
    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Login</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="POST">

                        <br>
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="login" value="" placeholder="username or email">                                        
                                    </div>
                                    <br>
                                    
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    <div class="input-group">
                                      <div class="checkbox">
                                    
                                          
                    
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                  <input type="submit" class='btn btn-success' value="Se connecter" name="valider"  >

                                      

                                    </div>
                                </div>


                             
                            </form>     

</center>
<?php



$fpt=fopen("fichier.txt", 'r' );


    if(isset($_POST['valider'])){
        $login= $_POST['login'];
        $noms= $_POST['nom'];
        $mdp= $_POST['password'];
        $erreur= false;

while(!feof($fpt)){
        if(!empty($login) && !empty($mdp)){
 
                  $linep=fgets($fpt);
                  $user=explode('|', $linep);

                if ($login=='gaye0@gmail.com' && $mdp=='diop123'){
                       header('Location: admin.php');
                }
                else if ($user[0]==$login && $user[1]==$mdp && $login!='gaye0@gmail.com' && $mdp!='diop123' && $user[6]!='bloquer'  ){
                      header('Location: acceuilv.php');
                }
                else if($user[0]!=$login || $user[1]!=$mdp){
                $erreur=true;
                }
        }

}
if($erreur==true){echo "Vous ne pouvez vous connecter avec ce compte";}
}

        fclose($fpt);
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
    background-image:url(acim/ac.png);
    background-size: 100% auto;
}


.titre{

}
</style>

</body>
</html>