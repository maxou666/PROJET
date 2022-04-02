<?php
include("includes/head.html");
session_start();
if(!isset($_SESSION['email'])){
   header("location:login.php");
}
?>

<body class="text-center">
    <h1>Bonjour <?php echo($_SESSION['prenom']) ?>, bienvenue sur le sitre d'emprunt d'objets Co-MEUD !</h1>
    <h2>Pour choisir l'objet que tu veux emprunter, il te suffit de cliquer dessus :</h2>

    <div class="container">
        <a class="btn" href="page1.php?numero=1&amp;objet=l'aspirateur">
            <img 
                src="img/aspirateur_main.png"
                class="img-fluid rounded"
                height="250" width="248"
                alt="Aspirateur à main"
            />
        </a>
    </div>
    <div class="container">
        <a class="btn" href="page1.php?numero=2&amp;objet=l'appareil à fondue">
            <img 
                src="img/appareil_fondue.png"
                class="img-fluid rounded"
                height="250" width="248"
                alt="Appareil à fondue"
            />
        </a>
    </div>
    <div class="container">
        <a class="btn" href="page1.php?numero=3&amp;objet=l'appareil à raclette">
            <img
                src="img/appareil_raclette.png"
                class="img-fluid rounded"
                height="250" width="248"
                alt="Appareil à raclette"
            />
        </a>
    </div>
    <div class="container">
        <a class="btn" href="page1.php?numero=4&amp;objet=les pinces">
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