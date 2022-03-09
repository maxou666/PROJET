   

 <?php 
 session_start();
if(!isset($_SESSION['email'])){
   header("location:login.php");

}   
try
      {
         $bdd = new PDO( 'mysql:host=localhost;dbname=projet','root','');
      }
      catch (Exception $e)
      { 
         die('Erreur : '.$e->getMessage());
      }
         
      $reponse  = $bdd->query("SELECT * FROM `objet4`");
      $tableau = array();
      
      
      while ($data = $reponse->fetch()) 
      { 
          $tableau = $data;  
          //secho join (',',($tableau)).'<br/>';
          }
               
         
      
           for ($i=0; $i <count($tableau) ; $i++) { 
            // code...
         
            if ($tableau[$i]== '0') {
            $tg[$i] = 'true';
           }
           else {
            $tg[$i] = 'false';
           }
           
          }  
          //echo join (',',($tg)).'<br/>';
           //echo($_SESSION['email']);
           //echo($_SESSION['prenom']);
                     
       
      
      //;
if(isset($_GET['bdd'])){
if ($_GET['bdd']==='objet') {
   $n = $_GET['id'] ;
   $m = $_GET['rst'] ;
   $a = "`".$n."`" ;
   $b = "'".$m."'" ;
   echo($b);
   $upd = "UPDATE `objet4` SET $a=$b;";

      $bdd->exec($upd);
}

// SET VALEUR QR CODE DANS LA TABLE RESERVATION (SERA UTILISEE PAR ARDUINO)
else if ($_GET['bdd']==='reservation') { 
   $m = $_GET['rst'] ;
   $q = $_GET['id'] ;
   $k = $_GET['add'] ;
   $l = "`".$k."`" ;
   $b = "'".$m."'" ;
   $f = "'".$q."'" ;
      echo($l.$b);

   $upt = "UPDATE `reservation` SET $l=$b WHERE `Objet`='Objet4';";
      $bdd->exec($upt);   

   $up = "UPDATE `users` SET `QRCODE4`=$b WHERE `Email`=$f;";
      $bdd->exec($up);  
}     
//DEFINI RESERVATAION PAR L INDIVIDU A 1
else if ($_GET['bdd']==='user') { 
   if ($_GET['rst'] == 'opt'){ 
   $q = $_GET['id'] ;
   $f = "'".$q."'" ;
   $upt = "UPDATE `users` SET `RESERV`= '1' WHERE `Email`=$f;";
      $bdd->exec($upt);
   }
   //DEFINI L HEURE A LAQUELLE L OBJET A ETE EMPRUNTE
   else{ 
   $g = $_GET['rst'] ;
   $t = "'".$g."'" ;

   $q = $_GET['id'] ;
   $f = "'".$q."'" ;
   $upt = "UPDATE `users` SET `HEURE4`= $t WHERE `Email`=$f;";
      $bdd->exec($upt);
}
}  
     }  

      
 ?>