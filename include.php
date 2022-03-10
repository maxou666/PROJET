	

 <?php 
 session_start();
include ("connect.php");	
   				
			
		
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
           // echo($_SESSION['email']);
           // echo($_SESSION['prenom']);
                     
		 
    	
		//;


		

		
 ?>