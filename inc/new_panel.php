<?php

function new_panel($wp_customize, $panel_array, $callback)
{

    $id = $panel_array['id'];
    unset($panel_array['id']);
    $wp_customize->add_panel($id, $panel_array);
    $callback($wp_customize, $id);
}
