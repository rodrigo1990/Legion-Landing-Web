<?php
error_reporting(0);
header('Content-Type: text/html; charset=utf-8'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Legión Creativa</title>
    <meta name="Keywords" content="">
    <meta name="Description" content=""/>
    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="preload" as="style" onload="this.rel='stylesheet'">
    <link href="css/font-awesome/css/font-awesome.min.css" rel="preload" as="style" onload="this.rel='stylesheet'">
    <style amp-custom>
        #slider {
          position: relative;
          overflow: hidden;
          margin: 20px auto 0 auto;
          border-radius: 4px;
        }
        
        #slider ul {
          position: relative;
          margin: 0;
          padding: 0;
          height: 200px;
          list-style: none;
        }
        
        #slider ul li {
          position: relative;
          display: block;
          float: left;
          margin: 0;
          padding: 0;
          width: 500px;
          height: 300px;
          background: transparent;
          text-align: center;
          line-height: 300px;
        }
        
        a.control_prev, a.control_next {
          position: absolute;
          top: 40%;
          z-index: 999;
          display: block;
          padding: 4% 3%;
          width: auto;
          height: auto;
          background: #2a2a2a;
          color: #fff;
          text-decoration: none;
          font-weight: 600;
          font-size: 18px;
          opacity: 0.8;
          cursor: pointer;
        }
        
        a.control_prev:hover, a.control_next:hover {
          opacity: 1;
          -webkit-transition: all 0.2s ease;
        }
        
        a.control_prev {
          border-radius: 0 2px 2px 0;
        }
        
        a.control_next {
          right: 0;
          border-radius: 2px 0 0 2px;
        }
        
        .slider_option {
          position: relative;
          margin: 10px auto;
          width: 160px;
          font-size: 18px;
        }
        
        .img-slider{
         /* width: 100%;*/
            height: 110%;
            margin-left: 9%;
            
        }
        
        .slider-row{
        	padding-bottom:60px;
        }

        body
{
  font-family: 'Montserrat', sans-serif;
  font-size: 13px;
  color: #ffffff;
  overflow-x:hidden !important; 

  background: url('imagenes/fondo.jpg');
  background-size: cover;
  background-position: top;
}

a
{
  text-decoration: none;
  color: #ffffff !important;
}
a:hover
{
  text-decoration: none !important;;
  color: #ffc50f !important;
}

.img_full
{
  width: 100%;
  max-width: 100%;
}

header
{
  padding: 20px 0px 0px 0px;
}

#logo
{
  width: 100%;
  max-width: 270px;
}

.separador
{
  width: 65px;
  height: 15px;
  background: #ffc50f;
  float: right;
}

h1
{
  font-family: 'Ubuntu', sans-serif;
  font-size: 43px;
  font-weight: 700;
  margin: 15px 0px 0px 0px;
  padding: 0px;
}

#icono_llamanos
{
  width: 100%;
  max-width: 80px;
}

#llamanos
{
  color: #00aeef;
  font-size: 38px;
}

#telefono_llamanos
{
  font-size: 65px;
  color: #ffffff;
  margin-top: -15px;
}

#contenedor_llamanos
{
  width: 100%;
  max-width: 392px;
  margin: 75px auto 0px auto;
}

.item_dest
{
  text-align: center;
  margin: 20px 0px 20px 0px;
  font-weight: 600;
  font-size: 20px;
  line-height: 24px;
}

.icono_dest
{
  width: 100%;
  max-width: 100px;
  margin-bottom: 10px;
}

.linea_item_dest
{
  width: 100%;
  max-width: 55px;
  height: 2px;
  background: #ffffff;
  margin: 10px auto;
}

#bloque_amarillo
{
  background: #ffc50f;
  margin: 20px 0px;
}

#linea_cel1
{
  width: 50%;
  height: 7px;
  background: #00aeef;
  margin-bottom: 30px;
}
#linea_cel2
{
  width: 50%;
  height: 7px;
  background: #00aeef;
  float: right;
  margin-top: 30px;
}

