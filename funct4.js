var valide = document.getElementById("active");
var reset = document.getElementById("reset");
var changer = document.getElementById("changer");
var select = document.getElementById("choix_heure");
var tij = document.getElementById("tij");
var froo = document.getElementById("froom");
var outi = document.getElementById("output");
var affiche = document.getElementById("afficher");
var choix = document.getElementById("choisir");
var change = document.getElementById("changer");
var heu = document.getElementById("heur");



affiche.addEventListener("click",afficherQR);
choix.addEventListener("click",choisirCreneau);
change.addEventListener("click",changerCreaneau);


valide.addEventListener("click",setBdd);
reset.addEventListener("click",setReset);
//tij.addEventListener("click",trui);
var heure = document.querySelectorAll(".heure") ;
const res = document.getElementById("res");
const tri = document.getElementById("try");
const lemail = document.getElementById("email");
const lanchor = document.getElementById("anchor");



var today = new Date();
let minuit = today.getHours()

//fct reset 
/*if (minuit == '0') {
  setReset();
}
*/
//dispo creaneaux selon bdd
if ( minuit!=0 ){ 

for (var i =0 ; i <heure.length  ; i++) {
  


 if (heure[i].title === 'false') {
    heure[i].disabled = false;
  }
     else {
    heure[i].disabled = true;
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
        tri.textContent = "Vous avez déjà séletionné un créneau";  
        select.disabled = true;
        valide.disabled= true;
        choix.disabled=true; 
}
}


    
function afficherQR () {
if (lanchor.title!== '') {

    caca(lanchor.title)
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
    if (heu.title!== '')  {
         a  = heu.title;
         tri.textContent = a;
         //heu.title;
    }
    else  {
         a  = change.title;
          tri.textContent = "rigno";
    }
      valide.disabled= false;
      
      
      select.disabled = false;
      remplissage ( a,'1','1','objet' );    
      heure[+a+1].disabled = false;
      valide.disabled= false;
      lanchor.title = '';
      outi.disabled = true;
    }




//remplir bdd avec creaneaux



function setBdd() {
  const choice = select.value;

  if (choice === heure[0].value) {
    res.textContent = 'Vous ';

  } 
  for (let i =1 ; i <heure.length  ; i++) {

     if (choice === heure[i].value) {
    heure[i].disabled = true;
    let $a = i-1; 
    tri.textContent = 'Vous avez sélectionné le créneau suivant : '+$a+':00';
    tri.textContent = lemail.title;
    remplissage($a,'0','0','objet' );
    remplissage (lemail.title,heure[i].id,Random(),'reservation');
    remplissage (  lemail.title,'0','opt','user')
    remplissage (lemail.title ,'0',heure[i].id,'user' )
    
    fini()
    change.title = heure[i].id;
    heu.title =heure[i].id;
    
  }
  
  }
  
      $("#choix_heure").prop("selectedIndex", 0);

  

  
  }

  function remplissage (lid,ladd,lrst,lbdd){
    $(function() {
      $.get('include4.php', { id : lid , add : ladd, rst : lrst, bdd : lbdd }, function(data) {
        
      });

    });
  }

 
  function fini() {
      select.disabled = true;
      valide.disabled= true;
      
    }
//RST

  function setReset(){
    
      tri.textContent = 'uponep';
      for (let i =0 ; i <heure.length  ; i++) {

     remplissage (i,'1','objet')
      $("#choix_heure").prop("selectedIndex", 0);
      }

        
  } 
    var app;
  function Random(){
    var characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let result1= ' ';
    var charactersLength = characters.length;
    for ( let i = 0; i < 5; i++ ) {
        result1 += characters.charAt(Math.floor(Math.random() * charactersLength));
    }

    res.textContent = result1;
    lanchor.title =result1;
    caca(result1)  
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
 
function caca(a) {
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

