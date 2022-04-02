

<?php include("includes/head.html") ?>

<body class="text-center">
    <div class="container">
        <h2 class="mb-3 fw-normal">Connexion</h2>

        <?php
            if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1 || $err==2){
                    echo '<div class="alert alert-danger" role="alert">Utilisateur ou mot de passe incorrect</div>';
                }
            }
            if(isset($_GET['inscri'])){
                    $ins = $_GET['inscri'];
                    if($ins==1 )
                       echo "<script> alert(\"Vous etes bien inscrit, vous pouvez desormais vous connecter\")</script>";
                }
        ?>

        <form action="verification.php" method="POST">
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="Entrez votre email" name="email" required>
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingInput" placeholder="Entrez votre mot de passe" name="password" required>
                <label for="floatingInput">Mot de passe</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Se connecter</button>
        </form>
<!--         <a class="btn btn-warning mb-2 mt-2" href="register.php">S'enregistrer</a>
 -->    </div>


    <div class ="container">
        <h2 class="mb-3 fw-normal">Inscription</h2>
                <form action="inscription.php" method="POST">


            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name =nom placeholder="Entrez votre email" name="email" required>
                <label for="floatingInput">Nom</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput"name = prenom placeholder="Entrez votre mot de passe" name="password" required>
                <label for="floatingInput">Prenom</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name = email  placeholder="Entrez votre email" name="email" required>
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingInput" name = password placeholder="Entrez votre email" name="email" required>
                <label for="floatingInput">Mot de passe</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">S'inscrire</button>


                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==3)
                    echo '<div class="alert alert-danger" role="alert">Email déjà utilisé</div>';                }
                ?>
            </form>
        </div>
    </body>

<?php include("includes/foot.html"); ?>