
<div class="pd-top">
  <nav class="navbar navbar-expand-md fixed-top">
    <button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
    <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>">Tonymoly</a>
    <div class="main-navbar__icons">
      <div class="search-container">
        <form action="<?php bloginfo('url'); ?>" method="get">
          <input class="search expandright" id="searchright" type="search" name="s" placeholder="Search">
          <label class="button searchbutton" for="searchright"><span class="mglass">&#9906;</span></label>
        </form>
      </div>
      <a href="<?php echo bloginfo('url'); ?>/cart"> <img src="<?php echo get_template_directory_uri();?>/assets/img/bag-white.svg" alt=""></a>
    </div>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <div class="main-navbar__profile">
        <div class="main-navbar__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/profile.png" alt="">
        </div>
        <div class="main-navbar__info">
          <div class="main-navbar__name">
            <p>Hola Camila!</p>
          </div>
          <div class="main-navbar__complete">
            <span>Completa la información de perfil</span>
          </div>
        </div>
      </div>
      <ul class="navbar-nav mr-auto">
        <li class='nav-item'>
          <a class="btn_custom btn--medium btn--filledGray" href="<?php echo bloginfo('url'); ?>/iniciar-sesion">
            Iniciar Sesión    
          </a>
          <a class="btn_custom btn--medium btn--filledGray" href="<?php echo bloginfo('url'); ?>/registrarse">
            Registrarme   
          </a>
        </li>
        <li class='nav-item'>
          <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>/my-account'>My Account</a>
          <i class="fa fa-plus" aria-hidden="true"></i>
        </li>
        <li class='nav-item'>
          <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>/conviertete-en-distribuidor'>Quiero ser distribuidor</a>
          <i class="fa fa-plus" aria-hidden="true"></i>
        </li>
        <li class='nav-item'>
          <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>/refiere-y-gana'>Refiere y gana dinero</a>
          <i class="fa fa-plus" aria-hidden="true"></i>
        </li>
        <li class='nav-item'>
          <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>/wishlist'>Wishlist</a>
          <i class="fa fa-plus" aria-hidden="true"></i>
        </li>
        <li class='nav-item'>
          <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>'>Recoger cupones</a>
          <i class="fa fa-plus" aria-hidden="true"></i>
        </li>
        <li class='nav-item'>
          <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>/categories'>Categoria</a>
          <i class="fa fa-plus" aria-hidden="true"></i>
        </li>
        <li class='nav-item'>
          <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>/tonytv'>TONY.tv</a>
          <i class="fa fa-plus" aria-hidden="true"></i>
        </li>
        <li class='nav-item'>
          <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>/compartir-tonytv'>Compartir en TONY.tv</a>
          <i class="fa fa-plus" aria-hidden="true"></i>
        </li>
        <li class='nav-item'>
          <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>/concursos'>Concursos</a>
          <i class="fa fa-plus" aria-hidden="true"></i>
        </li>
        <li class='nav-item'>
          <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>/ofertas'>Ofertas y Promociones</a>
          <i class="fa fa-plus" aria-hidden="true"></i>
        </li>
        <li class='nav-item'>
          <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>/blog'>Blog</a>
          <i class="fa fa-plus" aria-hidden="true"></i>
        </li>
        <li class='nav-item'>
          <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>/producto-nuevo'>Nuevos Productos</a>
          <i class="fa fa-plus" aria-hidden="true"></i>
        </li>
        <li class='nav-item'>
          <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>'>Productos mas vendido</a>
          <i class="fa fa-plus" aria-hidden="true"></i>
        </li>


        <li class='nav-item'>
          <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>'>Home</a>
          <i class="fa fa-plus" aria-hidden="true"></i>
        </li>
        
        <li class='nav-item'>
          <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>/cart'>Cart</a>
          <i class="fa fa-plus" aria-hidden="true"></i>
        </li>
        <li class='nav-item'>
          <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>/checkout'>checkout</a>
          <i class="fa fa-plus" aria-hidden="true"></i>
        </li>

        
        <li class='nav-item'>
          <a href="" class="btn_custom btn--large btn--filled" data-toggle="modal" data-target="#Modallogout">Cerrar</a>
        </li>
        <li class='nav-item'>
          <a href="" class="btn_custom btn--large btn--filled" data-toggle="modal" data-target="#ModalThanks">Gracias</a>
        </li>
       

      </ul>

    </div>
  </nav>
  <div class="main-huincha">
    <p class="text-white">Registrate y obten un 15% en tu primera compra</p>
  </div>

  <style>

    .button {
      display: inline-block;
      margin: 4px 2px;
      font-size: 14px;
      padding-left: 32px;
      padding-right: 32px;
      height: 50px;
      line-height: 50px;
      text-align: center;
      color: white;
      text-decoration: none;
      cursor: pointer;
      -moz-user-select: none;
      -khtml-user-select: none;
      -webkit-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .button:hover {
      transition-duration: 0.4s;
      -moz-transition-duration: 0.4s;
      -webkit-transition-duration: 0.4s;
      -o-transition-duration: 0.4s;
      background-color: white;
      color: black;
    }

    .search-container {
      position: relative;
      display: inline-block;
      margin: 4px 2px;
      height: 50px;
      width: 50px;
      vertical-align: bottom;
    }

    .mglass {
      display: inline-block;
      pointer-events: none;
      -webkit-transform: rotate(-45deg);
      -moz-transform: rotate(-45deg);
      -o-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
    }

    .searchbutton {
      position: absolute;
      font-size: 30px;
      width: 85%;
      margin: 0;
      padding: 0;
    }

    .search:focus + .searchbutton {
      transition-duration: 0.4s;
      -moz-transition-duration: 0.4s;
      -webkit-transition-duration: 0.4s;
      -o-transition-duration: 0.4s;
      background-color: white;
      color: black;
    }

    .search {
      position: absolute;
      left: 49px; /* Button width-1px (Not 50px/100% because that will sometimes show a 1px line between the search box and button) */
      background-color: white;
      outline: none;
      border: none;
      padding: 0;
      width: 0;
      height: 100%;
      z-index: 10;
      transition-duration: 0.4s;
      -moz-transition-duration: 0.4s;
      -webkit-transition-duration: 0.4s;
      -o-transition-duration: 0.4s;
    }

    .search:focus {
      width: 10rem; /* Bar width+1px */
      padding: 0 16px 0 0;
    }

    .expandright {
      left: auto;
      right: 49px; /* Button width-1px */
    }

    .expandright:focus {
      padding: 0 0 0 16px;
    }
  </style>