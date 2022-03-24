<?php
include("includes/head.html");
include("testa.php");
?>

<body class="text-center">
    <h1>Bonjour <?php echo($_SESSION['prenom']) ?>, bienvenue sur le sitre d'emprunt d'objets Co-MEUD !</h1>
    <h2>Pour choisir l'objet que tu veux emprunter, il te suffit de cliquer dessus :</h2>

    <div class="container">
        <a class="btn" href="page1.php">
            <img 
                src="img/aspirateur_main.png"
                class="img-fluid rounded"
                height="250" width="248"
                alt="Aspirateur à main"
            />
        </a>
    </div>
    <div class="container">
        <a class="btn" href="page2.php">
            <img 
                src="img/appareil_fondue.png"
                class="img-fluid rounded"
                height="250" width="248"
                alt="Appareil à fondue"
            />
        </a>
    </div>
    <div class="container">
        <a class="btn" href="page3.php">
            <img
                src="img/appareil_raclette.png"
                class="img-fluid rounded"
                height="250" width="248"
                alt="Appareil à raclette"
            />
        </a>
    </div>
    <div class="container">
        <a class="btn" href="page4.php">
            <img
                src="img/pinces.png"
                class="img-fluid rounded"
                height="250" width="248"
                alt="Pinces"
            />
        </a>
    </div>
</body>

<?php include("includes/foot.html") ?>