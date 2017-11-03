var palabras=["coche", "pistola", "barco", "polimero", "ubicado"];
var palabraAl= palabras[Math.round(Math.random()*4)];
var letra = "";
var palabra=[];
var errores=0;
var prop=false;
var prop2=false;

for(var i=0;i<palabraAl.length;i++){
  palabra.push(0);
}

while(errores<5){
  letra=prompt("Introduce una letra por favor.");
  while(!isNaN(letra)){
    letra=prompt("Te has equivocado, introduce una letra del abecedario por favor.");
  }
  for(var i=0; i<palabraAl.length;i++){
    if(palabraAl.charAt(i)==letra){
      palabra[i]=letra;
      prop=true;
    }
  }
  for(var i=0; i<palabra.length;i++){
    if(palabraAl.charAt(i)==palabra[i]){
      prop2=true;
    }else{
      prop2=false;
      break;
    }
  }
  if(prop2){
    console.log("Enhorabuena, has acertado la palabra, eres el ganador.");
    break;
  }
  if(prop){
    console.log("Enhorabuena, la letra es correcta.");
  }else{
    console.log("Lo siento, la letra no es correcta");
    errores++;
  }
  console.log("Has cometido: "+errores+" fallos.");
  prop=false;
  console.log(palabra);
  console.log(palabraAl);
}
if(errores==5){
  console.log("Lo lamento, has matado al pobre muñequito.");
}
