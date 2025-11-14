<?php
function growmark_register_menus() {
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'growmark'),
    ));
}
add_action('init', 'growmark_register_menus');
//2️⃣ Remove <ul> and <li> tags, add <a> links directly
function growmark_wp_nav_menu_no_ul($menu, $args) {
    // Remove all <ul>, <li>, and replace <a> tags only
    $menu = preg_replace('/<ul[^>]*>/', '', $menu);  // remove opening <ul>
    $menu = str_replace('</ul>', '', $menu);         // remove closing </ul>
    $menu = preg_replace('/<li[^>]*>/', '', $menu);  // remove opening <li>
    $menu = str_replace('</li>', '', $menu);         // remove closing </li>
    return $menu;
}
add_filter('wp_nav_menu', 'growmark_wp_nav_menu_no_ul', 10, 2);

// Add class to <a> tags in menu
function growmark_add_menu_link_class($atts, $item, $args) {
    if (isset($args->link_class)) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'growmark_add_menu_link_class', 10, 3);
// Custom Bootstrap Menu Walker for <div><a> structure
class Growmark_Bootstrap_Walker extends Walker_Nav_Menu {
    // Start Level (Dropdown Wrapper)
    function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">';
    }

    // End Level
    function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= '</div>';
    }

    // Start Element (Menu Item)
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? [] : (array) $item->classes;
        $is_dropdown = in_array('menu-item-has-children', $classes);
        $active = in_array('current-menu-item', $classes) ? 'active' : '';

        if ($is_dropdown && $depth === 0) {
            $output .= '<div class="nav-item dropdown">';
            $output .= '<a href="' . esc_url($item->url) . '" class="nav-link dropdown-toggle ' . $active . '" data-bs-toggle="dropdown">' . esc_html($item->title) . '</a>';
        } elseif ($depth > 0) {
            $output .= '<a href="' . esc_url($item->url) . '" class="dropdown-item ' . $active . '">' . esc_html($item->title) . '</a>';
        } else {
            $output .= '<a href="' . esc_url($item->url) . '" class="nav-item nav-link ' . $active . '">' . esc_html($item->title) . '</a>';
        }
    }

    // End Element
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $classes = empty($item->classes) ? [] : (array) $item->classes;
        $is_dropdown = in_array('menu-item-has-children', $classes);
        if ($is_dropdown && $depth === 0) {
            $output .= '</div>'; // close dropdown wrapper
        }
    }
}

?>


