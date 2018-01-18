
var palabras=['jamon','monja','coche','persona','acronimo'];
var palabrarandom=palabras[Math.round(Math.random()*4)];
var palabraUser= console.log('Pon aqui tu palabra');
var letra="";
var Numerrores=0;
var valornuevo=false;
var val2=false;
//En formulario
document.write(palabrarandom);
function ahorcado(){

  //for(var i=0;i<palabrarandom.length;i++){
    //palabras.push(0);
  //}

  while(Numerrores<5){
    var cajaLetra=document.getElementById('texto');
    var letra=cajaLetra.value;
   while(letra=palabraUser){
      var letra=document.getElementById('texto');     //("Ohhhhh!!!! Introduce la letra correcta");
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
      document.write("!!!!!Has acertadooo,Campeon!!!! ");
      break;
    }
    if(valornuevo){
      document.write("Letra correcta,continua ...");
    }else{
      document.write("upsss!!! Esa palabra no es correcta amigo");
      Numerrores++;
    }
    document.write("Tienes "+Numerrores+" fallos.");
    valornuevo=false;
    console.log(palabras);
    console.log(palabrarandom);
  }
  if(Numerrores==5){
    document.write("has perdido,imbecil");
  }




}
