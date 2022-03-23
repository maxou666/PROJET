<?php

include ("connect.php"); 
 session_start();


extract($_POST);
$b = "'".$emaili."'" ;
$a = "'".$passwordi."'" ;
$c = "'".$nom."'" ;
$d = "'".$prenom."'" ;

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['emaili']) && isset($_POST['passwordi']))
{

    $options = [
    'cost' => 12, 
    ];
     $hash = password_hash($a, PASSWORD_BCRYPT, $options);
     $e = "'".$hash."'" ;
    $f = $bdd->prepare("INSERT INTO `users`(`Nom`, `Prenom`, `Email`, `Password`, `RESERV`, `QRCODE1`, `HEURE1`, `QRCODE2`, `HEURE2`, `QRCODE3`, `HEURE3`, `QRCODE4`, `HEURE4`)  VALUES ($c,$d,$b,$e,'1','',NULL,'',NULL,'',NULL,'',NULL);");
                   $f->execute();
                    
                      
                      header('Location: login.php?inscri=1');
          
   

}
?>