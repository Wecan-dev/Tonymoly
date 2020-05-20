<section class='main-quick-form'>
  <div class='main-quick-form__text'>
    <p>
      <span>Te llamamos para darte</span>
      <br>
      una asesoría completa
    </p>
  </div>
  <form  method="POST" action="https://nivel.activehosted.com/proc.php" id="_form_9_" class="_form _form_9 _inline-form  _dark" novalidate>
    <div class="main-quick-form__form _form-content ">


      <div>
        <input type="hidden" name="u" value="9" />
        <input type="hidden" name="f" value="9" />
        <input type="hidden" name="s" />
        <input type="hidden" name="c" value="0" />
        <input type="hidden" name="m" value="0" />
        <input type="hidden" name="act" value="sub" />
        <input type="hidden" name="v" value="2" />


        <!-- utm source -->
        <input type="hidden" name="field[10]" value="<?php echo $_GET['utm_source']; ?>"/>
        <!-- utm medium -->
        <input type="hidden" name="field[11]" value="<?php echo $_GET['utm_medium']; ?>"/>
        <!-- utm campaign -->
        <input type="hidden" name="field[12]" value="<?php echo $_GET['utm_campaign']; ?>"/>
        <!-- utm term -->
        <input type="hidden" name="field[13]" value="<?php echo $_GET['utm_term']; ?>"/>
        <!-- referrer url -->
        <input type="hidden" name="field[14]" value="<?php echo $_SERVER['HTTP_REFERER']; ?>"/>

        <div >
          <div class="_form_element _x86821064 _full_width " >
            <label class="_form-label">

            </label>
            <div class="_field-wrapper form-group">
              <input class='form-control' type="text" name="fullname" placeholder="Nombre y Apellido *" />
            </div>
          </div>
          <div class="_form_element _x48647240 _full_width " >
            <label class="_form-label">

            </label>
            <div class="_field-wrapper form-group">
              <input class='form-control' type="text" name="email" placeholder="Correo electrónico *" required/>
            </div>
          </div>
          <div class="_form_element _x80842056 _full_width " >
            <label class="_form-label">

            </label>
            <div class="_field-wrapper form-group">
              <input class='form-control' type="text" name="phone" placeholder="Telefono *" />
            </div>
          </div>
          <div class="_form_element _field1 _full_width " style="display: none;">
            <label class="_form-label">

            </label>
            <div class="_field-wrapper " >
              <input class='form-control' type="text" name="field[1]" value="" placeholder="" />
            </div>
          </div>
        </div>
        
      </div>
      <div>
        <div class="_form_element _field2 _full_width " >
          <label class="_form-label ">

          </label>
          <div class="_field-wrapper form-group">
            <textarea class='form-control' name="field[2]" placeholder=" Mensaje"  ></textarea>
          </div>
        </div>
        <input data-autofill="false" type="hidden" name="field[4][]" value="~|">
        <div class="_row _checkbox-radio form-group form-check mb-1" style="margin: 8px 0 0px !important; ">
          <input class="form-check-input" id="field_4Acepto" type="checkbox" name="field[4][]" value="Acepto"   >
          <span>
            <label for="field_4Acepto form-check-label" style="color: white;font-size:12px;">
              Acepto  <a style="color: white; border-bottom: 1px solid;font-size:12px;" href='<?php echo get_template_directory_uri();?>/assets/pdf/MANUAL_DE_POLITICAS_PROMOTORA.pdf' target='blank'>Políticas y Privacidad</a>
            </label>
          </span>
        </div>
        <input data-autofill="false" type="hidden" name="field[4][]" value="~|">


        <div class="_button-wrapper _full_width form-group">
          <button id="_form_9_submit" class="_submit btn btn-submit w-100 btn-form" type="submit">
            Enviar
          </button>
        </div>
      </div>
    </div>
    <div class="_clear-element">
    </div>
  </div>
</div>
</div>
</div>
<div class="_form-thank-you" style="display:none;">
</div>
<div class="_form-branding" style="display: none;">
  <div class="_marketing-by">
    Marketing por
  </div>
  <a href="http://www.activecampaign.com" class="_logo"></a>
</div>
</form>


<!-- 
  <form class='main-quick-form__form'>
    <div>
      <div class='form-group'>
        <input class='form-control' placeholder='Nombre completo*'>
      </div>
      <div class='form-group'>
        <input class='form-control' placeholder='Teléfono*'>
      </div>
      <div class='form-group mb-0'>
        <input class='form-control' placeholder='Email*' type='email'>
      </div>
    </div>
    <div>
      <div class='form-group mb-0'>
        <textarea class='form-control' placeholder='Comentarios'></textarea>
      </div>
      <div class='form-group form-check mb-1'>
        <input class='form-check-input' type='checkbox'>
        <label class='form-check-label'>
          Acepto
          <a href='assets/pdf/MANUAL_DE_POLITICAS_PROMOTORA.pdf' target='blank'>Politicas y Privacidad</a>
        </label>
      </div>
      <div class='form-group'>
        <input class='btn btn-submit w-100 btn-form' type='submit'>
      </div>
    </div>
  </form> -->
</section>