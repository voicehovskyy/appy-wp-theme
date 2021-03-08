<?php
/*
Template Name: Home Page Template
Template Post Type:  page
*/
?>
<?php get_header(); ?>

<!-- Start Home Banner -->
<section id="home_banner" class="home-slide" style="background-image: url('<?php the_field('banner_background_image'); ?>'); background-size: cover; background-position: 50% 50%;background-attachment: fixed;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="mt-250"></div>
                <h3><?php the_field('banner_title'); ?></h3>
                <p><?php the_field('banner_text'); ?></p>
                <?php if( have_rows('banner_links') ): ?>
                   
                    <?php while( have_rows('banner_links') ): the_row(); ?>
                        <a class="btn btn-default" href="<?php the_sub_field('url'); ?>" role="button"><?php the_sub_field('text'); ?></a>
                    <?php endwhile; ?>
                    
                 <?php endif; ?>
            </div>
            <div class="col-md-6">
                <div class="mt-200 hidden-sm hidden-xs"></div>
                <img src="<?php the_field('banner_image'); ?>" class="img-responsive center-block" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End Home Banner -->

<!-- Start About Section -->
<section id="about" class="padding-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heade text-center">
                <h3><?php the_field('about_title'); ?></h3>
                <div class="space-25"></div>
               <?php the_field('about_text'); ?>
                <div class="space-50"></div>
                              </div>

                <?php if( have_rows('about_info') ): ?>
                <?php while( have_rows('about_info') ): the_row(); ?>
                        <div class="col-md-4 text-center about-box" data-aos="fade-up" data-aos-delay="200">
                            <img src="<?php the_sub_field('image'); ?>" class="img-responsive center-block" alt="">
                            <h4><?php the_sub_field('title'); ?></h4>
                            <p><?php the_sub_field('text'); ?></p>
                        </div>
                   <?php endwhile; ?>
                <?php endif; ?>

        </div>
    </div>
</section>
<!-- End About Section -->
<!-- Start Features Section -->
<section id="features" class="pt-100" style="background-image: url('<?php the_field('features_background_img'); ?>'); background-size: cover; background-position: 50% 50%;background-attachment: fixed;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heade white text-center">
                <h3><?php the_field('features_title'); ?></h3>
                <div class="space-25"></div>
                <p><?php the_field('features_text'); ?>
                </p>
                <div class="space-50"></div>
            </div>
            <div class="col-md-4 text-right">
                <div class="features-wrapper right-icon">
                    <ul class="list-unstyled">
                           <?php if( have_rows('features_info_left') ): ?>
                                 <?php while( have_rows('features_info_left') ): the_row(); ?>
                        <li>
                            <div class="single-feature" data-aos="fade-right" data-aos-delay="200">
                                <div class="features-icon">
                                   <!--  <img src="assets/img/icon-4.png" class="img-responsive" alt=""> --> 
                                   <img src="<?php the_sub_field('features_image'); ?>" class="img-responsive" alt="">  
                                </div>
                                <div class="features-details">
                                    <h5><?php the_sub_field('features_info_title'); ?></h5>
                                    <p><?php the_sub_field('features_info_text'); ?></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                       <?php endwhile; ?>
                       <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 text-center about-box hidden-sm hidden-xs" data-aos="fade-up">
               <!--   <?php 
                    $image = get_field('features_image_center');
                    if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-feature" />
                    <?php endif; ?> -->
                <img src="<?php the_field('features_image_center'); ?>" class="img-responsive center-block" alt=""> 
            </div>
            <div class="col-md-4 text-left about-box">
                <div class="features-wrapper left-icon">
                    <ul class="list-unstyled">
                        <?php if( have_rows('features_info_right') ): ?>
                            <?php while( have_rows('features_info_right') ): the_row(); ?>
                        <li>
                            <div class="single-feature" data-aos="fade-left" data-aos-delay="200">
                                <div class="features-icon">
                                    <!-- <img src="assets/img/icon-7.png" class="img-responsive" alt=""> -->
                                    <img src="<?php the_sub_field('features_image'); ?>" class="img-responsive" alt="">
                                </div>
                                <div class="features-details"> 
                                    <h5><?php the_sub_field('features_info_title_right'); ?></h5>
                                    <p><?php the_sub_field('features_info_text_right'); ?></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Features Section -->
<!-- Start One Feature Section -->
<section class="one-feature pt-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6" data-aos="fade-right" data-aos-delay="600">
                    <?php 
                    $image = get_field('features_one_image');
                    if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-feature" />
                    <?php endif; ?>
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
                <h2><?php the_field('features_one_title'); ?></h2>
                <p><?php the_field('features_one_text'); ?></p>
                <a class="btn btn-default colored" href="<?php the_field('features_one_link'); ?>" role="button">Read More</a>
            </div>
        </div>
    </div>
