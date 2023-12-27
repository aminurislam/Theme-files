<div class="col-md-12 col-lg-8">

            <div class="blog-section-container">

             <?php while ( have_posts()): the_post();

              $some =  get_post_format();

              if (  $some == 'audio' ){

                echo get_template_part('template-parts/single-post/single', 'audio');

              }elseif($some == 'video'){

                echo get_template_part('template-parts/single-post/single', 'video'); 

              }elseif($some == 'image'){

                echo get_template_part('template-parts/single-post/single', 'image'); 

              }elseif($some == 'status'){

                echo get_template_part('template-parts/single-post/single', 'status'); 

              }elseif($some == 'quote'){

                echo get_template_part('template-parts/single-post/single', 'quote'); 

              }elseif($some == 'aside'){

                echo get_template_part('template-parts/single-post/single', 'aside'); 

              }elseif($some == 'link'){

                echo get_template_part('template-parts/single-post/single', 'link'); 

              }elseif($some == 'chat'){

                echo get_template_part('template-parts/single-post/single', 'chat'); 

              }elseif($some == 'gallery'){

                echo get_template_part('template-parts/single-post/single', 'gallery'); 

              }else{

                echo get_template_part('template-parts/single-post/single', 'none'); 

              }

              ?>

             <?php  endwhile; ?>

              <?php comments_template(); ?>

                <!-- Post Reply Area Ends -->

              </div><!--  col-md-12 col-lg-8 ends -->

            <!-- blog section  Ends -->

          </div><!-- col-md-12  Ends -->
