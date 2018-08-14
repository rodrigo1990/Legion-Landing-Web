// JavaScript Document
 
// Función para recoger los datos de PHP según el navegador, se usa siempre.
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
 
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}
 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
 
//Función para recoger los datos del formulario y enviarlos por post  
function enviarFormulario(){
	var $captcha = $( '#recaptcha' ),
    response = grecaptcha.getResponse();
  
	if(response.length === 0) {
	    $( '.msg-error').text( "Debe validar el captcha" );
	    if( !$captcha.hasClass( "error" ) ){
	      $captcha.addClass( "error" );
	    }
	} 
	else 
	{
	    $( '.msg-error' ).text('');
	    $captcha.removeClass( "error" );
	
		divResultado = document.getElementById('resultado');

		nombre = document.form_contacto.nombre.value;
		telefono = document.form_contacto.telefono.value;
		email = document.form_contacto.email.value;
		mensaje = document.form_contacto.mensaje.value;
		autoadmin = $('#autoadmin:checked').val();;
		cantidadSecciones = document.form_contacto.cantidadSecciones.value;
		console.log(cantidadSecciones);
		console.log(autoadmin);

		var patron=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

		if((nombre == "") || (telefono == "") || (mensaje == ""))
		{
			$('.msg-error').html('Por favor, complete todos los campos.');
		}
		else
		{
			ajax=objetoAjax();

			ajax.open("POST", "contacto_envio.php",true);
			ajax.onreadystatechange=function() {
				if (ajax.readyState==4) {
					//$('#resultado').css('display','inline');
					//divResultado.innerHTML = ajax.responseText
					//LimpiarCampos();
					window.location.href = "http://legioncreativa.com.ar/web/gracias.php";
				}
			}
			ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			console.log(cantidadSecciones);
		console.log(autoadmin);
			ajax.send("nombre="+nombre+"&telefono="+telefono+"&email="+email+"&mensaje="+mensaje+"&autoadmin="+autoadmin+"&cantidadSecciones="+cantidadSecciones);
		}
	}
}
 
//función para limpiar los campos
function LimpiarCampos(){
  document.form_contacto.nombre.value="";
  document.form_contacto.telefono.value="";
  document.form_contacto.email.value="";
  document.form_contacto.mensaje.value="";
}