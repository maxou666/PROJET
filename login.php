<?php include("includes/head.html") ?>

<head>
    <link rel="stylesheet" href="style/login.css">
</head>

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
        <a class="btn btn-warning mb-2 mt-2" href="register.php">S'enregistrer</a>
    </div>
</body>

<?php include("includes/foot.html"); ?>