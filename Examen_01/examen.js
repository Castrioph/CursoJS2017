var palabras=["coche", "pistola", "barco", "polimero", "ubicado"];
var palabraAl= palabras[Math.round(Math.random()*4)];
var letra = "";
var palabra=[];
var errores=0;
var prop=false;
var prop2=false;
var intentos=prompt("¿Cuántos intentos deseas hacer en esta partida? (De 5 a 10)");
var comodines=1;
var letrasAcertadas=[];

for(var i=0;i<palabraAl.length;i++){
  palabra.push(0);
}

while(isNaN(intentos) || intentos<5 || intentos>10){
  intentos=prompt("¿Cuántos intentos deseas hacer en esta partida?(De 5 a 10)");
}

while(errores<intentos){
  letra=prompt("Introduce una letra por favor.");
  while(!isNaN(letra)){
    letra=prompt("Te has equivocado, introduce una letra del abecedario por favor.");
  }
  if(letra!="FIN" && letra!="COMODIN"){
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
  }else if(letra=="COMODIN" && comodines>0){
    for(var i=0; i<palabra.length;i++){
      if(palabra[i]==0){
        letrasAcertadas.push(i);
      }
    }
    let random=parseInt(Math.random()*letrasAcertadas.length)
    palabra[letrasAcertadas[random]]=palabraAl[letrasAcertadas[random]];
    prop=true;
    comodines--;
  }else if(letra=="FIN"){
    prop2=true;
  }else if(letra=="COMODIN" && comodines<=0){
    console.log("No te quedan comodines. Vuelve a intentar otra letra");
    errores--;
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
if(errores==intentos){
  console.log("Lo lamento, has matado al pobre muñequito.");
}
