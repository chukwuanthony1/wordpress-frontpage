<?php

class Custom_Menu_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output .= "<li class='" .  implode(" ", $item->classes) . "'>";
        $output .= '<a href="' . $item->url . '">';

        $output .= $item->title;

        $output .= '</a>';

        if ($args->walker->has_children) {
            $output .= '<i class="fa-solid fa-chevron-down"></i>';
        }
    }
}
