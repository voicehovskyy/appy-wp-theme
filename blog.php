<?php 
/*
 * Template name: Блог
 */
 
 get_header(); 

 ?>


<section class="page-head" style="background-image: url('<?php the_field('blog_background'); ?>'); background-size: cover; background-position: 50% 50%;background-attachment: fixed;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Blog</h2>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


<section class="all_blogs padding-100 blogs">
        <div class="container">
            <div class="row">
                <!-- Start All Blogs -->
                <div class="col-md-8">
                    <div class="row">


				<?php       
                   	global $post;

                    $query = new WP_Query( ['posts_per_page' => 8] );

                    if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post();
                ?>

                        <div class="col-md-6 col-sm-6">
                            <div class="blog-box">
                                <div class="blog-img">
                                    <a href="<?php the_permalink(); ?>">
										<?php echo get_the_post_thumbnail(); ?>
                                    </a>
                                </div>
                                <div class="blog-details">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <ul class="list-inline meta">
                                        <li><a href="#">John Doe</a></li>
                                        <li><a href="#">1 October</a></li>
                                        <li><a href="#">25 comments</a></li>
                                    </ul>
                                    <p><?php the_excerpt(); ?></p>
                                    <a class="btn btn-default blue" href="<?php the_permalink(); ?>" role="button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php 
                            }
                        }
                wp_reset_postdata(); // Сбрасываем $post
                ?>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- End All Blogs -->
                <!-- Start Sidebar -->
                <div class="col-md-4">
                    <div class="sidebar">
                        <form action="#">
                            <div class="search-form">
                                <input class="form-control" type="text" placeholder="Type to Search">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </form>
                        <div class="categories-widget sidebar-widget">
                            <h4>Categories</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Travel<span>5</span></a></li>
                                <li><a href="#">Lifestyle<span>7</span></a></li>
                                <li><a href="#">Uncategorized<span>2</span></a></li>
                                <li><a href="#">Design<span>12</span></a></li>
                                <li><a href="#">Software<span>15</span></a></li>
                            </ul>
                        </div>
                        <div class="recent-posts-widget sidebar-widget">
                            <h4>Recent Post</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="recent-post-img">
                                        <a href=""><img src="http://via.placeholder.com/80x80" class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="recent-post-description">
                                        <h3><a href="#">lorem ipsum dolor sit amet dolor</a></h3>
                                        <h6>1 October</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="recent-post-img">
                                        <a href=""><img src="http://via.placeholder.com/80x80" class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="recent-post-description">
                                        <h3><a href="#">lorem ipsum dolor sit amet dolor</a></h3>
                                        <h6>1 October</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="recent-post-img">
                                        <a href=""><img src="http://via.placeholder.com/80x80" class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="recent-post-description">
                                        <h3><a href="#">lorem ipsum dolor sit amet dolor</a></h3>
                                        <h6>1 October</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="recent-post-img">
                                        <a href=""><img src="http://via.placeholder.com/80x80" class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="recent-post-description">
                                        <h3><a href="#">lorem ipsum dolor sit amet dolor</a></h3>
                                        <h6>1 October</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="archives-widget sidebar-widget">
                            <h4>Archives</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">July 2017</a></li>
                                <li><a href="#">August 2017</a></li>
                            </ul>
                        </div>
                        <div class="tags-widget sidebar-widget">
                            <h4>Tags</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Uncategorized</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Software</a></li>
                            </ul>
                        </div>
                        <div class="meta-widget sidebar-widget">
                            <h4>Meta</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Log In</a></li>
                                <li><a href="#">Entries RSS</a></li>
                                <li><a href="#">Comments RSS</a></li>
                                <li><a href="#">WordPress.Org</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </section>

                  




<?php get_footer(); ?>