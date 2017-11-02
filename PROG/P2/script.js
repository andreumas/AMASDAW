//Andreu Mas\\

//Variables
var letra= prompt("Introduce Una letra");
console.log('Prompt');
var min=Math.ceil(97);
var max=Math.floor(122);
var aleatorio= Math.random() * (max - min) + min;
var convert= Math.round(aleatorio);
var convert2=String.fromCharCode(aleatorio);

if(letra==convert){
  alert('CORRECTO');
}else if(letra !=convert){
alert('Intentalo de nuevo');

}else{
  alert('FATAL ERROR');
}

document.write(aleatorio);
