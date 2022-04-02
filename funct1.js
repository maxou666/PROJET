var valide = document.getElementById("active");
var changer = document.getElementById("changer");
var select = document.getElementById("choix_heure");
var tij = document.getElementById("tij");
var froo = document.getElementById("froom");
var outi = document.getElementById("output");
var affiche = document.getElementById("afficher");
var choix = document.getElementById("choisir");
var change = document.getElementById("changer");
var heu = document.getElementById("heur");
var num = document.getElementById("numero");




affiche.addEventListener("click",afficherQR);
choix.addEventListener("click",choisirCreneau);
change.addEventListener("click",changerCreaneau);


valide.addEventListener("click",setBdd);
//tij.addEventListener("click",trui);
var heure = document.querySelectorAll(".heure") ;
const res = document.getElementById("res");
const tri = document.getElementById("try");
const lemail = document.getElementById("email");
const lanchor = document.getElementById("anchor");



var today = new Date();
//fct reset 

minuit = today.getHours()


if ( minuit!=0 ){

for (var i =0 ; i <heure.length  ; i++) {
  


 if (heure[i].title === 'true') {
    heure[i].disabled = true;
  }
     else {
    heure[i].disabled = false;
  } 
}
for (var i =0 ; i <heure.length  ; i++) {  
  if (minuit>= i) {
    heure[i+1].disabled = true;
  }
}
}

function choisirCreneau() {
    select.disabled = false;
    valide.disabled= false;
    choix.disabled=true;

    if (lanchor.title!== '') { 
        tri.textContent = "Vous avez déjà sélectionné un créneau";  
        select.disabled = true;
        valide.disabled= true;
        choix.disabled=true; 
}
}


    
function afficherQR () {
if (lanchor.title!== '') {

    aqr(lanchor.title)
    let a = "'"+lanchor.title+"'";
        tri.textContent = "Voici votre QRCODE";    
        fini()    
}
else {
    tri.textContent = "Vous n'avez pas encore réservé"
}
}
 function changerCreaneau (){
    let a;
    let y;    
    if (heu.title!== '')  {
         y  = heu.title;
         // tri.textContent = a;
         // //heu.title;
    }
    else  {
         y  = change.title;
          // tri.textContent = heu.title;
    }
    a = y.substr( 0,2);

      valide.disabled= false;
      
      
      select.disabled = false;
      //OK
      remplissage ( a,'1','1','objet' );    
      heure[3].disabled = false;
      valide.disabled= false;
      lanchor.title = '';
      outi.disabled = true;
    }




//remplir bdd avec creaneaux



function setBdd() {
  const choice = select.value;

  if (choice === heure[0].value) {
    res.textContent = "Vous n'avez pas selectionne de créneau";

  } 
  for (let i =1 ; i <heure.length  ; i++) {

     if (choice === heure[i].value) {
    heure[i].disabled = true;
    let $a = i-1; 
    tri.textContent = 'Vous avez sélectionné le créneau suivant : '+$a+':00h';
   // JSP C KOI remplissage($a,'0','0','objet' );
    remplissage (lemail.title,heure[i].id,Random(),'reservation');
    // remplissage (  lemail.title,'0','opt','user')
    // remplissage (lemail.title ,'0',heure[i].id,'user' )
    
    fini()
    change.title = heure[i].id;
    heu.title =heure[i].id;
    
  }
  
  }
  
      $("#choix_heure").prop("selectedIndex", 0);

  

  
  }
// function changeHeure (){   
//     heu.textContent=day.value;
//     $(function() {
//        let numi= "page1.php?numero="+num.title;
//       $.get(numi,{ newdate : (day.value)} ,  function(data) {
            
//       });

//     });
//   }



  function remplissage (lid,ladd,lrst,lbdd){
    $(function() {
       let numi= "include1.php?num="+num.title;
       heu.title= numi;
      $.get(numi, { id : lid , add : ladd, rst : lrst, bad : lbdd }, function(data) {
        
      });

    });
  }

 
  function fini() {
      select.disabled = true;
      valide.disabled= true;
      
    }
//RST
 

        
  
    var app;
  function Random(){
    var characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let result1= ' ';
    var charactersLength = characters.length;
    for ( let i = 0; i < 5; i++ ) {
        result1 += characters.charAt(Math.floor(Math.random() * charactersLength));
    }

    // res.textContent = result1;
    lanchor.title =result1;
    aqr(result1)  
    return result1;
     
  }
/*
 * QR Code generator output demo (TypeScript)
 *
 * Copyright (c) Project Nayuki. (MIT License)
 * https://www.nayuki.io/page/qr-code-generator-library
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the "Software"), to deal in
 * the Software without restriction, including without limitation the rights to
 * use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
 * the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 * - The above copyright notice and this permission notice shall be included in
 *   all copies or substantial portions of the Software.
 * - The Software is provided "as is", without warranty of any kind, express or
 *   implied, including but not limited to the warranties of merchantability,
 *   fitness for a particular purpose and noninfringement. In no event shall the
 *   authors or copyright holders be liable for any claim, damages or other
 *   liability, whether in an action of contract, tort or otherwise, arising from,
 *   out of or in connection with the Software or the use or other dealings in the
 *   Software.
 */
"use strict";
 
function aqr(a) {
    var outputElem = document.getElementById("output");
    // The main application program.
    function main() {
        while (outputElem.firstChild !== null)
            outputElem.removeChild(outputElem.firstChild);
        doBasicDemo();
    }    
    
    // Creates a single QR Code, then appends it to the document.
    function doBasicDemo() {
        
        var text = a; // User-supplied Unicode text
        var errCorLvl = qrcodegen.QrCode.Ecc.LOW; // Error correction level
        var qr = qrcodegen.QrCode.encodeText(text, errCorLvl); // Make the QR Code symbol
        drawCanvas(qr, 10, 4, "#FFFFFF", "#000000", appendCanvas("hello-world-QR")); // Draw it on screen
    }
    // Creates a variety of QR Codes that exercise different features of the library, and appends each one to the document.
    
    
    function appendCanvas(caption) {
        
        var result = document.createElement("canvas");
        outputElem.appendChild(result);
        return result;
    }
    // Draws the given QR Code, with the given module scale and border modules, onto the given HTML
    // canvas element. The canvas's width and height is resized to (qr.size + border * 2) * scale.
    // The drawn image is purely dark and light, and fully opaque.
    // The scale must be a positive integer and the border must be a non-negative integer.
    function drawCanvas(qr, scale, border, lightColor, darkColor, canvas) {
        if (scale <= 0 || border < 0)
            throw "Value out of range";
        var width = (qr.size + border * 2) * scale;
        canvas.width = width;
        canvas.height = width;
        var ctx = canvas.getContext("2d");
        for (var y = -border; y < qr.size + border; y++) {
            for (var x = -border; x < qr.size + border; x++) {
                ctx.fillStyle = qr.getModule(x, y) ? darkColor : lightColor;
                ctx.fillRect((x + border) * scale, (y + border) * scale, scale, scale);
            }
        }
    }
    
    main();
}

