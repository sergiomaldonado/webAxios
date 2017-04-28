<?php get_header(); ?>
  <section id="head-blog">
    <div style="padding-top:50px;" class="container text-center">
      <div style="margin-top:0px; " class="header-content">
        <h1 style="text-shadow:0px 2px 10px black; color:white;">Suscríbete y consigue acceso al mejor contenido para emprendedores y empresarios de exito.</h1>
        <hr>
        <form class="form-inline">
          <div class="form-group">
            <input type="text" class="form-control btn-lg" placeholder="Nombre" style="height:55px;"aria-describedby="sizing-addon1">
          </div>
          <div class="form-group">
            <input type="text" class="form-control btn-lg" style="height:55px;" placeholder="Correo Electronico" aria-describedby="sizing-addon1">
          </div>
        <button style="background-color:#FC5810; height:55px;" type="submit" class="btn btn-default btn-lg">¡Quiero formar parte!</button>
        </form>
      </div>
    </div>
  </section>
  <section class="categorias text-center " id="categorias" >
    <div style="text-aling:;" class="container text-center">
      <ul class="nav nav-pills text-center">
        <li><a style="color:white;" >Nuestros Temas | </a></li>
        <li role="presentation" ><a href="#">Negocios</a></li>
        <li role="presentation"><a href="#">Emprendimiento</a></li>
        <li role="presentation"><a href="#">Marketing</a></li>
        <li role="presentation"><a href="#">Diseño</a></li>
        <li role="presentation"><a href="#">Servicio al cliente</a></li>
        <li role="presentation"><a href="#">Productividad</a></li>
        <li role="presentation"><a href="#">Recursos</a></li>
        <li>
          <form id="demo-2">
            <input class="input-search" type="search" placeholder="Search"></input>
          </form>
        </li>
      </ul>
    </div>
  </section>
  <section id="title-masleido" >
    <div class="container text-center">
      <div style="color: #010454" class="col-md-12"><h3>LO MÁS LEÍDO</h3></div>
    </div>
  </section>
  <section class="" id="portfolio">
    <div class="container-fluid">
      <div class="row no-gutter">
        <div class="col-lg-6 col-sm-4">
          <a href="http://facebook.com" class="portfolio-box portfolio-box-1">
            <img width="100%" src="<?php bloginfo('template_url') ?>/blog/img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">
                <div class="project-category text-center"></div>
                <div class="project-name">
                  <h3>Como hacer un plan de negocios</h3>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-4">
          <a href="<?php bloginfo('template_url') ?>/blog/img/portfolio/fullsize/2.jpg" class="portfolio-box">
            <img src="<?php bloginfo('template_url') ?>/blog/img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">
                <div class="project-name">
                  <h3>Como hacer un plan de negocios</h3>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-4">
          <a href="<?php bloginfo('template_url') ?>/blog/img/portfolio/fullsize/3.jpg" class="portfolio-box">
            <img src="<?php bloginfo('template_url') ?>/blog/img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">
                <div class="project-name">
                  <h3>Como hacer un plan de negocios</h3>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-4">
          <a href="<?php bloginfo('template_url') ?>/blog/img/portfolio/fullsize/4.jpg" class="portfolio-box">
            <img src="<?php bloginfo('template_url') ?>/blog/img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">
                <div class="project-name">
                  <h3>Como hacer un plan de negocios</h3>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-4">
          <div style="width:100%; height:100%; background-color:black;"></div>
          <a href="<?php bloginfo('template_url') ?>/blog/img/portfolio/fullsize/5.jpg" class="portfolio-box">
            <img src="<?php bloginfo('template_url') ?>/blog/img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">
                <div class="project-name">
                  <h3>Como hacer un plan de negocios</h3>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="" style="padding-bottom:5px;">
    <div  style="margin-top:-100px; padding-top:10px;" class="container text-center">
      <div style="color: #010454" class="col-md-12"><h1>Top de descargas</h1></div>

      <div class="container">
        <div class="row">
          <?php
           //filtro del loop
           $args = array('cat'=> -5);
           $category_posts = new WP_QUERY($args);

           if ($category_posts->have_posts()) : $i = 1; while ($category_posts->have_posts() && $i < 4) : $category_posts->the_post(); ?>

                       <div class="col-lg-4 col-md-3">

                            <div class="service-box">
                              <a style="max-width:30px;" href="<?php the_permalink(); ?>"> <img  width="100%" height="auto" src="<?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?></a>
                                <h3 class="text-left"><?php the_title(); ?></h3>
                            </div>

                          </div>
                      <?php endwhile; ?>
                      <!-- post navigation -->
                      <?php else: ?>
                      <!-- no posts found -->

                      <?php endif; ?>

                    </div>  </div>

  </section>




  <?php get_footer(); ?>
