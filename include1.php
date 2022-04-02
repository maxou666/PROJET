   

 <?php 
 session_start();
if(!isset($_SESSION['email'])){
   header("location:login.php");
}

if(isset($_GET['num'])){
      $num = "'".$_GET['num']."'";
      echo($num);
  }
else {
   $num = $page;

}
                
  
try
      {
         $bdd = new PDO( 'mysql:host=localhost;dbname=projet','root','');
      }
      catch (Exception $e)
      { 
         die('Erreur : '.$e->getMessage());
      }

          $dat = date('Y-m-d');
          $dati = "'".$dat."'";
         
      $reponse  = $bdd->query("SELECT  `HEURE_DEBUT` FROM `reservation` WHERE `ID_OBJET` = $num AND `JOUR`= $dati ");

      $tableau = array();
      
      
      while ($data = $reponse->fetch()) 
      { 
          $tableau = $data;  

          //echo join (',',($tableau)).'<br/>';
          }
               
         for ($i=0; $i <24 ; $i++) { 
             $tg[$i] = 'false';
          }
         
           for ($i=0; $i <count($tableau)-1 ; $i++) { 
            // code...
            $alpha = substr($tableau[$i], 0,-9);
           //   echo($alpha);
            
            $tg[$alpha] = 'true';

           }
           
           
            
          //echo join (',',($tg)).'<br/>';
           //echo($_SESSION['email']);
           //echo($_SESSION['prenom']);
  // }                   
       
      
      //;
$d = "'".$_SESSION['email']."'" ;
if(isset($_GET['bad'])){
      if ($_GET['bad']==='objet') {
   $n = "'".$_GET['id'].":00:00.00'"  ;
   $m = $_GET['rst'] ;
   $a = "`".$n."`" ;
   $b = "'".$m."'" ;
   echo($b);
   $upd = "DELETE FROM `reservation` WHERE `ID_OBJET` = $num AND `JOUR`= $dati AND `ID_USER`= (SELECT `ID_USER` FROM `user` WHERE `MAIL`=$d)";

      $bdd->exec($upd);
}

// SET VALEUR QR CODE DANS LA TABLE RESERVATION (SERA UTILISEE PAR ARDUINO)
else if ($_GET['bad']==='reservation') { 
   $m = $_GET['rst'] ;
   $q = $_GET['id'] ;
   $g = $_GET['add'] ;
   $k = "'".$g.":00:00.00'" ;
   $sfin = +$g +1;
   $l = "'".$sfin.":00:00.00'" ;
   $b = "'".$m."'" ;
   $f = "'".$q."'" ;
   
     //p echo($l.$b);

   $upt = "INSERT INTO `reservation`( `ID_USER`, `ID_OBJET`, `QRCODE`,`JOUR`, `HEURE_DEBUT`, `HEURE_FIN`) VALUES ((SELECT `ID_USER` FROM `user` WHERE `MAIL`=$d) ,$num ,$b,$dati,$k,$l);";

      $bdd->exec($upt);   

   
}     

}    

      
 ?>