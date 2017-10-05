//Variables
var letra= 'O';
var letramin='o';
var intro=prompt("Introduzca una letra,!!!"); //pedir info
console.log('variables');
//Condicionales

if (intro==letra) {
  alert('Has acertado!Enhorabuena!');
  console.log('if');
}else if (intro==letramin) {
  alert('Has acertado!Enhorabuena!');
  console.log('elseifmin');
}
//Minuscula
else if (intro!=letramin) {
  alert('Ohhh!!!Vuelve a probar suerte');
  console.log('elseif diferente min');
}
else if (intro !=letra) {
  alert('Ohhh!!!Vuelve a probar suerte');
  console.log('elseif diferente');
}
else{
  alert('Error');
  console.log('else');
}
