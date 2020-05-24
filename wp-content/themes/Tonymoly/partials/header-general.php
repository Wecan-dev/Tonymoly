

<div class="pd-top">
  <nav class="navbar navbar-expand-md fixed-top">
    <button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
    <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>">Tonymoly</a>
    <div class="main-navbar__icons">
      <i class="fa fa-search" aria-hidden="true"></i>
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
          <a class="btn_custom btn--medium btn--filledGray" href="#">
            Iniciar Sesión    
          </a>
          <a class="btn_custom btn--medium btn--filledGray" href="#">
            Registrarme   
          </a>
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
          <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>/my-account'>My Account</a>
          <i class="fa fa-plus" aria-hidden="true"></i>
        </li>

      </ul>

    </div>
  </nav>
  <div class="main-huincha">
    <p class="text-white">Registrate y obten un 15% en tu primera compra</p>
  </div>
