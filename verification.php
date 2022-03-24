<?php

include ("connect.php"); 
session_start();


extract($_POST);
$b = "'".$email."'" ;

if(isset($_POST['email']) && isset($_POST['password'])){
    $stmt = $bdd->prepare("SELECT `Password` FROM `users` WHERE `Email`=$b");
    $stmt->execute(); 
    $stm = $bdd->prepare("SELECT `Prenom` FROM `users` WHERE `Email`=$b");
    $stm->execute();              
    
    while ($data = $stmt->fetch()){ 
                 
        $tableau = $data;  
        // echo join (',',($tableau)).'<br/>';
        // echo $tableau[0];
    } 
    
    while ($dat = $stm->fetch()){ 
                 
        $tablea = $dat;  
        // echo join (',',($tablea)).'<br/>';
        // echo $tablea[0];
    }       
    
    $f = "'".$password."'" ;
    if (password_verify($f, $tableau[0])){
        echo($email);
        echo($tablea[0]);
        $_SESSION['email'] = $email;
        $_SESSION['prenom'] = $tablea[0];
        header('Location: index.php');
    }
    else{
        header('Location: login.php?erreur=1');
                   

        //$f = $bdd->prepare("INSERT INTO `users`(`Nom`, `Prenom`, `Email`, `Password`, `RESERV`) VALUES ('mar','ti',$b,$a,'1');");
        //$f->execute();
    } 
}
?>