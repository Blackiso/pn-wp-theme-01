<div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div id="particles-js"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">

                <?php
                global $wp;
                $current_url = home_url(add_query_arg(array(), $wp->request));
                $is_home_page = get_home_url() === $current_url;
                ?>
                <?php if ($is_home_page) : ?>
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <?php
                        $header_text = get_theme_mod("header_section_settings", "We love to create Beautiful websites");
                        $highlight_text = get_theme_mod("header_section_settings_2", "Beautiful");
                        echo str_replace($highlight_text, "<strong>$highlight_text</strong>", $header_text);
                        ?>
                    </h1>
                    <?php
                    $show_call_to_action_button = get_theme_mod("header_section_settings_3", true);
                    $call_to_action_button_text = get_theme_mod("header_section_settings_4", "Get in touch");
                    $call_to_action_button_url = get_theme_mod("header_section_settings_5", "#");
                    $call_to_action_button_target = get_theme_mod("header_section_settings_6", false) ? "_blank" : "";

                    if ($show_call_to_action_button) echo "
            <p data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\">
              <a 
              href='$call_to_action_button_url' 
              class='btn btn-primary btn-outline-white px-5 py-3' 
              target='$call_to_action_button_target'>
                $call_to_action_button_text
              </a>
            </p>
            ";
                    ?>
                <?php else : ?>
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <span class="mr-2">
                            <a href="<?php echo get_home_url(); ?>">Home</a></span> <span><?php echo get_the_title(); ?>
                        </span>
                    </p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact</h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>