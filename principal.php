<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Pantalla Principal del Panel de Control.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de Control</title>

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
      margin-right: 15px;
      margin-bottom: 20px;
    }

    #title-card {
    background-color: #3F51B5;
    color: #FFF;
    }

    #campos{
    width: 90%;
    margin-left: 5%;
    }

    .form-registrar{
    margin-top: 15px;
    }

    .mdl-layout__drawer .mdl-navigation .mdl-navigation__link {
    color: #757575;
    flex-shrink: 0;
    padding: 16px 40px;
    margin: 0px;
    display: flex;
    flex-direction: row;
    align-items: center;
  }

  #drawer-icons{
    margin-right: 32px;
  }

  #drawer-links{
    color: rgba(255, 255, 255, 0.56);
  }

  .mdl-layout .mdl-navigation .mdl-navigation__link:hover {
  background-color: #00BCD4;
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
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title">Panel de Control</span>
          <div class="mdl-layout-spacer"></div>
     <!-- <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
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
        <!--Tabs
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
          <a href="#fixed-tab-1" class="mdl-layout__tab is-active">Inscripcion</a>
          <a href="#fixed-tab-2" class="mdl-layout__tab">Consulta</a>
          <a href="#fixed-tab-3" class="mdl-layout__tab">Panel</a>
        </div>-->
      </header>
      <div class="mdl-layout__drawer mdl-color--blue-grey-800" style="border-right-style: none; font-family: Roboto">
        <span class="mdl-layout-title mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">Menu</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" id="drawer-links" href="">
          <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" id="drawer-icons">work</i>
          Paquetes</a>
          <a class="mdl-navigation__link" id="drawer-links" href="">
          <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" id="drawer-icons">camera_alt</i>
          Galeria</a>
          <a class="mdl-navigation__link" id="drawer-links" href="">
          <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" id="drawer-icons">speaker_notes</i>
          Noticias</a>
          <a class="mdl-navigation__link" id="drawer-links" href="">
          <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" id="drawer-icons">view_module</i>
          Categoria</a>
          <a class="mdl-navigation__link" id="drawer-links" href="">
          <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" id="drawer-icons">domain</i>
          Empresas</a>
          <a class="mdl-navigation__link" id="drawer-links" href="">
          <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation" id="drawer-icons">exit_to_app</i>
          Salir</a>
        </nav>
      </div>
      <main class="mdl-layout__content">
        <!--<button id="test-button" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
            <i class="material-icons">add</i>
        </button>
        <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">-->
          <div class="page-content">
            <!--<div class="mdl-color--white mdl-shadow--4dp mdl-cell mdl-cell--12-col mdl-grid">
              <h1>TEST</h1>
          </div>-->
          <div class="mdl-grid">
             <div class="mdl-cell mdl-cell--12-col mdl-cell--hide-phone"></div>
             <div class="mdl-cell mdl-cell--1-col-tablet mdl-cell--4-col-desktop mdl-cell--hide-phone"></div>
             <div class="mdl-cell mdl-cell--6-col-tablet mdl-cell--4-col-desktop mdl-cell--4-col-phone mdl-card mdl-shadow--4dp">
                <div class="mdl-card__title mdl-card--border mdl-color--indigo-500 mdl-color-text--white" id="title-card1">
                    <h2 class="mdl-card__title-text">Inscripci&oacute;n</h2>
                  </div>
                    <div>

                    <!-- Textfield with Floating Label -->

                    <form action="#" class="form-registrar">
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="campos">
                        <input class="mdl-textfield__input" type="text" id="nombre" />
                        <label class="mdl-textfield__label" for="sample2">Nombre</label>
                     </div>
                     <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="campos">
                       <input class="mdl-textfield__input" type="text" id="apellido" />
                       <label class="mdl-textfield__label" for="sample3">Apellido</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="campos">
                      <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="cedula" />
                      <label class="mdl-textfield__label" for="sample4">Cedula</label>
                      <span class="mdl-textfield__error">Debe ingresar un numero de cedula!</span>
                    </div>
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
              <button id="button-registrar" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                Registrar
            </button>
          </div>
        </div>
<!--         <div class="mdl-cell mdl-cell--4-col-tablet mdl-cell--0-col-phone"></div>
 -->        <div class="mdl-cell mdl-cell--12-col mdl-cell--hide-phone"></div>
      </div>
    </div>
        <!-- </section>
        <section class="mdl-layout__tab-panel" id="fixed-tab-2">
          <div class="page-content">
            <button id="test-button" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                <i class="material-icons">add</i>
            </button>
          </div>
        </section>
        <section class="mdl-layout__tab-panel" id="fixed-tab-3">
          <div class="page-content">
            <div class="mdl-grid">
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
  <div class="mdl-cell mdl-cell--1-col">1</div>
</div>
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--4-col">4</div>
  <div class="mdl-cell mdl-cell--4-col">4</div>
  <div class="mdl-cell mdl-cell--4-col">4</div>
</div>
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--6-col">6</div>
  <div class="mdl-cell mdl-cell--4-col">4</div>
  <div class="mdl-cell mdl-cell--2-col">2</div>
</div>
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">6 (8 tablet)</div>
  <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">4 (6 tablet)</div>
  <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">2 (4 phone)</div>
</div>

          </div>
        </section> -->
      </main>
    </div>
  </body>
</html>