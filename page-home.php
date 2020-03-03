<?php get_header(); ?>

<!-- <div class="js-fullheight"> -->
<div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div id="particles-js"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We love to create <strong>Beautiful</strong> websites</h1>
                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-primary btn-outline-white px-5 py-3">Get in touch</a></p>
            </div>
        </div>
    </div>
</div>
<div class="bg-light">
    <section class="ftco-section-featured ftco-animate">
        <div class="container-fluid" data-scrollax-parent="true">
            <div class="row no-gutters d-flex align-items-center" data-scrollax=" properties: { translateY: '-30%'}">
                <div class="col-md-3 mb-3">
                    <a href="#" class="featured-img">
                        <div class="text-1 p-4 d-flex align-items-center">
                            <h3>The Verge<br><span class="tag">Website</span></h3>
                        </div>
                        <img src="<?php echo TEMPLATE_URI ?>/images/image_1.jpg" class="img-fluid" alt="">
                        <div class="text p-4 d-flex align-items-center">
                            <div class="user d-flex align-items-center">
                                <div class="user-img mr-3" style="background-image: url(<?php echo TEMPLATE_URI ?>/images/person_1.jpg);"></div>
                                <h3>John Bruce <br><span class="position">Designer</span></h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <div class="row no-gutters d-flex align-items-end">
                                <div class="col-md-8">
                                    <a href="#" class="featured-img">
                                        <div class="text-1 p-4 d-flex align-items-center">
                                            <h3>Racks<br><span class="tag">Website</span></h3>
                                        </div>
                                        <img src="<?php echo TEMPLATE_URI ?>/images/image_5.jpg" class="img-fluid" alt="">
                                        <div class="text p-4 d-flex align-items-center">
                                            <div class="user d-flex align-items-center">
                                                <div class="user-img mr-3" style="background-image: url(<?php echo TEMPLATE_URI ?>/images/person_1.jpg);"></div>
                                                <h3>John Bruce <br><span class="position">Designer</span></h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="#" class="featured-img">
                                        <div class="text-1 p-4 d-flex align-items-center">
                                            <h3>Zendesk<br><span class="tag">Website</span></h3>
                                        </div>
                                        <img src="<?php echo TEMPLATE_URI ?>/images/image_4.jpg" class="img-fluid" alt="">
                                        <div class="text p-4 d-flex align-items-center">
                                            <div class="user d-flex align-items-center">
                                                <div class="user-img mr-3" style="background-image: url(<?php echo TEMPLATE_URI ?>/images/person_1.jpg);"></div>
                                                <h3>John Bruce <br><span class="position">Designer</span></h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row no-gutters d-flex align-items-start">
                                <div class="col-md-8">
                                    <a href="#" class="featured-img">
                                        <div class="text-1 p-4 d-flex align-items-center">
                                            <h3>Curator<br><span class="tag">Website</span></h3>
                                        </div>
                                        <img src="<?php echo TEMPLATE_URI ?>/images/image_6.jpg" class="img-fluid" alt="">
                                        <div class="text p-4 d-flex align-items-center">
                                            <div class="user d-flex align-items-center">
                                                <div class="user-img mr-3" style="background-image: url(<?php echo TEMPLATE_URI ?>/images/person_1.jpg);"></div>
                                                <h3>John Bruce <br><span class="position">Designer</span></h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="#" class="featured-img">
                                        <div class="text-1 p-4 d-flex align-items-center">
                                            <h3>Tasty<br><span class="tag">Website</span></h3>
                                        </div>
                                        <img src="<?php echo TEMPLATE_URI ?>/images/image_3.jpg" class="img-fluid" alt="">
                                        <div class="text p-4 d-flex align-items-center">
                                            <div class="user d-flex align-items-center">
                                                <div class="user-img mr-3" style="background-image: url(<?php echo TEMPLATE_URI ?>/images/person_1.jpg);"></div>
                                                <h3>John Bruce <br><span class="position">Designer</span></h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <a href="#" class="featured-img">
                        <div class="text-1 p-4 d-flex align-items-center">
                            <h3>Voyage<br><span class="tag">Website</span></h3>
                        </div>
                        <img src="<?php echo TEMPLATE_URI ?>/images/image_2.jpg" class="img-fluid" alt="">
                        <div class="text p-4 d-flex align-items-center">
                            <div class="user d-flex align-items-center">
                                <div class="user-img mr-3" style="background-image: url(<?php echo TEMPLATE_URI ?>/images/person_1.jpg);"></div>
                                <h3>John Bruce <br><span class="position">Designer</span></h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <?php get_part('about-section'); ?>
        </div>
    </section>
</div>
<?php get_part('services-section'); ?>
<section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2>Subcribe to our Newsletter</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-md-6">
                            <form action="#" class="subscribe-form">
                                <div class="form-group">
                                    <span class="icon icon-paper-plane"></span>
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Works</span>
                <h2 class="mb-4">View our works below to see our design and way of development.</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
            </div>
        </div>
        <div class="row">
            
            <?php 
            
                for($i = 0; $i < 3; $i++) {
                    get_part('single-portfolio-box', ['index' => $i]);
                }

             ?>

        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <span><a href="#" class="btn btn-primary py-3 px-5">View All Projects</a></span>
            </div>
        </div>
    </div>
</section>
<?php get_part('testimony-section'); ?>
<section class="ftco-section ftco-counter" id="section-counter">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <h2>Our achievements</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="400">0</strong>
                        <span>Customers are satisfied with our professional support</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="1000">0</strong>
                        <span>Amazing preset options to be mixed and combined</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="8000">0</strong>
                        <span>Average response time on live chat support channel</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Blog</span>
                <h2>Recent Blog</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
            </div>
        </div>
        <div class="row">
            
            <?php 

                for($i = 0; $i < 3; $i++) {
                    get_part('single-blog-box');
                }

             ?>

        </div>
    </div>
</section>
<?php get_footer(); ?>