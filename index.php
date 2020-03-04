<?php get_header(); ?>

<div class="bg-light">
  <section class="ftco-section-featured ftco-animate">
    <div class="container-fluid" data-scrollax-parent="true">
      <div class="row no-gutters d-flex align-items-center" data-scrollax=" properties: { translateY: '-30%'}">

        <div class="col-md-3 mb-3">
          <a href="#" class="featured-img">
            <div class="text-1 p-4 d-flex align-items-center">
              <h3>The Verge<br><span class="tag">Website</span></h3>
            </div>
            <img src="<?php echo TEMPLATE_URI . '/images/image_1.jpg' ?>" class="img-fluid" alt="">
            <div class="text p-4 d-flex align-items-center">
              <div class="user d-flex align-items-center">
                <div class="user-img mr-3" style="background-image: url(<?php echo TEMPLATE_URI . '/images/person_1.jpg' ?>);"></div>
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
                    <img src="<?php echo TEMPLATE_URI . '/images/image_5.jpg' ?>" class="img-fluid" alt="">
                    <div class="text p-4 d-flex align-items-center">
                      <div class="user d-flex align-items-center">
                        <div class="user-img mr-3" style="background-image: url(<?php echo TEMPLATE_URI . '/images/person_1.jpg' ?>);"></div>
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
                    <img src="<?php echo TEMPLATE_URI . '/images/image_4.jpg' ?>" class="img-fluid" alt="">
                    <div class="text p-4 d-flex align-items-center">
                      <div class="user d-flex align-items-center">
                        <div class="user-img mr-3" style="background-image: url(<?php echo TEMPLATE_URI . '/images/person_1.jpg' ?>);"></div>
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
                    <img src="<?php echo TEMPLATE_URI . '/images/image_6.jpg' ?>" class="img-fluid" alt="">
                    <div class="text p-4 d-flex align-items-center">
                      <div class="user d-flex align-items-center">
                        <div class="user-img mr-3" style="background-image: url(<?php echo TEMPLATE_URI . '/images/person_1.jpg' ?>);"></div>
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
                    <img src="<?php echo TEMPLATE_URI . '/images/image_3.jpg' ?>" class="img-fluid" alt="">
                    <div class="text p-4 d-flex align-items-center">
                      <div class="user d-flex align-items-center">
                        <div class="user-img mr-3" style="background-image: url(<?php echo TEMPLATE_URI . '/images/person_1.jpg' ?>);"></div>
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
            <img src="<?php echo TEMPLATE_URI . '/images/image_2.jpg' ?>" class="img-fluid" alt="">
            <div class="text p-4 d-flex align-items-center">
              <div class="user d-flex align-items-center">
                <div class="user-img mr-3" style="background-image: url(<?php echo TEMPLATE_URI . '/images/person_1.jpg' ?>);"></div>
                <h3>John Bruce <br><span class="position">Designer</span></h3>
              </div>
            </div>
          </a>
        </div>

      </div>
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="h1">UI/UX, visual, <strong class="px-3">Web designer</strong> with more than 12 years of experience in designing websites and mobile apps.</h2>
          <p><a href="<?php echo home_url("/get-in-touch"); ?>" class="btn btn-primary mt-3 py-3 px-5">Get in touch</a></p>
        </div>
      </div>
    </div>
  </section>
</div>

<section class="ftco-section">
  <div class="container">
    <?php get_template_part("theme-parts/services"); ?>
  </div>
</section>

<?php if (get_theme_mod("subscribe_section_settings_1", true)) : ?>
  <section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2><?php echo get_theme_mod("subscribe_section_settings_2", "Subcribe to our Newsletter"); ?></h2>
            <p><?php echo get_theme_mod("subscribe_section_settings_3", "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in"); ?></p>
            <div class="row d-flex justify-content-center mt-5">
              <div class="col-md-6">
                <form action="#" class="subscribe-form">
                  <div class="form-group">
                    <span class="icon icon-paper-plane"></span>
                    <input type="text" class="form-control" placeholder="<?php echo get_theme_mod('subscribe_section_settings_4', 'Enter email address'); ?>">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
endif;

set_query_var('is_home', true);
get_template_part("theme-parts/portfolio");
get_template_part("theme-parts/feedbacks");
?>

<section class="ftco-section ftco-counter" id="section-counter">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
        <h2>Our achievements</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
      </div>
    </div>
    <div class="row">
      <?php
      $achievements_count = 3;
      $achievements_indice = 0;
      while (true) :
        if ($achievements_indice >= $achievements_count) break;
        get_template_part('theme-parts/achievement-single');
        $achievements_indice++;
      endwhile;
      ?>
    </div>
  </div>
</section>

<?php
set_query_var('is_home', true);
get_template_part("theme-parts/blog");
get_footer();
?>