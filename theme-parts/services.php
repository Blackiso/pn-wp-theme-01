<div class="row justify-content-center mb-5 pb-5">
    <div class="col-md-6 text-center heading-section ftco-animate">
        <span class="subheading">Our Services</span>
        <h2 class="mb-4">Web &amp; Mobile app design, bring your ideas to life</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
    </div>
</div>
<div class="row">
    <?php
    for ($i = 0; $i < 4; $i++) {
        get_template_part("theme-parts/service-single");
    }
    ?>
</div>