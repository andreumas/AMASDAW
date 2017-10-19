//variables

var min=1;//numero minimo para poner en el prompt
var max=100;//numero maximo para poner en el prompt
  var maxmostrar=11;//Maximo de numeros mostrados por pantalla
  var multi =0;
    var numero=0;
    var numero = prompt("Introduzca el numero a multipicar");

console.log('Post Variables');
//que no vaya ni por debajo ni por arriba
if (numero<min) {
  alert('numero demasiado bajo');
  console.log('numbajo');
}else if (numero>max) {
  alert('El numero es demasiado alto');
  console.log('numalto');
}else {
//Imprimir multiplicacion
do {
  document.write(numero);
    console.log('Imprimir Resultado')

  document.write("X",multi,"=" );
    console.log('Imprimir multiplicacion');

    document.write(numero*multi + "<br>" );
      console.log('Resultado');
multi++;
}  while (multi<maxmostrar){}


}
