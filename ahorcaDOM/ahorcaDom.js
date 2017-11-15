//Variables declaradas al iniciar el js
var textoError=document.getElementById("textoError");
var textoLetra=document.getElementById("textoLetra");
var textoIntentos=document.getElementById("textoIntentos");
var textoPalabra=document.getElementById("textoPalabra");
var imagen=document.getElementById("imagen");
var textoUsadas=document.getElementById("textoUsadas");
//Variables declaradas del código importado ahorcadoArray.js
var palabras=["coche", "pistola", "barco", "polimero", "ubicado"];
var palabraAl= palabras[Math.round(Math.random()*4)];
var letra = "";
var palabra=[];
var palabrados=[];
var errores=0;
var letraAcertada=false;
var palabraAcertada=false;
var letrasUsadas=[];
var propUsadas=false;
for(var i=0;i<palabraAl.length;i++){
  palabra.push(" _ ");
}

function reset(){
  palabras=["coche", "pistola", "barco", "polimero", "ubicado"];
  palabraAl= palabras[Math.round(Math.random()*4)];
  letra = "";
  palabra=[];
  palabra2=[];
  errores=0;
  letraAcertada=false;
  palabraAcertada=false;
  for(var i=0;i<palabraAl.length;i++){
  palabra.push("_");
  imagen.src="";
  letrasUsadas=[];
  }
}

function imagenesDoom(){
  if(errores==0||errores<5){
    imagen.src="";
  }
  if(errores==1){
    imagen.src="doomcabeza.jpg";
  }else if(errores==2){
    imagen.src="doomizq.jpg";
  }else if(errores==3){
    imagen.src="doomder.jpg";
  }else if(errores==4){
    imagen.src="doomentero.jpg";
  }else if(errores==5){
    imagen.src="gameover2.jpg";
  }
}

function ahorcado(){
    letra=textoLetra.value.toLowerCase();
    if(!isNaN(letra)){
      textoError.textContent="Te has equivocado, introduce una letra del abecedario por favor.";
    }else{
      for(var i=0; i<letrasUsadas.length;i++){
        if(letrasUsadas[i]==letra){
          propUsadas=true;
        }
      }
      if(propUsadas==false){
        letrasUsadas.push(letra);
      }else{
        propUsadas=false;
      }
    for(var i=0; i<palabraAl.length;i++){
      if(palabraAl.charAt(i)==letra){
        palabra[i]=letra;
        letraAcertada=true;
      }
    }
    for(var i=0; i<palabra.length;i++){
      if(palabraAl.charAt(i)==palabra[i]){
        palabraAcertada=true;
      }else{
        palabraAcertada=false;
        break;
      }
    }
    if(palabraAcertada){
      textoPalabra.textContent= palabra;
      textoError.textContent= "Enhorabuena, has acertado la palabra, eres el ganador. ¡Vuelve a empezar!";
      reset();
      imagen.src="win.png";
    }else{
      if(letraAcertada){
        textoError.textContent="Enhorabuena, la letra es correcta.";
        imagenesDoom();
      }else{
        textoError.textContent="Lo siento, la letra no es correcta";
        textoUsadas.textContent="Estas son las letras usadas hasta ahora: " +letrasUsadas;
        errores++;
        imagenesDoom();
      }
      textoIntentos.textContent="Has cometido: "+errores+" fallos.";
      letraAcertada=false;
      textoPalabra.textContent= palabra;
      textoUsadas.textContent="Estas son las letras usadas hasta ahora: " + letrasUsadas;
    }
    if(errores>=5){
      textoError.textContent="Lo lamento, has matado al pobre muñequito. ¡Vuelve a empezar!";
      console.log(palabraAl.length);
      for(var i=0;i<=palabraAl.length-1;i++){
        palabrados[i]=palabraAl.charAt(i);
      }
      let res=prompt("¿Quieres volver a intentarlo? (Introduce y/n).");
      if(res=="y"){
        textoPalabra.textContent=palabrados;
        reset();
      }else{
        textoPalabra.textContent=palabrados;
        imagenesDoom();
      }
    }
  }
  textoLetra.value="";
}
