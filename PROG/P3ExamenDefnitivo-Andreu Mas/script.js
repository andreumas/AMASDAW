
//lA MODIFICACION 01 SE BASA EN DAR UNA VARIABLE DEL NUMERO DE ERRORES(entre 5 y 10) CON UN PROMPT PARA PEDIR AL USUARIO
  //SI NUMERO DE ERRORES ES MAYOR (O IGUAL) QUE 5 EL USUARIO PIERDE.


//LA MODIFICACION 02 SE BASA EN DAR UNA VARIABLE CON LA PALABRA FIN Y CREAR UN IF DE SI ES IGUAL
  //SI ES AFIRMATIVO SALDRA UN ALERT DICIENDO QUE HAS FINALIZADO ,EN EL CASO CONTRARIO CONTINUARA


var palabras=['jamon','monja','coche','persona','acronimo'];
var palabrarandom=palabras[Math.round(Math.random()*4)];
var palabraUser= prompt('Pon aqui tu palabra');
var letra="";
var Numerrores=0;
var valornuevo=false;
var val2=false;
  var ErroresUser=prompt('Introduce el Nº de Errores que desea');//MODIFICACION 01
  var ErrorMin=5;//MODIFICACION 01
  var ErrorMax=10;//MODIFICACION 01
var final='FIN';//MODIFICACION 02
var comodin='COMODIN';




if(ErroresUser<ErrorMin){//MODIFICACION 02
  alert('upps,el numero de errores tiene que estar en un rango del 5 al 10')
}else if (ErroresUser>ErrorMax) {
  alert('upps,el numero de errores tiene que estar en un rango del 5 al 10')
}else{//DA UN PEQUEÑO ERROR AL PEDIR PRIMERO UNA LETRA ANTES DE APARECER UN  alert
        //AVISANDO QUE HA SOBREPASADO EL LIMITE


if(final==palabraUser){//MODIFICACION 02-PRIMER PROMPT
  alert('Has finalizado la partida')


    for(var i=0;i<palabrarandom.length;i++){
      palabras.push(0);

}


}else if (final!==palabraUser) {//MODIFICACION 02

  while(Numerrores<ErroresUser){//MODIFICACION 01
    letra=prompt("Introduzca una letra");
   while(!isNaN(letra)){
      letra=prompt("Ohhhhh!!!! Introduce la letra correcta");

    }
    for(var i=0; i<palabrarandom.length;i++){
      if(palabrarandom.charAt(i)==letra){
        palabras[i]=letra;
        valornuevo=true;
      }
    }
    for(var i=0; i<palabras.length;i++){
      if(palabrarandom.charAt(i)==palabras[i]){
        val2=true;
      }else{
        val2=false;
        break;
      }
    }
    if(val2){
      alert("!!!!!Has acertadooo,Campeon!!!! ");
      break;
    }
    if(valornuevo){
      alert("Letra correcta,continua ...");
    }else{
      alert("upsss!!! Esa palabra no es correcta amigo");
      Numerrores++;
    }
    alert("Tienes "+Numerrores+" fallos.");
    valornuevo=false;
    console.log(palabras);
    console.log(palabrarandom);
  }
  if(Numerrores==ErroresUser){ //MODIFICACION 01
    alert("has perdido,imbecil");
  }
}//CIERRE ELSE DE MAXIMO Y MINIMO
}
