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
          <ul class="cd-accordion cd-accordion--animated margin-top-lg margin-bottom-lg">
            <li class="cd-accordion__item cd-accordion__item--has-children">
              <input class="cd-accordion__input" type="checkbox" name ="group-1" id="group-1">
              <label class="cd-accordion__label cd-accordion__label--icon-folder" for="group-1"><span>Group 1</span></label>

              <ul class="cd-accordion__sub cd-accordion__sub--l1">
                <li class="cd-accordion__item cd-accordion__item--has-children">
                  <input class="cd-accordion__input" type="checkbox" name ="sub-group-1" id="sub-group-1">
                  <label class="cd-accordion__label cd-accordion__label--icon-folder" for="sub-group-1"><span>Sub Group 1</span></label>

                  <ul class="cd-accordion__sub cd-accordion__sub--l2">
                    <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
                    <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
                    <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
                  </ul>
                </li>
                
                <li class="cd-accordion__item cd-accordion__item--has-children">
                  <input class="cd-accordion__input" type="checkbox" name ="sub-group-2" id="sub-group-2">
                  <label class="cd-accordion__label cd-accordion__label--icon-folder" for="sub-group-2"><span>Sub Group 2</span></label>

                  <ul class="cd-accordion__sub cd-accordion__sub--l2">
                    <li class="cd-accordion__item cd-accordion__item--has-children">
                      <input class="cd-accordion__input" type="checkbox" name ="sub-group-level-3" id="sub-group-level-3">
                      <label class="cd-accordion__label cd-accordion__label--icon-folder" for="sub-group-level-3"><span>Sub Group Level 3</span></label>

                      <ul class="cd-accordion__sub cd-accordion__sub--l3">
                        <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
                        <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
                      </ul>
                    </li>
                    <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
                  </ul>
                </li>
                <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
                <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
              </ul>
            </li>

            <li class="cd-accordion__item cd-accordion__item--has-children">
              <input class="cd-accordion__input" type="checkbox" name ="group-2" id="group-2">
              <label class="cd-accordion__label cd-accordion__label--icon-folder" for="group-2"><span>Group 2</span></label>

              <ul class="cd-accordion__sub cd-accordion__sub--l1">
                <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
                <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
              </ul>
            </li>

            <li class="cd-accordion__item cd-accordion__item--has-children">
              <input class="cd-accordion__input" type="checkbox" name ="group-3" id="group-3">
              <label class="cd-accordion__label cd-accordion__label--icon-folder" for="group-3"><span>Group 3</span></label>

              <ul class="cd-accordion__sub cd-accordion__sub--l1">
                <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
                <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
              </ul>
            </li>

            <li class="cd-accordion__item cd-accordion__item--has-children">
              <input class="cd-accordion__input" type="checkbox" name ="group-4" id="group-4">
              <label class="cd-accordion__label cd-accordion__label--icon-folder" for="group-4"><span>Group 4</span></label>

              <ul class="cd-accordion__sub cd-accordion__sub--l1">
                <li class="cd-accordion__item cd-accordion__item--has-children">
                  <input class="cd-accordion__input" type="checkbox" name ="sub-group-3" id="sub-group-3">
                  <label class="cd-accordion__label cd-accordion__label--icon-folder" for="sub-group-3"><span>Sub Group 3</span></label>

                  <ul class="cd-accordion__sub cd-accordion__sub--l2">
                    <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
                    <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
                  </ul>
                </li>
                <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
                <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
              </ul>
            </li>
          </ul>
        </div>
    </div>
  </div>    
</div>
<?php get_footer(); ?>
