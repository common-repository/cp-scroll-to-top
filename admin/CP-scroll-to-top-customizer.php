<?php

  //Check if class already exists
  if (!class_exists('CP_ScrollToTop_Plugin_Admin')) {
    class CP_ScrollToTop_Plugin_Admin {

      public static function customizer_settings( $wp_customize ) {
        //Create Scroll to top section --@ start
        $wp_customize->add_section( 'cp_scroll_to_top' , array(
          'title'    => __( 'CakePress - Scroll to top', 'cp' )
        ));
        //Scroll to top background --@ start   
        $wp_customize->add_setting( 'cp_scroll_to_top_bg_color' , array(
            'default'   => '#000000'
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cp_scroll_to_top_bg', array(
            'label'    => __( 'Background color', 'cp' ),
            'section'  => 'cp_scroll_to_top',
            'settings' => 'cp_scroll_to_top_bg_color',
        )));
        //Scroll to top background --@ end

        //Scroll to top font color --@ start   
        $wp_customize->add_setting( 'cp_scroll_to_top_shape_color' , array(
          'default'   => '#ffffff',
          'transport' => 'refresh',
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cp_scroll_to_top_shape_color', array(
            'label'    => __( 'Shape color', 'cp' ),
            'section'  => 'cp_scroll_to_top',
            'settings' => 'cp_scroll_to_top_shape_color',
        )));
        //Scroll to top font color --@ end

        //Scroll to top opacity --@ start
        $wp_customize->add_setting( 'cp_scroll_to_top_opacity', array(
          'default' => '0.5'
        ));
        $wp_customize->add_control( 'cp_scroll_to_top_opacity', array(
          'label'    =>  __( 'Opacity (0 - 1)', 'cp' ),
          'section'  => 'cp_scroll_to_top',
          'type'     => 'text'
        ));
        //Scroll to top opacity --@ end

        //Scroll to top position --@ start
        $wp_customize->add_setting( 'cp_scroll_to_top_position', array(
          'default' => 'right:0;margin-right:20px;'
        ));
        $wp_customize->add_control( 'cp_scroll_to_top_position', array(
          'label'    =>  __( 'Position', 'cp' ),
          'section'  => 'cp_scroll_to_top',
          'type'     => 'radio',
          'choices' => array(
            'left:0;right:initial;' => __( 'Bottom left' ),
            'right:0;' => __( 'Bottom right' ),
            'left:0;right:0;margin-right:auto !important;margin-left:auto !important;' => __( 'Bottom center' )
          ),
        ));
        //Scroll to top position --@ end

        //Scroll to top margin left/right--@ start
        $wp_customize->add_setting( 'cp_scroll_to_top_margin', array(
          'default' => '20'
        ));
        $wp_customize->add_control( 'cp_scroll_to_top_margin', array(
          'label'    =>  __( 'Margin left or right (px)', 'cp' ),
          'section'  => 'cp_scroll_to_top',
          'type'     => 'text'
        ));
        //Scroll to top margin left/right --@ end

        //Scroll to top margin bottom--@ start
        $wp_customize->add_setting( 'cp_scroll_to_top_margin_bottom', array(
          'default' => '0'
        ));
        $wp_customize->add_control( 'cp_scroll_to_top_margin_bottom', array(
          'label'    =>  __( 'Margin bottom (px)', 'cp' ),
          'section'  => 'cp_scroll_to_top',
          'type'     => 'text'
        ));
        //Scroll to top margin bottom --@ end

        //Scroll to top shape --@ start
        $wp_customize->add_setting( 'cp_scroll_to_top_shape', array(
          'default' => 'border-radius:0;'
        ));
        $wp_customize->add_control( 'cp_scroll_to_top_shape', array(
          'label'    =>  __( 'Shape', 'cp' ),
          'section'  => 'cp_scroll_to_top',
          'type'     => 'radio',
          'choices' => array(
            'border-radius:50%;' => __( 'Circle' ),
            'border-radius:0;' => __( 'Square' )
          ),
        ));
        //Scroll to top shape --@ end

        //Scroll to top hide --@ start
        $wp_customize->add_setting( 'cp_scroll_to_top_hide', array(
          'default' => 'visible !important',
          'transport' => 'refresh',
        ));
        $wp_customize->add_control( 'cp_scroll_to_top_hide', array(
          'label'    =>  __( 'Hide on phones?', 'cp' ),
          'section'  => 'cp_scroll_to_top',
          'type'     => 'select',
          'choices' => array(
            'hidden !important' => __( 'True' ),
            'visible !important' => __( 'False' )
          ),
        ));
        //Scroll to top hide --@ end

        //Scroll to top margin bottom--@ start
        $wp_customize->add_setting( 'cp_scroll_to_top_icon_size', array(
          'default' => '16',
          'transport' => 'refresh',
        ));
        $wp_customize->add_control( 'cp_scroll_to_top_icon_size', array(
          'label'    =>  __( 'Icon size (px)', 'cp' ),
          'section'  => 'cp_scroll_to_top',
          'type'     => 'text'
        ));
        //Scroll to top margin bottom --@ end

        //Scroll to top scroll speed--@ start
        $wp_customize->add_setting( 'cp_scroll_to_top_speed', array(
          'default' => '500'
        ));
        $wp_customize->add_control( 'cp_scroll_to_top_speed', array(
          'label'    =>  __( 'Animation speed (ms)', 'cp' ),
          'section'  => 'cp_scroll_to_top',
          'type'     => 'text'
        ));
        //Scroll to top scroll speed --@ end

        //Scroll to top scroll offset--@ start
        $wp_customize->add_setting( 'cp_scroll_to_top_offset', array(
          'default' => '250'
        ));
        $wp_customize->add_control( 'cp_scroll_to_top_offset', array(
          'label'    =>  __( 'Top offset', 'cp' ),
          'description' => 'This is how far the user must scroll before the button appears (pixels).',
          'section'  => 'cp_scroll_to_top',
          'type'     => 'text'
        ));
        //Scroll to top scroll offset --@ end

        //Scroll to top custom image --@ start
        $wp_customize->add_setting( 'cp_scroll_to_top_logo', array(
          'default' => ''
        ));
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cp_scroll_to_top_logo', array(
            'label'    => __( 'Upload custom image', 'cp' ),
            'description' => 'Uploading a custom image will remove some other settings. <br>Recommended Size: 128 x 128 pixels' ,
            'section'  => 'cp_scroll_to_top',
            'settings' => 'cp_scroll_to_top_logo',
        )));
        //Scroll to top custom image --@ end

        //Scroll to top title --@ start
        $wp_customize->add_setting( 'cp_scroll_to_top_title', array(
          'default' => 'Scroll to top'
        ));
        $wp_customize->add_control( 'cp_scroll_to_top_title', array(
          'label'    =>  __( 'Hover title text', 'cp' ),
          'section'  => 'cp_scroll_to_top',
          'type'     => 'text'
        ));
        //Scroll to top title --@ end

        //Create Scroll to top section --@ end
      }
      
      public static function init_css() {
        ?>
          <style type="text/css">
              .scroll-to-top { 
                background-color: <?php echo get_theme_mod('cp_scroll_to_top_bg_color', '#000000'); ?>;
                color: <?php echo get_theme_mod('cp_scroll_to_top_shape_color', '#ffffff'); ?>; 
                <?php echo get_theme_mod('cp_scroll_to_top_position','right:0;margin-right:20px;'); ?>;
                opacity: <?php echo get_theme_mod('cp_scroll_to_top_opacity', '0.5'); ?>; 
                margin-left: <?php echo get_theme_mod('cp_scroll_to_top_margin', '20'); ?>px;
                margin-right: <?php echo get_theme_mod('cp_scroll_to_top_margin', '20'); ?>px;
                <?php echo get_theme_mod('cp_scroll_to_top_shape','border-radius:0;'); ?>;
                margin-bottom: <?php echo get_theme_mod('cp_scroll_to_top_margin_bottom', '0'); ?>px;
                font-size: <?php echo get_theme_mod('cp_scroll_to_top_icon_size', '16'); ?>px;
              }
              @media only screen and (max-width: 500px) {
                .scroll-to-top {
                    visibility: <?php echo get_theme_mod('cp_scroll_to_top_hide', 'visible !important'); ?>;
                }
              }
          </style>
        <?php
      }
    }
  }

  add_action('customize_register', array('CP_ScrollToTop_Plugin_Admin','customizer_settings' ) );
  add_action('wp_head', array('CP_ScrollToTop_Plugin_Admin','init_css' ) );

?>