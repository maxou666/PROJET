<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="login.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="arduino.php" method="GET">
                <h1>Connexion</h1>

                

                <label><b>qr</b></label>
                <input type="text" placeholder="Entrer votre email" name="qrcode" required>
                <button type="submit" id='submit' value='LOGIN' >S inscrire</button>
               
            </form>
        </div>
        
    </body>
</html>
