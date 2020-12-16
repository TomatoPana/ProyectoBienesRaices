let formElemento = document.getElementById('loginForm');

if(formElemento != null){
  formElemento.addEventListener("submit", function(event){
    let email = document.getElementById("Cusuario");
    let password = document.getElementById("Contrasena");
    let message = document.getElementById("message");


    let http = new XMLHttpRequest();
    let url = "validar_datos.php";
    let params = `Cusuario=${email.value}&Contrasena=${password.value}`;

    http.open('POST', url, true);

    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function() {//Call a function when the state changes.
        if(http.readyState == 4 && http.status == 200) {
          let result = JSON.parse(http.responseText);
          console.log(result);
          if(result.status != 'ok'){
            message.style.display = "block";
            message.innerHTML = result.message;
          } else {
            message.style.display = "none";
            message.innerHTML = "";
            let hide = document.getElementById('hide');
            hide.innerHTML = "<form name='send' style='display:none;' method='POST' action='inicio_sesion.php'><input name='Cusuario' value='"+email.value+"'><input name='Contrasena' value='"+password.value+"'></form>";
            document.forms['send'].submit();
          }
        }
    }
    
    http.send(params);
    event.preventDefault();
  });
}

let formElementoRegistro = document.getElementById('registrarse');

if(formElementoRegistro != null) {
  formElementoRegistro.addEventListener("submit", function(event){

    let email = document.getElementById("Cusuario");
    let password = document.getElementById("Contrasena");
    let nombre = document.getElementById("Nusuario");
    let apellido = document.getElementById("Ausuario");
    let telefono = document.getElementById("Tusuario");


    let message = document.getElementById("message");
    let messageOk = document.getElementById("messageOk");



    let http = new XMLHttpRequest();
    let url = "insertar_datos_usuario.php";
    let params = `Cusuario=${email.value}&Contrasena=${password.value}&Nusuario=${nombre.value}&Ausuario=${apellido.value}&Tusuario=${telefono.value}`;

    http.open('POST', url, true);

    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function() {//Call a function when the state changes.
        if(http.readyState == 4 && http.status == 200) {
          let result = JSON.parse(http.responseText);
          console.log(result);
          if(result.status != 'ok'){
            message.style.display = "block";
            message.innerHTML = result.message;
            messageOk.style.display = "none";
            messageOk.innerHTML = "";
          } else {
            message.style.display = "none";
            message.innerHTML = "";
            messageOk.style.display = "block";
            messageOk.innerHTML = result.message;
          }
        }
    }

    http.send(params);
    event.preventDefault();
  });
}

let formElementoVenta = document.getElementById('datosVenta');
if(formElementoVenta != null) {
  formElementoVenta.addEventListener("submit", function(event){
    let Npropiedad = document.getElementById("Npropiedad");
    let Dpropiedad = document.getElementById("Dpropiedad");
    let Vpropiedad = document.getElementById("Vpropiedad");
    let NBpropiedad = document.getElementById("NBpropiedad");
    let NCpropiedad = document.getElementById("NCpropiedad");
    let NRpropiedad = document.getElementById("NRpropiedad");
    let Ipropiedad = document.getElementById("Ipropiedad");


    let message = document.getElementById("message");
    let messageOk = document.getElementById("messageOk");



    let http = new XMLHttpRequest();
    let url = "datosVenta.php";
    let params = new FormData();
    params.append("Npropiedad", Npropiedad.value);
    params.append("Dpropiedad", Dpropiedad.value);
    params.append("Vpropiedad", Vpropiedad.value);
    params.append("NBpropiedad", NBpropiedad.value);
    params.append("NCpropiedad", NCpropiedad.value);
    params.append("NRpropiedad", NRpropiedad.value);
    params.append("Ipropiedad", Ipropiedad.files[0]);

    http.open('POST', url, true);

    http.onreadystatechange = function() {//Call a function when the state changes.
        if(http.readyState == 4 && http.status == 200) {
          let result = JSON.parse(http.responseText);
          console.log(result);
          if(result.status != 'ok'){
            message.style.display = "block";
            message.innerHTML = result.message;
            messageOk.style.display = "none";
            messageOk.innerHTML = "";
          } else {
            message.style.display = "none";
            message.innerHTML = "";
            messageOk.style.display = "block";
            messageOk.innerHTML = result.message;
          }
        }
    }

    http.send(params);
    event.preventDefault();
  });
}

let datosVentaEditar = document.getElementById("datosVentaEditar");
if(datosVentaEditar != null) {
  datosVentaEditar.addEventListener("submit", function(event){
    let Npropiedad = document.getElementById("Npropiedad");
    let Dpropiedad = document.getElementById("Dpropiedad");
    let Vpropiedad = document.getElementById("Vpropiedad");
    let NBpropiedad = document.getElementById("NBpropiedad");
    let NCpropiedad = document.getElementById("NCpropiedad");
    let NRpropiedad = document.getElementById("NRpropiedad");
    let id = document.getElementById("id");


    let message = document.getElementById("message");
    let messageOk = document.getElementById("messageOk");



    let http = new XMLHttpRequest();
    let url = "datosVentaEditar.php";
    let params = new FormData();
    params.append("Npropiedad", Npropiedad.value);
    params.append("Dpropiedad", Dpropiedad.value);
    params.append("Vpropiedad", Vpropiedad.value);
    params.append("NBpropiedad", NBpropiedad.value);
    params.append("NCpropiedad", NCpropiedad.value);
    params.append("NRpropiedad", NRpropiedad.value);
    params.append("id", id.value);

    http.open('POST', url, true);

    http.onreadystatechange = function() {//Call a function when the state changes.
        if(http.readyState == 4 && http.status == 200) {
          let result = JSON.parse(http.responseText);
          console.log(result);
          if(result.status != 'ok'){
            message.style.display = "block";
            message.innerHTML = result.message;
            messageOk.style.display = "none";
            messageOk.innerHTML = "";
          } else {
            message.style.display = "none";
            message.innerHTML = "";
            messageOk.style.display = "block";
            messageOk.innerHTML = result.message;
          }
        }
    }

    http.send(params);
    event.preventDefault();
  });
}

let datosVentaEliminar = document.getElementById("datosVentaEliminar");
if(datosVentaEliminar != null) {
  datosVentaEliminar.addEventListener("submit", function(event){
    let id = document.getElementById("id");


    let message = document.getElementById("message");
    let messageOk = document.getElementById("messageOk");



    let http = new XMLHttpRequest();
    let url = "datosVentaEliminar.php";
    let params = new FormData();
    params.append("id", id.value);

    http.open('POST', url, true);

    http.onreadystatechange = function() {//Call a function when the state changes.
        if(http.readyState == 4 && http.status == 200) {
          let result = JSON.parse(http.responseText);
          console.log(result);
          if(result.status != 'ok'){
            message.style.display = "block";
            message.innerHTML = result.message;
            messageOk.style.display = "none";
            messageOk.innerHTML = "";
          } else {
            message.style.display = "none";
            message.innerHTML = "";
            messageOk.style.display = "block";
            messageOk.innerHTML = result.message;
          }
        }
    }

    http.send(params);
    event.preventDefault();
  });
}