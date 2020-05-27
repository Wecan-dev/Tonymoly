<?php

get_header(); ?>
<?php get_template_part('partials/header-general'); ?>
<div class="container generalPage">
	
	<div class="main-breadcrumb__general">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php bloginfo('url'); ?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
      </ol>
    </nav>
  </div>

</div>
<div class="main-fqa">
  <div class="container">
    <div class="main-fqa__title">
      <h2>FAQs</h2>
    </div>
    <div class="main-fqa__description">
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean fermentum, elit eget condimentum, eros ipsum rutrum orci, sagittis.</p>
    </div>
    <div class="main-fqa__content">
        <div class="main-fqa__accordion">
          <nav class="nav" role="navigation">
            <ul class="nav__list">
              <li>
                <input id="group-1" type="checkbox" hidden />
                <label for="group-1"><span class="fa fa-times-circle-o"></span> Productos</label>
                <ul class="group-list">
                  <li>
                    <input id="sub-group-1" type="checkbox" hidden />
                    <label for="sub-group-1"><span class="fa fa-times"></span> Donec eu libero sit amet quam</label>
                    <ul class="sub-group-list">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta dolores mollitia, itaque amet facere quas, officiis assumenda aspernatur quos saepe alias consectetur error porro debitis, quod adipisci laborum quaerat eaque?</p>
                      
                    </ul>
                  </li>
                  <li>
                    <input id="sub-group-1.1" type="checkbox" hidden />
                    <label for="sub-group-1.1"><span class="fa fa-times"></span> Lorem ipsum dollor sit amet</label>
                    <ul class="sub-group-list">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta dolores mollitia, itaque amet facere quas, officiis assumenda aspernatur quos saepe alias consectetur error porro debitis, quod adipisci laborum quaerat eaque?</p>
                      
                    </ul>
                  </li>
                </ul>
              </li>
              <li>
                <input id="group-2" type="checkbox" hidden />
                <label for="group-2"><span class="fa fa-times-circle-o"></span> Tipo de piel</label>
                <ul class="group-list">
                <li>
                    <input id="sub-group-2" type="checkbox" hidden />
                    <label for="sub-group-2"><span class="fa fa-times"></span> Donec eu libero sit amet quam</label>
                    <ul class="sub-group-list">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta dolores mollitia, itaque amet facere quas, officiis assumenda aspernatur quos saepe alias consectetur error porro debitis, quod adipisci laborum quaerat eaque?</p>
                      
                    </ul>
                  </li>
                </ul>
              </li>
              <li>
                <input id="group-3" type="checkbox" hidden />
                <label for="group-3"><span class="fa fa-times-circle-o"></span> Pagos</label>
                <ul class="group-list">
                  <li>
                    <input id="sub-group-3" type="checkbox" hidden />
                    <label for="sub-group-3"><span class="fa fa-times"></span> Donec eu libero sit amet quam</label>
                    <ul class="sub-group-list">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta dolores mollitia, itaque amet facere quas, officiis assumenda aspernatur quos saepe alias consectetur error porro debitis, quod adipisci laborum quaerat eaque?</p>
                      
                    </ul>
                  </li>
                </ul>
              </li>
              <li>
                <input id="group-4" type="checkbox" hidden />
                <label for="group-4"><span class="fa fa-times-circle-o"></span> Envios</label>
                <ul class="group-list">
                  <li>
                    <input id="sub-group-4" type="checkbox" hidden />
                    <label for="sub-group-4"><span class="fa fa-times"></span> Donec eu libero sit amet quam</label>
                    <ul class="sub-group-list">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta dolores mollitia, itaque amet facere quas, officiis assumenda aspernatur quos saepe alias consectetur error porro debitis, quod adipisci laborum quaerat eaque?</p>
                      
                    </ul>
                  </li>
                  <li>
                    <input id="sub-group-4.1" type="checkbox" hidden />
                    <label for="sub-group-4.1"><span class="fa fa-times"></span> Donec eu libero sit amet quam</label>
                    <ul class="sub-group-list">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta dolores mollitia, itaque amet facere quas, officiis assumenda aspernatur quos saepe alias consectetur error porro debitis, quod adipisci laborum quaerat eaque?</p>
                      
                    </ul>
                  </li>
                </ul>
              </li>
              <li>
                <input id="group-5" type="checkbox" hidden />
                <label for="group-5"><span class="fa fa-times-circle-o"></span>Cambios & Devoluciones</label>
                <ul class="group-list">
                  <li>
                    <input id="sub-group-5" type="checkbox" hidden />
                    <label for="sub-group-5"><span class="fa fa-times"></span> Donec eu libero sit amet quam</label>
                    <ul class="sub-group-list">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta dolores mollitia, itaque amet facere quas, officiis assumenda aspernatur quos saepe alias consectetur error porro debitis, quod adipisci laborum quaerat eaque?</p>
                      
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        
        </div>
    </div>
  </div>    
</div>
<?php get_footer(); ?>
