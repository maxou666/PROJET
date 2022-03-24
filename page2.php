<?php include("includes/head.html") ?>

<body id="froom" class="text-center">
    <?php 
          include("include2.php"); 
          $a = "'".$_SESSION['email']."'" ;
          //echo $a ;
          $stm = $bdd->prepare("SELECT `QRCODE2` FROM `users` WHERE `Email`= $a");
                 $stm->execute();              
            while ($data = $stm->fetch()) 
                { 
                 
               $tablec = $data;  
          } 
          $st = $bdd->prepare("SELECT `HEURE2` FROM `users` WHERE `Email`= $a");
                 $st->execute();              
            while ($datac = $st->fetch()) 
                { 
                 
               $tableci = $datac;  
          } 
              
             
            
            if (!$tablec[0]) {
                $anchor = NULL;
                $heur = NULL;
            }
            else{
               $anchor =$tablec[0];
               $heur = $tableci[0];
              // echo($anchor);

            }
    ?>

<div class="container">
        <h1 id="email" title="<?php echo($_SESSION['email'])?>"> Vous avez choisi l'appareil à fondue !</h1>

        <p id="anchor" title="<?php echo($anchor)?>"> </p>
        <p id="heur" title="<?php echo($heur)?>"> </p>
        <div style="text-align:center" id="output">

        </div>


        <div>
            <button id="afficher" class="afficher btn btn-success mt-2 mb-2" type="submit">Afficher le QRCODE</button>
        </div>

        <div>
            <button id="choisir" class="choisir btn btn-primary mt-2 mb-2" type="submit">Choisir un créneau</button>
        </div>

        <div>
            <button id="changer" class="changer btn btn-primary mt-2 mb-2" title="cgt" type="submit">Changer de
                créneau</button>
        </div>

        <div>
            <select class="form-select custom-select" disabled id="choix_heure">
                <option selected>Choisissez votre créneau</option>
                <option style="text-align:center" class="heure" id="nul" value="nul" value="">--:--</option>
                <option style="text-align:center" class="heure" id="0" value="zero" title="<?php echo $tg[0] ?>"
                    value="">
                    00:00</option>
                <option style="text-align:center" class="heure" id="1" value="un" title="<?php echo $tg[1] ?>" value="">
                    01:00</option>
                <option style="text-align:center" class="heure" id="2" value="deux" title="<?php echo $tg[2] ?>"
                    value="">
                    02:00</option>
                <option style="text-align:center" class="heure" id="3" value="trois" title="<?php echo $tg[3] ?>"
                    value="">
                    03:00</option>
                <option style="text-align:center" class="heure" id="4" value="quatre" title="<?php echo $tg[4] ?>"
                    value="">
                    04:00</option>
                <option style="text-align:center" class="heure" id="5" value="cinq" title="<?php echo $tg[5] ?>"
                    value="">
                    05:00</option>
                <option style="text-align:center" class="heure" id="6" value="six" title="<?php echo $tg[6] ?>"
                    value="">
                    06:00</option>
                <option style="text-align:center" class="heure" id="7" value="sept" title="<?php echo $tg[7] ?>"
                    value="">
                    07:00</option>
                <option style="text-align:center" class="heure" id="8" value="huit" title="<?php echo $tg[8] ?>"
                    value="">
                    08:00</option>
                <option style="text-align:center" class="heure" id="9" value="neuf" title="<?php echo $tg[9] ?>"
                    value="">
                    09:00</option>
                <option style="text-align:center" class="heure" id="10" value="dix" title="<?php echo $tg[10] ?>"
                    value="">
                    10:00</option>
                <option style="text-align:center" class="heure" id="11" value="onze" title="<?php echo $tg[11] ?>"
                    value="">
                    11:00</option>
                <option style="text-align:center" class="heure" id="12" value="douze" title="<?php echo $tg[12] ?>"
                    value="">12:00</option>
                <option style="text-align:center" class="heure" id="13" value="treize" title="<?php echo $tg[13] ?>"
                    value="">13:00</option>
                <option style="text-align:center" class="heure" id="14" value="quatorze" title="<?php echo $tg[14] ?>"
                    value="">14:00</option>
                <option style="text-align:center" class="heure" id="15" value="quinze" title="<?php echo $tg[15] ?>"
                    value="">15:00</option>
                <option style="text-align:center" class="heure" id="16" value="seize" title="<?php echo $tg[16] ?>"
                    value="">16:00</option>
                <option style="text-align:center" class="heure" id="17" value="dix_sept" title="<?php echo $tg[17] ?>"
                    value="">17:00</option>
                <option style="text-align:center" class="heure" id="18" value="dix_huit" title="<?php echo $tg[18] ?>"
                    value="">18:00</option>
                <option style="text-align:center" class="heure" id="19" value="dix_neuf" title="<?php echo $tg[19] ?>"
                    value="">19:00</option>
                <option style="text-align:center" class="heure" id="20" value="vingt" title="<?php echo $tg[20] ?>"
                    value="">20:00</option>
                <option style="text-align:center" class="heure" id="21" value="vingt_et_un"
                    title="<?php echo $tg[21] ?>" value="">21:00</option>
                <option style="text-align:center" class="heure" id="22" value="vingt_deux" title="<?php echo $tg[22] ?>"
                    value="">22:00</option>
                <option style="text-align:center" class="heure" id="23" value="vingt_trois"
                    title="<?php echo $tg[23] ?>" value="">23:00</option>

            </select>
            <button disabled id="active" class="valide btn btn-light mt-1" type="submit">Valider</button>
        </div>
        <!-- <div class="custom-select" style="width:20px;"> -->

        <!-- </div> -->


        <div>
            <button id="reset" class="reset btn btn-danger mt-2 mb-2" type="submit">Reset</button>
        </div>
    </div>

    <p id="res" class="resi"></p>
    <p id="try" class="tri"></p>





</body>
<script src="./funct2.js" type="text/javascript"></script>
<script type="application/javascript" src="qrcodegen.js"></script>

<?php include("includes/foot.html") ?>