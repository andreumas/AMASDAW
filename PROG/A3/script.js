
//VARIABLES
 var num=45;

 var introd=prompt("Introduce un numero");//Le decimos al user que ponga un numero
  console.log('Introduccion texto');//hacemos comprobaciones

//condicionales
if (introd<num) { // Si el numero dicho es mas bajo que el var num
  alert('Te quedaste corto');//Poner este texto
  console.log('condicional if');//hacemos comprobaciones
}else if (introd>num) {// Si el numero dicho es mas alto que el var num
    alert('Te pasaste'); //Poner este texto
    console.log('condicional elseif');//hacemos comprobaciones
}else { //Si no se cumple ninguna de las anteriores condiciones
    alert('ACERTASTE'); //Poner este texto
    console.log('condicional else');//hacemos comprobaciones
}
