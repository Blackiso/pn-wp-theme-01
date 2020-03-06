<?php $details = get_page_meta('services'); ?>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-6 text-center heading-section ftco-animate">
                <span class="subheading">Our Services</span>
                <h2 class="mb-4"><?php echo $details['title']; ?></h2>
                <p><?php echo $details['des']; ?></p>
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
            <?php echo $details['services-details']; ?>
        </div>
        <?php endif; ?>
    </div>
</section>