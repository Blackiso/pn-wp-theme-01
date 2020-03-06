<?php get_header(); ?>
    <!-- <div class="js-fullheight"> -->
    <div class="hero-wrap js-fullheight">
        <div class="overlay"></div>
        <div id="particles-js"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light">
        <section class="ftco-section-featured ftco-section-featured-2 ftco-animate">
            <div class="container-fluid" data-scrollax-parent="true">
                <?php get_part('about-section'); ?>
            </div>
        </section>
    </div>
    <div class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Team</span>
                    <h2 class="mb-4">Our Team</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5 ftco-animate">
                    <div class="block-10">
                        <div class="person-info mb-2">
                            <span class="name">Jacob Smith</span>
                            <span class="position">Co Designer</span>
                        </div>
                        <img src="<?php echo TEMPLATE_URI ?>/images/person_1.jpg" alt="" class="img-fluid mb-3">
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-5 ftco-animate">
                    <div class="block-10">
                        <div class="person-info mb-2">
                            <span class="name">Aldin Henderson</span>
                            <span class="position">Web Developer</span>
                        </div>
                        <img src="<?php echo TEMPLATE_URI ?>/images/person_3.jpg" alt="" class="img-fluid mb-3">
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-5 ftco-animate">
                    <div class="block-10">
                        <div class="person-info mb-2">
                            <span class="name">Mark Willis</span>
                            <span class="position">Lead Web Developer</span>
                        </div>
                        <img src="<?php echo TEMPLATE_URI ?>/images/person_2.jpg" alt="" class="img-fluid mb-3">
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_part('testimony-section'); ?>
<?php get_footer(); ?>