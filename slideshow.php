<section class="slide-container">
<div class="topwa">
  <div class="header-home">
    <!--Solo en home-->
    <?php
    if ( is_front_page() ) {
      ?>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <ul id="content-slider" class="content-slider">
              <li>
                <div class="cont-box">
                  <h2>Amplia experiencia en diseño y desarrollo de Páginas Web.</h2>
                  <p>Jeff Wakefield, vicepresidente de Promoción de Ventas, Verifone</p>
                  <a href="#" class="btn btn-link"><i class="fa fa-play-circle" aria-hidden="true"></i> Ver video.</a>
                </div>
              </li>
              <li>
                <div class="cont-box">
                  <h2>Te ayudamos a <span>emprender</span> brindándote soluciones ideales para <span>tu negocio.</span></h2>
                  <p>Jeff Wakefield, vicepresidente de Promoción de Ventas, Verifone</p>
                  <a href="#" class="btn btn-link"><i class="fa fa-play-circle" aria-hidden="true"></i> Ver video.</a>
                </div>
              </li>
              <li>
                <div class="cont-box">
                  <h2>“No sólo sobrevivió 500 años, sino que tambien <span>ingresó</span> como texto de relleno.”</h2>
                  <p>Jeff Wakefield, vicepresidente de Promoción de Ventas, Verifone</p>
                  <a href="#" class="btn btn-link"><i class="fa fa-play-circle" aria-hidden="true"></i> Ver video.</a>
                </div>
              </li>
            </ul>
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
</div>
</section>