
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        <meta name= "viewport" content="width=device-width,initial-scale=1.0">

        <script src="jquery-666.js" ></script>
        <title>Projet Meuble</title>
    </head>

    <body id = "bobo">
        <?php 
          include("testa.php")  ;    
        ?>
        
    	<title>Projet Meuble</title>
    	<p id = "heure" > Bonjour <?php echo($_SESSION['prenom']) ?>,bienvenue sur la selection dobjet</p>
        <p id = "email" > Pour choisir un objet a emprunter, veuillez cliquer sur celui ci</p>
    	
    	<div ><form action="page1.php">
            
        		<button type="submit"><img src="aspi "height ="250" width="248"  /></button>

    		</form>
    	</div>
        <div ><form action="page2.php">
                <button type="submit"><img src="raclette" height ="250" width="248"  /></button>
            </form>
        </div>
        <div ><form action="page3.php">
                <button type="submit"><img src="fondue" height ="250" width="248"  /></button>
            </form>
        </div>
        <div ><form action="page4.php">
                <button type="submit"><img src="pinces" height ="250" width="248"  /></button>
            </form>
        </div>	
        <p id= "res" class = "resi">test</p>	
    </body>
</html>