</section>
<!-- End One Feature Section -->
<!-- Start second Feature Section -->
<section class="one-feature pt-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
                <h2><?php the_field('features_second_title'); ?></h2>
                <p><?php the_field('features_second_text'); ?></p>
                <a class="btn btn-default colored" href="<?php the_field('features_second_link'); ?>" role="button">Read More</a>
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-delay="600">
                   <?php 
                    $image = get_field('features_second_image');
                    if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-feature" />
                    <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- End second Feature Section -->
<!-- Start three Feature Section -->
<section class="one-feature padding-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6" data-aos="fade-right" data-aos-delay="600">
                  <?php 
                    $image = get_field('features_three_image');
                    if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-feature" />
                    <?php endif; ?>
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
                <h2><?php the_field('features_three_title'); ?></h2>
                <p><?php the_field('features_three_text'); ?></p>
                <a class="btn btn-default colored" href="<?php the_field('features_three_link'); ?>" role="button">Read More</a>
            </div>
        </div>
    </div>
</section>
<!-- End three Feature Section -->
<!-- Start Testimonial Section -->
<section id="testimonial" class="padding-100" style="background-image: url('<?php the_field('test_background_image'); ?>'); background-size: cover; background-position: 50% 50%;background-attachment: fixed;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heade white text-center">
                <h3><?php the_field('test_title'); ?></h3>
                <div class="space-25"></div>
                <p><?php the_field('test_text'); ?></p>
                <div class="space-50"></div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="testimonial-slider owl-carousel owl-theme">
                    <?php if( have_rows('test_slider') ): ?>
                        <?php while( have_rows('test_slider') ): the_row(); ?>
                            <div class="item">       
                                <div class="col-md-4 text-center">
                                    <div class="client-img center-block">
                                        <?php
                                            $image = get_sub_field('slider_img');
                                            if( !empty($image) ): ?>
                                        <img src="<?php echo wp_get_attachment_image_src( $image['ID'], 'full' )[0]; ?>"  class="img-feature" />
                                        <?php   endif; ?>
                                
                                        <h4><?php the_sub_field('slider_name'); ?></h4>
                                        <div class="client-rate">
                                        <ul class="list-inline">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p><?php the_sub_field('slider_text'); ?></p>
                                 </div>    
                            </div>           
                        <?php endwhile; ?>
                    <?php endif; ?>  
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Section -->
<!-- Start Screenshots Section -->
<section id="screenshots" class="padding-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heade text-center">
                <h3><?php the_field('screenshots_title'); ?></h3>
                <div class="space-25"></div>
                <p><?php the_field('screenshots_text'); ?></p>
               
                <div class="space-50"></div>
            </div>
            <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 text-center">
                <div class="screenshots-slider owl-carousel owl-theme">
                    <?php if( have_rows('screen_image') ): ?>
                        <?php while( have_rows('screen_image') ): the_row(); ?>
                                 <div class="item">
                                <?php
                                    $image = get_sub_field('screen_img');
                                    if( !empty($image) ): ?>
                                     
                                     <img src="<?php echo wp_get_attachment_image_src( $image['ID'], 'full' )[0]; ?>"  class="img-responsive" />
                                <?php endif; ?>
                                </div>
                        <?php endwhile; ?>
                    <?php endif; ?>  
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Screenshots Section -->
<!-- Start Countup Section -->
<section id="countup" class="padding-100" style="background-image: url('<?php the_field('statistics_background'); ?>'); background-size: cover; background-position: 50% 50%;background-attachment: fixed;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heade white text-center">
                <h3><?php the_field('statistics_title'); ?></h3>
                <div class="space-25"></div>
                <p><?php the_field('statistics_text'); ?></p>
                <div class="space-50"></div>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="countup-box" data-aos="fade-zoom-in">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/icon-10.png'; ?>" class="img-responsive center-block" alt="">
                    <div class="count-num"><span>10</span>K</div>
                    <div class="count-name">Download</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="countup-box" data-aos="fade-zoom-in">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/icon-11.png'; ?>" class="img-responsive center-block" alt="">
                    <div class="count-num"><span>3500</span></div>
                    <div class="count-name">Line code</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="countup-box" data-aos="fade-zoom-in">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/icon-12.png'; ?>" class="img-responsive center-block" alt="">
                    <div class="count-num"><span>600</span></div>
                    <div class="count-name">coffee cups</div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="countup-box" data-aos="fade-zoom-in">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/icon-13.png'; ?>" class="img-responsive center-block" alt="">
                    <div class="count-num"><span>3700</span></div>
                    <div class="count-name">shere</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Countup Section -->
