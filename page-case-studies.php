<?php 
get_header(); 
set_query_var('is_home', false);
get_template_part("theme-parts/blog");
get_footer();
