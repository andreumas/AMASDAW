//Andreu Mas\\

//Variables

//Conversion numero a letra
var min=Math.ceil(97);
var max=Math.floor(122);
var aleatorio= Math.random() * (max - min) + min;
//var convert= Math.round(aleatorio);
var convert2=String.fromCharCode(aleatorio);
//
var letra=prompt('Introduzca una letra');

document.write(convert2);



///////////

//var comprobar= letra;
//alert("La frase a analizar es: "+letra);
//alert("La letra de la variable texto que ocupa la posicion 2 es: "+letra.charAt(2));
//alert("Y su cÃ³digo UTF16 es: "+letra.charCodeAt(2));
//alert("La frase convertida a minusculas es: "+letra.toLowerCase());
//var textoMinuscula=letra.toLowerCase();
//alert("La frase convertida a minusculas y eliminados los espacios: "+textoMinuscula.trim());