h2
{
  color: #000000;
  margin: 0px 0px -5px 0px;
  padding: 0px;
  font-weight: 300;
  font-size: 26px;
}

h2 span
{
  font-weight: 600;
  font-size: 26px;
}

#escribinos
{
  font-size: 30px;
  font-weight: 300;
  color: #ffc50f;
  margin: 60px 0px 0px 0px;
}
#mail
{
  font-size: 44px;
}

.separador2
{
  width: 65px;
  height: 12px;
  background: #00aeef;
  margin: 25px 0px 0px 0px;
}

footer
{
  background: rgba(0,0,0,0.8);
  padding: 15px 0px;
  margin-top: 150px;
  font-size: 14px;
}

#logo_footer
{
  width: 100%;
  max-width: 110px;
}

#pico
{
  position: absolute;
}

#central_footer
{
  padding-top: 20px;
}
#central_footer a
{
  margin-right: 15px;
}
#central_footer #web
{
  color: #ffc50f !important;
  margin-right: 0px !important;
}
#central_footer i
{
  color: #ffc50f;
  font-size: 15px;
  margin-right: 4px;
}

#sociales_footer
{
  padding-top: 20px;
}
#sociales_footer i
{
  color: #ffc50f;
  font-size: 20px;
  margin-left: 10px;
}

.campo_contacto
{
  width: 70%;
  border: 0px;
  background: rgba(255,255,255,0.9);
  margin-bottom: 10px;
  padding: 5px 7px;
  color: #000000;
  font-weight: 500;
  margin-left: auto;
  margin-right: auto;
  display:block;
}

#formulario
{
  border: 1px solid #ececec;
  padding: 20px 30px;
  margin-bottom: 60px;
}

#dejanos_consulta
{
  color: #00aeef;
  font-weight: 300;
  font-size: 26px;
  letter-spacing: 2px;
}
#dejanos_consulta span
{
  font-weight: 600;
}

#contactanos
{
  font-size: 16px;
  color: #ffc50f;
  margin: -5px 0px 15px 0px;
}
#contactanos span
{
  color: #ffffff;
}

#btn_enviar_contacto
{
  border-radius: 0px;
  background: transparent;
  color: #ffc50f;
  border: 1px solid #ffffff;
  padding: 5px 12px;
  letter-spacing: 1px;
  font-weight: 600;
  font-size: 2.5rem;
}
#btn_enviar_contacto:hover
{
  background: #ffffff;
}

#gracias_comunicarte
{
  /*
  position: absolute;
  z-index: 9999 !important;
  background: rgba(0,0,0,0.8);
  width: 94%;
  min-height: 410px;
  margin: -25px 0px 0px -35px;
  */
}



input[type=number]
{ float:left;width:40%;margin-left: 15%;text-align:left;
}

@media (min-device-width: 320px) and (max-device-width: 440px){
    .img-slider{
      width: 71% !important;
      margin-left: 0;
    }
     #slider{
    width:354px !important;
      height: 360px !important;

     }

     #cant_sec{
      width: 70% !important;
     }

     .g-recaptcha{
          margin-left: auto !important;
    margin-right: auto !important;
    display: block !important;
     }

     #autoadmin{
          float: none !important;
    /* margin-left: -2%; */
    margin-right: auto !important;
    margin-left: auto !important;
    display: block !important;
    margin:0;
     }

     label{
      margin-left: auto !important;
     }

     .left{
      float:none !important;
     }

     input[type=number]
{ float:none;margin-left: auto;margin-right: auto;display:block;
}

}

@media (min-device-width: 481px) and (max-device-width: 1000px){
     .img-slider{
      width: 71% !important;
    }

    #slider {
        width: 123% !important;
    }

}


@media (min-device-width: 481px) and (max-device-width: 800px) and (orientation:landscape){
     

    #slider {
        width: 72% !important;
    }

}



