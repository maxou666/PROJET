<?php

include ("connect.php"); 
 session_start();


extract($_POST);
$b = "'".$email."'" ;
$a = "'".$password."'" ;
$c = "'".$nom."'" ;
$d = "'".$prenom."'" ;

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password']))
{
   $tablec = array();
   $k = $bdd->prepare("SELECT `ID_USER` FROM `USER` WHERE `MAIL`=$b ");
                   $k->execute();
                   
                   while ($datac = $k->fetch()){  
                     $tablec = $datac ;
                   }        
                    // var_dump($tablec) ;
                    // //echo($datac);
                    // echo ("caca");

                    
                     
   if (!$tablec) {                
    $options = [
    'cost' => 12,
    ];
     $hash = password_hash($a, PASSWORD_BCRYPT, $options);
     $e = "'".$hash."'" ;
    // echo($b.$e.$c.$d);
    $f = $bdd->prepare("INSERT INTO `user`( `NOM`, `PRENOM`, `MAIL`, `MOT_DE_PASSE`) VALUES ($c,$d,$b,$e)");
                   $f->execute();
                       header('Location: login.php?inscri=1');

    }

    else {
            header('Location: login.php?erreur=3');
    }               
                    
                      
                     
          
   

}
?>