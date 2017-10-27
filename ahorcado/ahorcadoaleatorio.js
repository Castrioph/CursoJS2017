var aleatorio=Math.random()*(122-97)+97;
aleatorio=String.fromCharCode(aleatorio);
console.log(aleatorio);
for(var i=0; i<5;i++){
  var letra=prompt("Introduce una letra de la a a la z en minúsculas.","");
  if(letra<97 || letra>122){
    console.log("La letra no se encuentra dentro del rango permitido.");}
    else{
      if(letra==aleatorio){
        console.log("Enhorabuena, has acertado.");
        break;
      }else{
        console.log("Lo siento, no has acertado.");
      }
    }
  }
