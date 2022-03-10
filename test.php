
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style/style.css" media="screen" type="text/css" />
        <meta name= "viewport" content="width=device-width,initial-scale=1.0">

        <script src="jquery-666.js" ></script>
        <title>Co-MEUD</title>
    </head>

    <body id = "bobo">
        <?php 
          include("testa.php")  ;    
        ?>
        
    	<h1 id = "heure" style = "text-align:center"> Bonjour <?php echo($_SESSION['prenom']) ?>, bienvenue sur la sélection d'objets !</h1>
        <h2 id = "email" style = "text-align:center"> Pour choisir un objet à emprunter, veuillez cliquer sur celui-ci</h2>
    	
    	<div ><form action="page1.php">
            
        		<button type="submit"><img src="img/aspirateur.jpg"height ="250" width="248"  /></button>

    		</form>
    	</div>
        <div ><form action="page2.php">
                <button type="submit"><img src="img/appareil_raclette.jpg" height ="250" width="248"  /></button>
            </form>
        </div>
        <div ><form action="page3.php">
                <button type="submit"><img src="img/appareil_fondue.jpg" height ="250" width="248"  /></button>
            </form>
        </div>
        <div ><form action="page4.php">
                <button type="submit"><img src="img/pinces.jpg" height ="250" width="248"  /></button>
            </form>
        </div>	
    </body>
</html>