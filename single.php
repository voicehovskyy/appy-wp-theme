<?php get_header(); ?>


<section class="page-head" style="background-image: url('<?php the_field('single_background'); ?>'); background-size: cover; background-position: 50% 50%;background-attachment: fixed;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Blog</h2>
                        <ul class="breadcrumb">
                            <li><a href="<?php echo site_url()?>">Home</a></li>
                            <li><a href="<?php echo site_url('/blog/')?>">blog</a></li>
                            <li><?php the_title(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>



<section class="single-blog padding-100 blogs">
        <div class="container">
            <div class="row">
                <!-- Start Single Blog -->
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="blog-box">
                                <div class="blog-img">
                                    <?php echo get_the_post_thumbnail(); ?>
                                </div>
                                <div class="blog-details">
                                    <h3><?php the_title(); ?></h3>
                                    <ul class="list-inline meta">
                                        <li><a href="#"><?php the_field('single_blog_person'); ?></a></li>
                                        <li><a href="#"><?php the_field('single_blog_data'); ?></a></li>
                                        <li><a href="#"><?php the_field('single_blog_comments'); ?></a></li>
                                        
                                    </ul>
                                   <div class="post-content">
                                   	<!-- Вывести сюда контента страницы -->
                                   	<?php the_content(); ?>
                                   </div>
                                </div>
                                <div class="comments-container">
                                    <h3>Comments</h3>
                                    <ul class="list-unstyled comments-list">
                                        <li>
                                            <div class="avatar">
                                                <img src="http://via.placeholder.com/100x100" class="img-responsive" alt="">
                                            </div>
                                            <div class="comment">
                                                <h4>John Doe<span>8 August 2017 at 5:02 am</span></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quasi inventore dicta aliquid, excepturi adipisci nobis aut, sapiente est animi porro rem recusandae nulla quo consectetur distinctio quod fugiat eligendi!</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img src="http://via.placeholder.com/100x100" class="img-responsive" alt="">
                                            </div>
                                            <div class="comment">
                                                <h4>John Doe<span>8 August 2017 at 5:02 am</span></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quasi inventore dicta aliquid, excepturi adipisci nobis aut, sapiente est animi porro rem recusandae nulla quo consectetur distinctio quod fugiat eligendi!</p>
                                            </div>
                                            <ul class="list-unstyled comments-list chiled">
                                                <li>
                                                    <div class="avatar">
                                                        <img src="http://via.placeholder.com/100x100" class="img-responsive" alt="">
                                                    </div>
                                                    <div class="comment">
                                                        <h4>John Doe<span>8 August 2017 at 5:02 am</span></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quasi inventore dicta aliquid, excepturi adipisci nobis aut, sapiente est animi porro rem recusandae nulla quo consectetur distinctio quod fugiat eligendi!</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img src="http://via.placeholder.com/100x100" class="img-responsive" alt="">
                                            </div>
                                            <div class="comment">
                                                <h4>John Doe<span>8 August 2017 at 5:02 am</span></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quasi inventore dicta aliquid, excepturi adipisci nobis aut, sapiente est animi porro rem recusandae nulla quo consectetur distinctio quod fugiat eligendi!</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="comments-form">
                                    <h3>Leave Your Comments</h3>
                                    <form>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" id="yourname" placeholder="Enter Your Name" required="">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="youremail" placeholder="Enter Your Email" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="yourmessage" rows="6" placeholder="Enter Your Comment" required=""></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-default center-block">Post Comment</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
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








<div class="container">
        <div class="col-12 col-md-8">
            <?php if (have_posts() ) : while ( have_posts()) : the_post(); ?>
 <h1><?php the_title(); ?></h1>
            <?php endwhile; endif; ?>
        </div>
        <div class="col-12 col-md-4">
      	    <aside>
      		
      	    </aside>		
        </div>
</div>



<?php get_footer(); ?>