<?php get_header(); ?>
<?php get_template_part('partials/header-general'); ?>
<section class="main-sharetony section-pb">
  <div class="container">
    <div class="main-wishlist__content">
      <div class="main-wishlist__item">
        <div class="main-wishlist__img">
          <img src="https://images.unsplash.com/photo-1562887245-138c2f45013e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="">
        </div>
        <div class="main-wishlist__box">
      
          <div class="main-wishlist__title">
            <p class="font-general"><strong>TOMATOX</strong></p>
          </div>
          <div class="main-wishlist__description">
            <p class="font-general">Crema aclarante anti manchas </p>
          </div>
          <div class="main-wishlist__pricecolor">
            <p class="font-general"><strong>$50.99</strong> <span>12.690 </span></p>
            <p class="font-general">Color rosado</p>
          </div>
        </div>
      </div>
    </div>
    <div class="main-sharetony__content">
      <form action="">
        <div class="form-group">
          <label for="">Nombre y apellido</label>
          <input class="form-control" id="formGroupExampleInput" placeholder="" type="text">
        </div>
        <div class="form-group">
          <label for="">Titulo</label>
          <input class="form-control" id="formGroupExampleInput" placeholder="" type="text">
        </div>
        <div class="form-group">
          <label for="">Escribe tu review</label>
          <input class="form-control" id="formGroupExampleInput" placeholder="" type="text">
        </div>
        <div class="form-group form-group--file">
          <p class="font-general text-center">Comparte un video o foto para TONY. <span>tv</span>, usando nuestros productos y participa en las premiaciones! </p>
          <div class="button-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/upload.png" alt="">
            <span class="label">
              Elegir archivos
            </span>
            
              <input type="file" name="upload" id="upload" class="upload-box" placeholder="Upload File">
            
          </div>
        </div>
        <div class="main-sharetony__btn">
          <a class="btn_custom btn--medium btn--filled" href="#">
            COMPARTIR       
          </a>
        </div>
      </form>
    </div>
  </div>
</section>

<?php get_footer(); ?>