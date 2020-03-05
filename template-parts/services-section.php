<?php $details = get_page_meta('services'); ?>
<section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-6 text-center heading-section ftco-animate">
                    <span class="subheading">Our Services</span>
                    <h2 class="mb-4"><?php echo $details['services-section']['title']; ?></h2>
                    <p><?php echo $details['services-section']['des']; ?></p>
                </div>
            </div>
            <div class="row mb-5">
                 <?php 
            
                    for($i = 0; $i < 4; $i++) {
                        get_part('single-service-box', ['index' => $i, 'data' => $details['services'][$i]]);
                    }

                 ?>
            </div>
            <?php if(!is_front_page()): ?>
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
            <?php endif; ?>
        </div>
    </section>