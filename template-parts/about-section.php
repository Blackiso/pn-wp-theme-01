<?php if (get_theme_mod('st_id_display_about')): ?>

<div class="row mt-5 d-flex justify-content-center">
    <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="h1"><?php customizer_about_section_text(); ?></h2>
        <?php if (customizer_about_section_btn()):?>
        <p><a href="<?php get_theme_mod('st_id_about_text_btn_link') ?>" class="btn btn-primary mt-3 py-3 px-5"><?php echo get_theme_mod('st_id_about_text_btn'); ?></a></p>
    	<?php endif; ?>
    </div>
</div>

<?php endif; ?>