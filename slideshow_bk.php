<section class="topwa">
<div class="header-home">
  <!--Solo en home-->
  <?php
    if ( is_front_page() ) {
  ?>
  <div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
      <div id="carousel-example-generic" class="carousel slide wa-carousel" data-ride="carousel">
      <!-- Wrapper for slides -->
        <div class="carousel-inner wa-inner" role="listbox">
          <div class="item active">
            <div class="wa-slide">
              <div class="cont-imagen">
                <img src="<?php bloginfo("template_url"); ?>/images/slide-1.png" class="img-responsive">
              </div>
            </div>
          </div>

          <div class="item">
            <div class="wa-slide">
              <div class="cont-imagen">
                <img src="<?php bloginfo("template_url"); ?>/images/slide-2.png"  class="img-responsive">
              </div>
            </div>
          </div>

          <div class="item">
            <div class="wa-slide">
              <div class="cont-imagen">
                <img src="<?php bloginfo("template_url"); ?>/images/slide-3.png"  class="img-responsive">
              </div>
            </div>
          </div>

        </div>

      <!-- Controls -->
        <!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a> -->

      </div><!--//carousel-->
    </div>
</div><!--//end row-->
</div>
  <?php
    } else {
  ?>
  <!--Solo en la páginas que son diferentes del home-->
<div class="container">
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="top-titulos">
      <h1>Título de la página.</h1>
    </div>
  </div>
  </div>
</div>
  <?php
    }
  ?>
</div>
</section>