input[type="checkbox"]:focus{
        outline: none;
box-shadow:none !important;
border:1px solid #ccc !important;
    }

.inline{
  display:inline-block;
}


.left{
  float:left;
}

.flex {
  display:flex;
  list-style: none;
}

ul li {
  list-style: none;
  margin-left: 2%;
}

@media screen and (min-width: 780px) and (max-width: 990px) {
  
}

@media screen and (min-width: 801px) {
  
}

@media screen and (max-width: 769px) {
  h1
  {
    text-align: center !important;
    font-size: 30px !important;
  }

  #mail
  {
    font-size: 20px !important;
  }

  .separador
  {
    display: none !important;
  }

  #llamanos
  {
    font-size: 35px !important;
  }

  #telefono_llamanos
  {
    font-size: 40px !important;
  }

  .text_center_mobile
  {
    text-align: center !important;
  }

  #central_footer a
  {
    display: block !important;
    width: 100% !important;
    margin-bottom: 5px;
  }

  #telefono_llamanos
  {
    margin-bottom: 20px !important;
  }
}

@media screen and (max-width: 420px) {
  
}
    </style>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800|Ubuntu:300,400,500,700" rel="preload" as="style" onload="this.rel='stylesheet'">
      <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "headline": "Open-source framework for publishing content",
        "datePublished": "2015-10-07T12:02:41Z",
        "image": [
          "logo.jpg"
        ]
      }
    </script>

    <!-- Código de instalación CLIENGO para http://www.legioncreativa.com.ar/landing/ --> 
    <script>(function(){var ldk=document.createElement('script'); ldk.type='text/javascript'; ldk.async=true; ldk.src='https://s.cliengo.com/weboptimizer/59cd54cee4b09220e41154c9/59cd54d4e4b09220e41154d6.js' ; var s=document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s);})();</script>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42302381-1', 'legioncreativa.com.ar');
    ga('send', 'pageview');
  </script>

  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <amp-img src="imagenes/logo.png" width="270" height="138" alt="" id="logo" /></amp-img>
          </div>
          <div class="col-sm-8 text-right">
            <div class="separador"></div><div class="clearfix"></div>
            <h1>Desarrollamos sitios web<br />100% personalizados.</h1>
          </div>
        </div>
      </div>
    </header>

    <div class="container">
      <div class="row slider-row">
        <div class="col-sm-6">
          <div id="slider">
          <a href="#" class="control_next">></a>
          <a href="#" class="control_prev"><</a>
         <ul>
            <li>
              <a href="http://www.legioncreativa.com/webs/web1/"target=_blank>
              <amp-img src=img/1.png width=380 height=300 class="img-slider img-responsive" alt="Templates predeterminados"></amp-img>
              </a>
            </li>
            <li>
              <a href="http://www.legioncreativa.com/webs/web2/"target=_blank>
              <amp-img src=img/2.png width=380 height=300 class="img-slider img-responsive" alt="Templates predeterminados"></amp-img>
              </a>
            </li>
            <li>
              <a href="http://www.legioncreativa.com/webs/web3/"target=_blank>
              <amp-img src=img/3.png width=380 height=330 class="img-slider img-responsive" alt="Templates predeterminados"></amp-img>
              </a>
            </li>
            <li>
              <a href="http://www.legioncreativa.com/webs/web4/"target=_blank>
              <amp-img src=img/4.png width=380 height=330 class="img-slider img-responsive" alt="Templates predeterminados"></amp-img>
              </a>
            </li>
            <li>
              <a href="http://www.legioncreativa.com/webs/web5/"target=_blank>
              <amp-img src=img/5.png width=380 height=330 class="img-slider img-responsive" alt="Templates predeterminados"></amp-img>
              </a>
            </li>
            <li>
              <a href="http://www.legioncreativa.com/webs/web6/"target=_blank>
              <amp-img src=img/6.png width=380 height=330 class="img-slider img-responsive" alt="Templates predeterminados"></amp-img>
              </a>
            </li>
            <li>
              <a href="http://www.legioncreativa.com/webs/web7/"target=_blank>
              <amp-img src=img/7.png width=380 height=330 class="img-slider img-responsive" alt="Templates predeterminados"></amp-img>
              </a>
            </li>
            <li>
              <a href="http://www.legioncreativa.com/webs/web8/"target=_blank>
              <amp-img src=img/8.png width=380 height=330 class="img-slider img-responsive" alt="Templates predeterminados"></amp-img>
              </a>
            </li>
            <li>
              <a href="http://www.legioncreativa.com/webs/web9/"target=_blank>
              <amp-img src=img/9.png width=411 height=330 class="img-slider img-responsive" alt="Templates predeterminados"></amp-img>
              </a>
            </li>
          </ul> 
        </div>
        </div>
        <div class="col-sm-6 text-center">
          <div id="contenedor_llamanos">
            <amp-img src="imagenes/icono_llamanos.png" id="icono_llamanos" width="80" height="80" /></amp-img><br />
            <div id="llamanos">¡Llamanos!</div>
            <div id="telefono_llamanos">11 5263 8247</div>
            <div class="separador"></div><div class="clearfix"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div id="formulario">
            <div id="dejanos_consulta">DEJANOS <span>TU CONSULTA</span></div>
            <div id="contactanos">Contactanos y empezaremos a pensar <span>tu sitio web</span></div>

            <form name="form_contacto" id="form_contacto" onsubmit="enviarFormulario(); return false">
              <input class="campo_contacto" type="text" name="nombre" placeholder="Nombre y Apellido" required />
              <input class="campo_contacto" type="text" name="telefono" placeholder="Teléfono" required />
              <input class="campo_contacto" type="email" name="email" placeholder="Mail" required />
              <textarea class="campo_contacto" name="mensaje" style="height:70px;" placeholder="Mensaje" required></textarea>
              <input type="number" id="cant_sec" name="cantidadSecciones" class="campo_contacto  form-control  text-center" style="margin-left: 15%;text-align:left;" placeholder="Cantidad de secciones">
              <label for="autoadmin" class="left" style="margin-left: 3%;">¿El sitio sera autoadministrable?</label> 
              <input type="checkbox" name="autoadmin" id="autoadmin"  value="1" style="margin-left: 3%;">

              
              <div class="row" style="margin-top: 1%;">
                <div class="col-sm-8 col-xs-12 text-center">

                  <div class="g-recaptcha" data-sitekey="6Lc3SjIUAAAAAB5Ytk1LBkwj-RXNQCTDEm7DjCqD" style="    margin-left: 22%;"></div>


              </div>
                <div class="col-sm-4 col-xs-12 text-center" style="padding:2%">
                  <button id="btn_enviar_contacto" class="btn btn-primary" type="submit" name="submit">Enviar</button></div>
              </div>

              <div class="clear"></div>
              <div class="msg-error"></div>
              <div id="resultado" style="color:#00aeef; font-size: 16px; margin-top: 10px;"></div>
            </form>

            </div>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-sm-3 item_dest"><amp-img src="imagenes/1.png" alt="" width="100" height="90" class="icono_dest"></amp-img><br />PÁGINAS<br />E-COMMERCE<div class="linea_item_dest"></div></div>
        <div class="col-sm-3 item_dest"><amp-img src="imagenes/2.png" alt="" width="100" height="90" class="icono_dest"></amp-img><br />RESPONSIVE<br />DESIGN<div class="linea_item_dest"></div></div>
        <div class="col-sm-3 item_dest"><amp-img src="imagenes/3.png" alt="" width="100" height="90" class="icono_dest"></amp-img><br />WEB AUTO<br />ADMINISTRABLE<div class="linea_item_dest"></div></div>
        <div class="col-sm-3 item_dest"><amp-img src="imagenes/4.png" alt="" width="100" height="90" class="icono_dest"></amp-img><br />LANDING<br />PAGE<div class="linea_item_dest"></div></div>
      </div>


      <br /><br /><br />
      <div class="row">
        <div class="col-sm-12 text-center"><h2 style="color:#ffc50f;">Diseños con <span>TEMPLATES PREDETERMINADOS</span></h2><div class="linea_item_dest" style="background: #ffc50f;"></div><br /></div>
      </div>
      <div class="row">
        <div class="col-sm-4">
        	<amp-img 
        	src="imagenes/t1.jpg"
    	 	srcset="imagenes/t1-xs.jpg 320w,
           			imagenes/t1-sm.jpg 236w" 
    	 	width="430"
    	  	height="430"
    	   	alt=""
    	    class="img_full"
	     	layout="responsive"
        	     ></amp-img><br /><br />
        </div>
        <div class="col-sm-4">
        	<amp-img src="imagenes/t2.jpg"
        	srcset="imagenes/t2-xs.jpg 320w,
           			imagenes/t2-sm.jpg 236w"
        	 width="430"
        	 height="430"
        	 alt="" 
        	 class="img_full"
        	 layout="responsive">
        	</amp-img><br /><br />
        </div>
        <div class="col-sm-4">
        	<amp-img src="imagenes/t3.jpg"
        	srcset="imagenes/t3-xs.jpg 320w,
           			imagenes/t3-sm.jpg 236w"
        	 width="430"
        	 height="430"
        	 alt=""
        	 class="img_full"
        	 layout="responsive">
        	</amp-img><br /><br />
        </div>
      </div>
    </div>

    <div id="bloque_amarillo">
      <div id="linea_cel1"></div><div class="clearfix"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center"><h2>Sumate al <span>MUNDO ONLINE</span></h2><div class="linea_item_dest" style="background: #000000;"></div><br /></div>
        </div>
        <div class="row">
          <div class="col-sm-6">
          	<amp-img src="imagenes/foto1.png" 
          	srcset="imagenes/foto1-xs.png 330w,
           			imagenes/foto1-sm.png 345w"
          	alt=""
          	width="555"
          	height="328" 
          	class="img_full"
          	layout="responsive">
          </amp-img>
          <br>
     	 </div>
          <div class="col-sm-6">
          	<img src="imagenes/foto2.png"
          	srcset="imagenes/foto2-xs.jpg 381w,
           			imagenes/foto2-sm.jpg 345w"
          	 alt=""
          	 class="img_full" />
		 </div>
        </div>
      </div>
      <div id="linea_cel2"></div><div class="clearfix"></div>
      <div class="container"><div id="pico"><img src="imagenes/pico.png" alt="" /></div></div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="escribinos">¡Escribinos!</div>
          <div id="mail"><a href="mailto:info@legioncreativa.com">info@legioncreativa.com</a></div>
          <div class="separador2"></div><div class="clearfix"></div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-2 text_center_mobile"><img src="imagenes/logo_footer.png" alt="" id="logo_footer" /></div>
          <div class="col-sm-9 text_center_mobile text-center">
            <div id="central_footer">
              <a><i class="fa fa-map-marker" aria-hidden="true"></i> Catamarca 1150 - San Isidro</a>
              <a href="mailto:info@legioncreativa.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@legioncreativa.com</a>
              <a href="http://www.legioncreativa.com.ar/" target="_blank" id="web">www.legioncreativa.com</a>
            </div>
          </div>
          <div class="col-sm-1 text_center_mobile text-right" id="sociales_footer">
            <a href="https://www.facebook.com/LegionCreativa" target="_blank"><i class="fa fa-facebook" aria-hidden="true" style="margin-left: 0px;"></i></a>
            <a href="https://www.instagram.com/legioncreativa/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </footer>

  <script src="contacto.js"></script>
  <script src="js/jquery-latest.min.js" type="text/javascript" ></script>
  <script async src="js/slider.js" ></script>
  <script async src="js/bootstrap.min.js" ></script>
  <script async src='https://www.google.com/recaptcha/api.js' ></script>
  </body>
</html>