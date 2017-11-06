var palabras=['jamon','monja','coche','persona','acronimo'];
var palabrarandom=palabras[Math.round(Math.random()*4)];
var palabraUser= prompt('Pon aqui tu palabra');
var letra="";
var Numerrores=0;
var valornuevo=false;
var val2=false;

for(var i=0;i<palabrarandom.length;i++){
  palabras.push(0);
}

while(Numerrores<5){
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
if(Numerrores==5){
  alert("has perdido,imbecil");
}
