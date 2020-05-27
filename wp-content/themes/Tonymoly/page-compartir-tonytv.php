<?php get_header(); ?>
<?php get_template_part('partials/header-general'); ?>
<section class="main-sharetony section-pb">
  <div class="container">
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