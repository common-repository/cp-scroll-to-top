<?php
   /*
   Plugin Name: CakePress Scroll to top
   Description: The most comprehensive scroll-to-top plugin in the universe. Filled with useful features, every aspect can tweaked or customized from within the Customizer. This includes custom images.
   Version: 1.0
   Author: CakePress
   Author URI: http://cakepress.io/
   License: A Plugin that works with the Google Map iframes.
            Copyright 2017 Jordan QUartermain - info@jqwebdev.com
            This program is free software: you can redistribute it and/or modify
            it under the terms of the GNU General Public License as published by
            the Free Software Foundation, either version 3 of the License, or
            (at your option) any later version.
            This program is distributed in the hope that it will be useful,
            but WITHOUT ANY WARRANTY; without even the implied warranty of
            MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
            GNU General Public License for more details.
            You should have received a copy of the GNU General Public License
            along with this program.  If not, see http://www.gnu.org/licenses/gpl-3.0.html.
   */

  //Check if class already exists
  if (!class_exists('CP_ScrollToTop_Plugin')) {
    class CP_ScrollToTop_Plugin {
      public static function init() {
        wp_enqueue_style(
          'CP-smooth-scroll-to-top-style', 
          plugin_dir_url(__FILE__) . 'public/css/CP-scroll-to-top.css'
        );  
        wp_enqueue_script(
          'CP-smooth-scroll-to-top-script', 
          plugin_dir_url(__FILE__) . 'public/js/CP-scroll-to-top.js', 
          array('jquery')
        );
      }
      public static function create_button() {
        $title = get_theme_mod('cp_scroll_to_top_title', 'Scroll to top');
        $content = "";
        $speed = get_theme_mod('cp_scroll_to_top_speed', '500');
        $offset = get_theme_mod('cp_scroll_to_top_offset', '250');
        if( get_theme_mod('cp_scroll_to_top_logo') ) {
          $logo = get_theme_mod('cp_scroll_to_top_logo');
          $content = "<a href='#' title='".$title."'><span class='cpsr'>".$title."</span><div class='scroll-to-top' data-speed='".$speed."' data-offset='".$offset."' style='display:none;background:transparent;width:50px;height:50px;' title='".$title."'><img src='".$logo."'></div></a>";
        }
        else {
          $content = "<a href='#' title='".$title."'><span class='cpsr'>".$title."</span><div class='scroll-to-top' data-speed='".$speed."' data-offset='".$offset."' style='display:none;' title='".$title."'>&#x25B2;</div></a>";
        }
        echo $content;
      }
    }
    add_action('wp_enqueue_scripts', array('CP_ScrollToTop_Plugin','init' ) );
    add_action('wp_footer', array('CP_ScrollToTop_Plugin','create_button' ) );
  }

  //Include the customizer controls
  include_once("admin/CP-scroll-to-top-customizer.php");

?>