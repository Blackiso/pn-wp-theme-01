<section class="ftco-section bg-light">
    <div class="container">
        <?php if ($is_home) : ?>
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading"><?php echo strtoupper(get_theme_mod("blog_section_settings_1", 'Blog')); ?></span>
                    <h2><?php echo get_theme_mod("blog_section_settings_2", 'Recent Blog'); ?></h2>
                    <p><?php echo get_theme_mod("blog_section_settings_3", 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in'); ?></p>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <?php if (have_posts()) :
                $posts_count = $is_home ? intval(get_theme_mod("blog_section_settings_4", 3)) : 6;
                $posts_indice = 0;
                while (have_posts()) : the_post();
                    if ($posts_indice >= $posts_count) break;
                    get_template_part("theme-parts/post-single");
                    $posts_indice++;
                endwhile;
            endif;
            ?>
        </div>
        <?php if (!$is_home) : ?>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>