<!-- Start Price Section -->
<section id="price" class="padding-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heade text-center">
                <h3><?php the_field('price_title'); ?></h3>
                <div class="space-25"></div>
                <p><?php the_field('price_text'); ?>
                </p>
                <div class="space-50"></div>
            </div>
            <?php if( have_rows('price_table') ): ?>
                    <?php while( have_rows('price_table') ): the_row(); ?>
            <div class="col-md-4">
                <div class="price-table text-center">
                        <div class="space-50"></div>
                        <h4><?php the_sub_field('price_table_title'); ?></h4>
                        <div class="space-50"></div>
                        <div class="cost">
                            <h3><?php the_sub_field('price_table_numb'); ?></h3>
                        </div>
                        <div class="space-50"></div>
                        <ul class="list-unstyled">
                            <li><?php the_sub_field('table_text1'); ?></li>
                            <li><?php the_sub_field('table_text2'); ?></li>
                            <li><?php the_sub_field('table_text3'); ?></li>
                            <li><?php the_sub_field('table_text4'); ?></li>
                            <li><?php the_sub_field('table_text5'); ?></li>
                        </ul>
                        <div class="space-50"></div>
                        <a class="btn btn-default blue" href="<?php the_sub_field('table_link_url'); ?>" role="button">Read More</a>
                        <div class="space-50"></div>
                           </div>
                       </div>
                    <?php endwhile; ?>
                  <?php endif; ?>
        </div>
    </div>
</section>
<!-- End Price Section -->
<!-- Start Video Section -->
<section id="video" class="padding-100" style="background-image: url('<?php the_field('video_background'); ?>'); background-size: cover; background-position: 50% 50%;background-attachment: fixed;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heade white text-center">
                <h3><?php the_field('video_title'); ?></h3>
                <div class="space-25"></div>
                <p><?php the_field('video_text'); ?>
                </p>
                <div class="space-50"></div>
            </div>
            <div class="col-md-12 text-center">
                <a href="http://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity>
                    <img src="<?php echo get_template_directory_uri().'/assets/img/icon-14.png'; ?>" class="img-responsive center-block" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End Video Section -->
<!-- Start Team Section -->
<section id="team" class="padding-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heade text-center">
                <h3><?php the_field('meeting_title'); ?></h3>
                <div class="space-25"></div>
                <p><?php the_field('meeting_text'); ?>
                </p>
                <div class="space-50"></div>
            </div>
            <div class="col-md-12">
                <div class="team-slider owl-carousel owl-theme">
                    <?php if( have_rows('person_info') ): ?>
                        <?php while( have_rows('person_info') ): the_row(); ?>

                    <div class="item">
                        <div class="person">
                            <img src="<?php the_sub_field('person_img'); ?>" class="img-responsive" alt="">
                            <div class="person-info overlay">
                                <div class="info-bottom">
                                    <h4><?php the_sub_field('person_name'); ?></h4>
                                    <h6><?php the_sub_field('specialty'); ?></h6>
                                    <p><?php the_sub_field('person_text'); ?></p>
                                    <ul class="list-inline social-icons">
                                        <li class="facebook"><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="twitter"><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li class="google-plus"><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li class="linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li class="pinterest"><a href="#" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="owl-nav disabled">
                        <div class="owl-prev">prev</div>
                    <div class="owl-next">next</div>
                </div>
                    <div class="owl-dots">
                        <div class="owl-dot active"><span></span></div>
                        <div class="owl-dot"><span></span></div><div class="owl-dot"><span></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Team Section -->
<!-- Start Download Section -->
<section id="download" class="padding-100" style="background-image: url('<?php the_field('download_background'); ?>'); background-size: cover; background-position: 50% 50%;background-attachment: fixed;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heade white text-center">
                <h3><?php the_field('download_title'); ?></h3>
                <div class="space-25"></div>
                <p><?php the_field('download_text'); ?>
                </p>
                <div class="space-50"></div>
            </div>
            <div class="col-md-4 text-center" data-aos="fade-right" data-aos-delay="300">
                <a class="btn btn-default" href="#" role="button"><i class="fa fa-apple" aria-hidden="true"></i> <span>App Store</span></a>
            </div>
            <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="300">
                <a class="btn btn-default" href="#" role="button"><i class="fa fa-android" aria-hidden="true"></i> <span>Google Play</span></a>
            </div>
            <div class="col-md-4 text-center" data-aos="fade-left" data-aos-delay="300">
                <a class="btn btn-default" href="#" role="button"><i class="fa fa-windows" aria-hidden="true"></i> <span>Windows Store</span></a>
            </div>
        </div>
    </div>
