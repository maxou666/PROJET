<?php

try
      {
         $bdd = new PDO( 'mysql:host=localhost;dbname=projet','root','');
      }
      catch (Exception $e)
      { 
         die('Erreur : '.$e->getMessage());
      }
         
      $reponse  = $bdd->query("SELECT * FROM `objet1`");
      $tableau = array();
      
      
      // while ($data = $reponse->fetch()) 
      // { 
      //     $tableau = $data;  
      //     //secho join (',',($tableau)).'<br/>';
      //     }
?>          