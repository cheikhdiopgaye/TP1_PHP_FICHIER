<?php
//extract($_GET);
//$login=$_GET['login'];
$login=$_GET["login"];

$fic='';
$fpt=fopen("fichier.txt", 'r' );


while(!feof($fpt)){
    $linep=fgets($fpt);
    $user=explode("|",$linep);

    if ($user[0]==$login )
         {
          if($user[6]=='debloquer')
          $user[6]='bloquer';
        else 
        $user[6]='debloquer';
       
        }
      $tab=$user[0].'|'.$user[1].'|'.$user[2].'|'.$user[3].'|'.$user[4].'|'.$user[5].'|'.$user[6]."|\n";
    $fic=$fic.$tab;
    //var_dump($fic);
}
    
fclose($fpt);

$var=fopen("fichier.txt", 'w+' );
fwrite($var,trim($fic));
fclose($var);
header("location: admin.php#".$login);

?>