<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style/login.css" media="screen" type="text/css" />
        <link rel="icon" href="img/favicon.ico" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1>Connexion</h1>

                

                <label><b>Email</b></label>
                <input type="email" placeholder="Entrez votre email" name="email" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrez votre mot de passe" name="password" required>

                <button type="submit" id='submit' value='LOGIN' >Se connecter</button>
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                if(isset($_GET['inscri'])){
                    $ins = $_GET['inscri'];
                    if($ins==1 )
                       echo "<script> alert(\"Vous êtes bien inscrit, vous pouvez désormais vous connecter\")</script>";
                }
                ?>
            </form>
        </div>
        <div id="container1">
            <!-- zone de connexion -->
            
            <form action="inscription.php" method="GET">
                <h1>Inscription</h1>

                <label><b>Nom</b></label>
                <input type="text" placeholder="Entrez votre nom" name="nom" required>

                <label><b>Prénom</b></label>
                <input type="text" placeholder="Entrez votre prenom" name="prenom" required>

                <label><b>Email</b></label>
                <input type="email" placeholder="Entreé votre email" name="emaili" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrez votre mot de passe" name="passwordi" required>

                 <button type="submit" id='submit' value='LOGIN' >S'inscrire</button>
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>