</section>
<!-- End Download Section -->
<!-- Start Recent Blog Section -->
<section id="recent-blog" class="padding-100">
    <div class="container">
       
        <div class="row">
            <div class="col-md-12 section-heade text-center">
                 <h2><?php the_field('blog_title'); ?></h2>
                 <div class="space-25"></div>
                <p><?php the_field('banner_text'); ?></p>
                <div class="space-50"></div>
            </div>
            <div class="col-md-12">
                <div class="recent-blog-slider owl-carousel owl-theme">
                   
                  <?php       
                   global $post;

                    $query = new WP_Query( ['posts_per_page' => 3] );

                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                    ?>
                    <div class="item">
                        <div class="blog-box">
                            <div class="blog-post">
                                <?php echo get_the_post_thumbnail(); ?>
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>">Read More</a>
                            </div> 
                        </div>
                    </div>
                    <?php 
                            }
                        }
                    wp_reset_postdata(); // Сбрасываем $post
                    ?>
                           
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="space-50"></div>
                <a class="btn btn-default colored" href="<?php echo site_url('/blog'); ?>" role="button">View All</a>
            </div> 
        </div>
    </div>
</section>
<!-- End Recent Blog Section -->
<!-- Start Call To Action Section -->
<section id="call-to-action" class="padding-100" style="background-image: url('<?php the_field('call_background'); ?>'); background-size: cover; background-position: 50% 50%;background-attachment: fixed;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 section-heade white">
                <h3><?php the_field('call_title'); ?></h3>
                <div class="space-25"></div>
                <p><?php the_field('call_text'); ?></p>
            </div>
            <div class="col-md-4 text-center">
                <div class="space-25"></div>
                <a class="btn btn-default" href="#" role="button">discover more</a>
            </div>
        </div>
    </div>
</section>
<!-- End Call To Action Section -->
<!-- Start FAQ Section -->
<section id="faq" class="padding-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heade text-center">
                <h3><?php the_field('faq_title'); ?></h3>
                <div class="space-25"></div>
                <p><?php the_field('faq_text'); ?></p>
                <div class="space-50"></div>
            </div>
            <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
                <div class="space-50"></div>
                <div class="space-50"></div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                     <?php $i = 0; ?>
                    <?php if( have_rows('panel') ): ?>
                        <?php while( have_rows('panel') ): the_row(); ?>
                        <div class="panel">
                        <div class="panel-heading" role="tab" id="heading_<?php echo $i; ?>">
                            <h4 class="panel-title">
                               <?php
                                    $panel_title_class = "";
                                    $panel_body_class = "collapse in";
                                    if($i !== 0) {
                                       $panel_title_class = "collapsed";
                                       $panel_body_class = "collapse";
                                       }
                                ?>
                                <a class="<?php echo $panel_title_class; ?>" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse_<?php echo $i; ?>">
                                    <?php the_sub_field('panel_title'); ?>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse_<?php echo $i; ?>" class="panel-collapse <?php echo $panel_body_class;?>" role="tabpanel" aria-labelledby="heading_<?php echo $i; ?>">
                            <div class="panel-body">
                               <?php the_sub_field('panel_body'); ?>
                            </div>
                        </div>
                        </div>
                        <?php $i++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-delay="600">
                <img src="<?php the_field('faq_img'); ?>" class="img-responsive center-block" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End FAQ Section -->
<!-- Start Contact Section -->
<section id="contact" class="padding-100" style="background-image: url('<?php the_field('background_image_contact'); ?>'); background-size: cover; background-position: 50% 50%;background-attachment: fixed;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heade white text-center">
                <h3><?php the_field('contact_title'); ?></h3>
                <div class="space-25"></div>
                <p><?php the_field('contact_text'); ?>
                </p>
                <div class="space-50"></div>
            </div>
            <div class="col-md-8">
                <?php echo do_shortcode('[contact-form-7 id="90" title="Контактная форма 1"]'); ?>
            </div>
            <div class="col-md-4">
                <ul class="list-unstyled contact-info">
                    <li>
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text">0123456778</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="text"><a href="mailto:mail@appy.com">mail@appy.com</a></div>
                    </li>
                </ul>
                <ul class="list-inline social-icons">
                    <li class="facebook"><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="twitter"><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="google-plus"><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li class="linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li class="pinterest"><a href="#" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                    <li class="instagram"><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Section -->
<!-- Start Subscribe Section -->
<section id="subscribe" class="padding-100">
    <div class="container">
            <div class="row">
            <div class="col-md-6 section-heade">
                <h3>Subscribe</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    <br>sed do eiusmod tempor incididunt ut labore.                
                </p>
            </div>
            <div class="col-md-6 text-center">
                <div class="space-25"></div>
                    <div class="subcribe-form">
                        <?php echo do_shortcode('[contact-form-7 id="92" title="Контактная форма Subscribe"]'); ?>                    
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- End Subscribe Section -->
    
<?php get_footer(); ?>

