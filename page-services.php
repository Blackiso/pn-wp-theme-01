<?php get_header(); ?>
    <div class="hero-wrap js-fullheight">
        <div class="overlay"></div>
        <div id="particles-js"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Services</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Services</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-6 text-center heading-section ftco-animate">
                    <span class="subheading">Our Services</span>
                    <h2 class="mb-4">Web &amp; Mobile app design, bring your ideas to life</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                </div>
            </div>
            <div class="row mb-5">
                 <?php 
            
                    for($i = 0; $i < 4; $i++) {
                        get_part('single-service-box', ['index' => $i]);
                    }

                 ?>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 ftco-animate">
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <ul class="list-services">
                        <li>
                            <h3>#1</h3>
                        </li>
                        <li><a href="#">UI/UX Design</a></li>
                        <li><a href="#">Mobile App Design Design</a></li>
                        <li><a href="#">Responsive Design</a></li>
                    </ul>
                </div>
                <div class="col-md-4 ftco-animate">
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <ul class="list-services">
                        <li>
                            <h3>#2</h3>
                        </li>
                        <li><a href="#">HTML / CSS</a></li>
                        <li><a href="#">Prototyping</a></li>
                        <li><a href="#">Wireframes</a></li>
                    </ul>
                </div>
                <div class="col-md-4 ftco-animate">
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <ul class="list-services">
                        <li>
                            <h3>#3</h3>
                        </li>
                        <li><a href="#">Product Strategy</a></li>
                        <li><a href="#">UX Strategy</a></li>
                        <li><a href="#">User Testing</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>