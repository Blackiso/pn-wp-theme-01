<section class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Customer Says</span>
                <h2 class="mb-4">Our satisfied customer says</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <?php
                    $feedbacks_count = 4;
                    $feedback_indice = 0;
                    ?>
                    <?php while ($feedback_indice < $feedbacks_count) : ?>
                        <?php get_template_part("theme-parts/feedback-single"); ?>
                        <?php $feedback_indice++; ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>