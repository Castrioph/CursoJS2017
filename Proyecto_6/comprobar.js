function comprobar(){

  var nombre = document.getElementById('nombre').value;
  var apellidos = document.getElementById('apellidos').value;
  var edad = document.getElementById('edad').value;
  var curso = document.getElementById('curso').value;
  var correo = document.getElementById('correo').value;

  alert("Error, ningún campo puede estar vacio");

  if (nombre.length == 0) {
    alert("Error, ningún campo puede estar vacio");
    return false;
  }

  if (apellido.length == 0) {
    alert("Error, ningún campo puede estar vacio");
    return false;
  }

  if (edad.length == 0) {
    alert("Error, ningún campo puede estar vacio");
    return false;
  }

  if (curso.length == 0) {
    alert("Error, ningún campo puede estar vacio");
    return false;
  }

  if (correo.length == 0) {
    alert("Error, ningún campo puede estar vacio");
    return false;
  }

}
