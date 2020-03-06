<?php $meta_data = get_section_meta_box('services', 'services'); ?>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-6 text-center heading-section ftco-animate">
                <span class="subheading">Our Services</span>
                <h2 class="mb-4"><?php echo $meta_data['title']; ?></h2>
                <p><?php echo $meta_data['des']; ?></p>
            </div>
        </div>
        <div class="row mb-5">
             <?php 
        
                for($i = 0; $i < 4; $i++) {
                    get_part('single-service-box', ['index' => $i, 'data' => $meta_data['services'][$i]]);
                }

             ?>
        </div>
        <?php if(!is_front_page()): ?>
        <div class="row mt-5">
            <?php echo $meta_data['services-details']; ?>
        </div>
        <?php endif; ?>
    </div>
</section>