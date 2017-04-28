<?php get_header(); ?>
  <section id="head-blog" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
    <div style="padding-top:50px;" class="container text-center">
      <div style="margin-top:0px; " class="header-content">
        <h1 style="text-shadow:0px 2px 10px black; color:white;"><?php the_title(); ?></h1>
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
  </section>
  <section>
    <div class="container">
      <div class="row">
        <?php 
          //loop de wordpress
          if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article class="col-sm-12 col-md-12" >
            <div class="thumbnail"  style="border:none;">
              <div><?php the_date(); ?> en <span><?php the_category(); ?></span></div>
              <div class="caption text-align-post"">
                <?php the_content(); ?>
              </div>
            </div>
          </article>
        <?php endwhile; ?>
        <!-- post navigation -->
        <?php else: ?>
        <!-- no posts found -->

        <?php endif; ?>
      </div>
    </div>
  </section>
  <section class="" style="padding-bottom:5px;">
    <div  style="margin-top:-100px; padding-top:10px;" class="container text-center">
      <div style="color: #010454" class="col-md-12"><h1>Descargas</h1></div>
    </div>
  <section>
    <div class="container">
      <div class="row">
        <?php 
          //filtro del loop
          $args = array('cat'=> 5);
          $category_posts = new WP_QUERY($args);

          if ($category_posts->have_posts()) : while ($category_posts->have_posts()) : $category_posts->the_post(); ?>
            <div class="col-sm-4 col-md-4" >
              <div class="thumbnail"  style="border:none;">
                <?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
                <div class="caption">
                  <h3><?php the_title(); ?></h3>
                </div>
              </div>
            </div>
        <?php endwhile; ?>
        <!-- post navigation -->
        <?php else: ?>
        <!-- no posts found -->
          <div class="col-sm-6 col-md-6" >
            <div class="thumbnail"  style="border:none;">
              <div class="caption">
                <h3>No se encontraron descargas</h3>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <hr style="width:100%!important;">
  <section>
    
  </section>
  <section>
    
  </section>
  <?php get_footer(); ?>
