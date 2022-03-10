<?php
session_start();
if(!isset($_SESSION['email'])){
   header("location:login.php");

}   
    include ("connect.php");  
    $f = "'".$_SESSION['email']."'" ;
    $today = date("H");
    
    $realtoday = $today+1;
    echo($realtoday);
    if ($realtoday!=24){
      
      	
        for ($i=1;$i<5;$i++ )  {
        
        $a = "`QRCODE".$i."`";
        $b = "`HEURE".$i."`";

		$st = $bdd->prepare("SELECT $b FROM `users` WHERE `Email`= $f");
        $st->execute();              
        while ($datac = $st->fetch()){        
            $tablec = $datac; 
         }    
        
        	if ($realtoday>=$tablec[0]) {
                
            $upat = "UPDATE `users` SET $a=''  WHERE `Email`=$f;";
            $bdd->exec($upat);
    
    //DEFINI L HEURE A LAQUELLE L OBJET A ETE EMPRUNTE
            
            $upat = "UPDATE `users` SET $b= NULL WHERE `Email`=$f;";
            $bdd->exec($upat);
        } 
        }  
        
    

    for ($m=0;$m<25;$m++ )  {
        
        $a = "`".$m."`";
        for ($n=1;$n<5;$n++ )  {
        $b = "'Objet".$n."'";

		
        if ($realtoday>=$m) {
                
            $upati = "UPDATE `reservation` SET $a=''  WHERE `Objet`= $b;";
            $bdd->exec($upati);
        }    
        }
        }
    
    //DEFINI L HEURE A LAQUELLE L OBJET A ETE EMPRUNTE
            
            
           
        
    } 
    else {
      for ($m=0;$m<24;$m++ )  {
      	 $a = "`".$m."`";
      		for ($n=1;$n<5;$n++ )  {
      		$b = "`objet".$n."`";
	
      	$upd = "UPDATE $b SET $a='1';";

      $bdd->exec($upd);
    } 	 }} 

