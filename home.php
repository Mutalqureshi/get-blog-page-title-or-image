<!-- header -->

<?php get_header(); ?>


            <div class="blog_bg" id="inner_page_banner" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_option('page_for_posts', true)) ?>');
">
            <div class="et_pb_row et_pb_row_0">
            <div class="blog_text fnt_increase">

              <div class="slider_text"><h1><strong><?= get_the_title( get_option('page_for_posts', true) ); ?></strong></h1>
              <hr class="slider_hr"></div>
            </div> <!-- .et_pb_text -->
            <!-- <div class="blog_banner_text">
              <strong>Dummy text Lorem Ipsum Dolor sit amet consectetur <br>text lorem ipsum dolor sit amet consectetur</strong></div> -->
            </div> <!-- .et_pb_row -->
            </div>

    <main id="main" class="blog container">     
        <section class="all-blog">
                <div class="row">
                    <div class="col-md-12">
                            <div class="row grid">
                            <div class="grid-sizer"></div>
                                <?php
                            if(have_posts()){
                                while ( have_posts() ) { the_post();
                            ?>
                                    <div class="col-md-6 grid-item">
                                       <div class="home_blog_content">

                                          <h3><a href="<?= the_permalink(); ?>" class="raush_blog_title"><?php the_title(); ?> </a></h3>
                                          <div class="blogListFooter">
                                                        <p>
                                                            <span class="listAuthor"><?php echo get_the_date(); ?> By Sunrise Smile</span>
                                                            <!--  <span class="listTime">in <?php //the_category(', '); ?></span> -->
                                                        </p>
                                                    </div><!-- ( BLOG LIST FOOTER END ) -->
                                         <div class="pad_zoom">
                                          <div class="zoom">
<div class="blog-img">
                               <?php if (has_post_thumbnail($post->ID)) { ?>

                                    <?php $url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'blog_image_size'); ?>

                                         <a href="<?= the_permalink(); ?>">

                                    <img src="<?php echo $url[0]; ?>" class="img-fluid" alt="">

                                         </a>

                                <?php } else { ?>

                                    <img src="http://placehold.it/507x320" width="507" height="320" class="img-fluid">

                                <?php } ?>
                            <div class="date-blog">
                                <?php echo get_the_time('M');?>
                                <hr class="blog-hr"><span class="max-date"><?php echo get_the_time('d');?></span>
                                <hr class="blog-hr"><?php echo get_the_time('Y');?>

                            </div>
</div>

                           </div><!-- zoom-->
                                           </div><!--padzoom-->
                                                    <div class="more_link">
                                                        <a href="<?= the_permalink() ?>" class="readmore">Read More...</a>
                                                    </div>



                                       </div>
                                    </div> <!-- col-6 -->   
                            <?php } ?>
                       <?php } ?>

                    </div><!-- md-8-->
                    <div class="pagination-sec">
                        <?php /*custom added*/
                                wpbeginner_numeric_posts_nav(); 
                          ?>

                        </div> 
                    </div><!-- md-8-->


       

   </div><!-- row-->

        </section><!-- #primary -->

    </main><!-- #main -->



<?php get_footer(); ?>



<!-- footer -->

