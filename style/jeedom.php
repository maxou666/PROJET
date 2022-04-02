<?php 
try
      {
         $bdd = new PDO( 'mysql:host=localhost;dbname=projet','root','');
      }
      catch (Exception $e)
      { 
         die('Erreur : '.$e->getMessage());
      }
      echo("test");
      $upt = "INSERT INTO `objet`(`DESCRIPTION`, `URL_IMAGE`, `ID_OBJET`) VALUES ('jeedom','non','5')";

      $bdd->exec($upt);   