<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Pantalla de Acceso.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acceso de Administrador</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="./favicon1.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="./material.min.css">
    <!--<link rel="stylesheet" href="./styles.css">-->
    <script src="./material.min.js"></script>
    <script>
      function FunctionS() {
    document.getElementById("login-form").submit();
    }
    
    function FunctionR() {
    document.getElementById("login-form").reset();
    //document.getElementById('button-limpiar').disabled = true;
    //document.getElementById('nombre').value = "";
    //document.getElementById('contra').value = "";
    }

    function Clean(){
   var limpnom = document.getElementById('nombre').value;
   var limpcon = document.getElementById('contra').value;
  /* if (limpnom != "" || limpcon != ""){
  document.getElementById('button-limpiar').disabled = false;
  }else{
    document.getElementById('button-limpiar').disabled = true;
  }*/
  if (limpnom == "" && limpcon == ""){
  document.getElementById('button-limpiar').disabled = true;
  }else{
    document.getElementById('button-limpiar').disabled = false;
  }
    }
    </script>
    <style>
  
  /*.demo-layout-waterfall .mdl-layout__header-row .mdl-navigation__link:last-of-type  {
  padding-right: 0;
  }*/

  #test-button {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 30px;
      margin-bottom: 30px;
      z-index: 900;
    }

  #button-registrar {
      float:right;
      margin-right: 20px;
      margin-bottom: 5px;
    }

  #button-limpiar{
    margin-left: 20px;
    margin-top: 10px; 
    }
    
  #title-card {
    background-color: #3F51B5;
    color: #FFF;
    }

  #campos{
    width: 55%;
    margin-left: 25%;
    }

  .form-registrar{
  margin-top: 15px;
    }

  #nombre-icon, #contra-icon{
     position:absolute;
     left:-45px; 
     top:20px;
     /*margin-right: -5px;*/
     font-size: 30px; 

  }

  

    /*.mdl-card__title.mdl-card--border {
    	background-color: #3F51B5;
    }

    .mdl-card__title {
    	color: #FFF;
    }

    .mdl-textfield {
	margin-left: 10px;
  margin-right: 100px;
	width: 100%;
    }

    /*#title-card-color {
	background-color: #3F51B5;
    }

    .mdl-card__title.mdl-card--border {
    	background-color: #3F51B5;
    }


  /*body {
	background-color: #f5f5f5;
  }*/

  </style>
  </head>
  <body class="mdl-color--grey-100">
    <!-- Simple header with fixed tabs. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
       <!-- <div class="mdl-layout__header-row"></div> -->
        <div class="mdl-layout__header-row" style="padding: 0; margin: 0 auto 0 auto;">
          <!-- Title-->
          <span class="mdl-layout-title">Control de Acceso</span>
          <!-- <h3>Control de Acceso</h3> -->
          <!--<div class="mdl-layout-spacer"></div>
     <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                mdl-textfield--floating-label mdl-textfield--align-right">
      <label class="mdl-button mdl-js-button mdl-button--icon"
             for="waterfall-exp">
        <i class="material-icons">search</i>
      </label>
      <div class="mdl-textfield__expandable-holder">
        <input class="mdl-textfield__input" type="text" name="sample"
               id="waterfall-exp" />
      </div>
    </div> -->
  </div>
   <!-- <div class="mdl-layout__header-row"></div> -->
        <!--Tabs
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
          <a href="#fixed-tab-1" class="mdl-layout__tab is-active">Inscripcion</a>
          <a href="#fixed-tab-2" class="mdl-layout__tab">Consulta</a>
          <a href="#fixed-tab-3" class="mdl-layout__tab">Panel</a>
        </div>-->
      </header>
      <!-- <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Menu</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="">Opcion 1</a>
          <a class="mdl-navigation__link" href="">Opcion 2</a>
          <a class="mdl-navigation__link" href="">Opcion 3</a>
          <a class="mdl-navigation__link" href="">Opcion 4</a>
        </nav>
      </div> -->
      <main class="mdl-layout__content">
        <!--<button id="test-button" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
            <i class="material-icons">add</i>
        </button>-->
          <div class="page-content">
            <!--<div class="mdl-color--white mdl-shadow--4dp mdl-cell mdl-cell--12-col mdl-grid">
              <h1>TEST</h1>
          </div>-->
          <div class="mdl-grid">
             <div class="mdl-cell mdl-cell--12-col mdl-cell--hide-tablet"></div>
             <div class="mdl-cell mdl-cell--12-col mdl-cell--hide-phone"></div>
             <div class="mdl-cell mdl-cell--12-col mdl-cell--hide-phone"></div>
             <div class="mdl-cell mdl-cell--1-col-tablet mdl-cell--4-col-desktop mdl-cell--hide-phone"></div>
             <div class="mdl-cell mdl-cell--6-col-tablet mdl-cell--4-col-desktop mdl-cell--4-col-phone mdl-card mdl-shadow--4dp">
                

                <div class="mdl-card__title mdl-card--border mdl-color--indigo-500 mdl-color-text--white" id="title-card1">
                    <h2 class="mdl-card__title-text">Bienvenido</h2>
                </div>
                    






                    <div>

                    <!-- Textfield with Floating Label -->

                       <form id="login-form" action="principal.php" method="POST" class="form-registrar">
                               
                               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="campos">
                                 <input class="mdl-textfield__input" type="text" id="nombre" onkeypress="Clean()" value=""/>
                                <label class="mdl-textfield__label" for="sample2">Usuario</label>
                                <div id="nombre-icon" class="icon material-icons mdl-color-text--grey-500 " style="">account_circle</div>
                               </div>
                   
                               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="campos">
                                  <input class="mdl-textfield__input" type="password"  id="contra" onkeypress="Clean()" value=""/> <!--pattern="-?[0-9]*(\.[0-9]+)?"-->
                                  <label class="mdl-textfield__label" for="sample4">Contrase&ntilde;a</label>
                                  <div id="contra-icon" class="icon material-icons mdl-color-text--grey-500">lock</div>
                                </div>
<!--                       <span class="mdl-textfield__error">Debe ingresar un numero de cedula!</span>
 -->                   
                       </form>
                  </div>
              <!--<div class="mdl-card__supporting-text">
                This text might describe the photo and provide further information, such as where and
                when it was taken.
              </div>
            <div class="mdl-card__actions">
              <a href="(URL or function)">Related Action</a>
            </div>-->
            <div>
              <!-- <button id="button-registrar" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                Registrar
            </button> -->
            <!-- <button id="button-limpiar" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary" onclick="FunctionR()" disabled>Limpiar</button>
            <div class="mdl-tooltip" for="button-limpiar">
              Vaciar todos<br>los campos
            </div> -->
            <button title="Ingresar" id="button-registrar" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" onclick="FunctionS()">
              <i class="material-icons">send</i>
            </button>
            <!-- <div class="mdl-tooltip" for="button-registrar">
              Ingresar
            </div> -->
        </div>
<!--         <div class="mdl-cell mdl-cell--4-col-tablet mdl-cell--0-col-phone"></div>
 -->        <div class="mdl-cell mdl-cell--12-col mdl-cell--hide-phone"></div>
      </div>
    </div>
      </main>
    </div>
  </body>
</html>
