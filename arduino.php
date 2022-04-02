

<?php

if(isset($_GET["qrcode"])) {
   $qr = " ".$_GET["qrcode"]; // get temperature value from HTTP GET
   $g = "'".$qr."'";
 // echo($qr);
  //  echo json_encode([
  // "value_1" => "4",
  // ]);
   //echo($qr);
 include("connect.php");
        date_default_timezone_set("Europe/Paris");  
        $today = date("H");   
       // echo($today);
        //echo($today);
        $a ="'".$today.":00:00.00'";
       // echo($a);
        $stm = $bdd->prepare("SELECT `ID_OBJET` FROM `reservation` WHERE `HEURE_DEBUT` = $a AND `QRCODE`= $g");
                 $tablec = array(); 
                                  $stm->execute();     

            while ($data = $stm->fetch()) 
                { 
              
                 $tablec = $data;
                } 
                 
               // var_dump ($data);
                if ($tablec== NULL){
                    echo("vide");
                }
                else {
                  // echo($tablec[0]);
                  $datas = array('num' => $tablec[0] );
                 

                 echo ("[".json_encode($datas)."]");             
        //      //   //echo("correspondance en ".$i);
                 }
       // echo( $data[22]);
        // // echo( $qr);
        //       if($reponse[$a]==$qr ) {
        //      //   $datas = array('age' => $i );
        //      //   echo("nickel");

                    

        //      //    echo ("[".json_encode($datas)."]");             
        //      //   //echo("correspondance en ".$i);
        //       }
             // else {
             //    //echo("correspap");
             //    } 
                      
          } 
 ?>

