var num = parseInt(prompt("Introduce un valor del 1 al 100",""));
var cont = 1;

while(num>100 || num<1){
  alert("El número introducido no entra ")
  num = parseInt(prompt("Introduce un valor del 1 al 100",""));
}
while(cont<=10){
  console.log(num+"X"+cont+ "="+ (num*cont));
  cont++;
}
