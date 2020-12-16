let formElemento = document.getElementById('loginForm');
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