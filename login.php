<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="login.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1>Connexion</h1>

                

                <label><b>Email</b></label>
                <input type="email" placeholder="Entrer votre email" name="email" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

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
                       echo "<script> alert(\"Vous etes bien inscrit, vous pouvez desormais vous connecter\")</script>";
                }
                ?>
            </form>
        </div>
        <div id="container1">
            <!-- zone de connexion -->
            
            <form action="inscription.php" method="GET">
                <h1>Inscription</h1>

                <label><b>Nom</b></label>
                <input type="text" placeholder="Entrer votre nom" name="nom" required>

                <label><b>Prenom</b></label>
                <input type="text" placeholder="Entrer votre prenom" name="prenom" required>

                <label><b>Nom d'utilisateur</b></label>
                <input type="email" placeholder="Entrer le nom d'utilisateur" name="emaili" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="passwordi" required>

                 <button type="submit" id='submit' value='LOGIN' >S inscrire</button>
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