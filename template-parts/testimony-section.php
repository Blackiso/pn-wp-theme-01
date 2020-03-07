<?php $meta_data = get_section_meta_box('about', 'testimony'); ?>
<section class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading"><?php echo $meta_data['tag']; ?></span>
                <h2 class="mb-4"><?php echo $meta_data['title']; ?></h2>
                <p><?php echo $meta_data['des']; ?></p>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item text-center">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url(<?php echo TEMPLATE_URI ?>/images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Dennis Green</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="item text-center">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url(<?php echo TEMPLATE_URI ?>/images/person_2.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Dennis Green</p>
                                <span class="position">Interface Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item text-center">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url(<?php echo TEMPLATE_URI ?>/images/person_3.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Dennis Green</p>
                                <span class="position">UI Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item text-center">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url(<?php echo TEMPLATE_URI ?>/images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Dennis Green</p>
                                <span class="position">Web Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item text-center">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url(<?php echo TEMPLATE_URI ?>/images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Dennis Green</p>
                                <span class="position">System Analytics</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>