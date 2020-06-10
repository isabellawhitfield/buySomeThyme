  
<?php

//customize-register to create new Cutomizer panels, settings, controls
function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here


   // Background Colour
   $wp_customize->add_setting( 'buySomeThyme-background-colour' , array(
       'default'   => '#FAF8F0',
       'transport' => 'refresh',
   ) );


   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'kiwanis-background-colour-control', array(
   	'label'      => __( 'Background Colour', 'buySomeThyme-theme' ),
    'description' => 'Change the background Colour',
   	'section'    => 'colors',
   	'settings'   => 'buySomeThyme-background-colour',
   ) ) );

   // Header and Footer background Colour
    $wp_customize->add_setting( 'buySomeThyme-header-footer-colour' , array(
        'default'   => '#043353',
        'transport' => 'refresh',
    ) );


    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'buySomeThyme-header-footer-colour-control', array(
    	'label'      => __( 'Header and Footer Background Colour', 'buySomeThyme-theme' ),
     'description' => 'Change the Header and Footer Background Colour',
    	'section'    => 'colors',
    	'settings'   => 'buySomeThyme-header-footer-colour',
    ) ) );


   // Footer Message
   $wp_customize->add_section( 'buySomeThyme-footer-section' , array(
       'title'      => __( 'Footer Text', 'buySomeThyme-theme' ),
       'priority'   => 30,
   ));

   $wp_customize->add_setting( 'buySomeThyme-footer-section-message' , array(
       'default'   => 'Copyright © Buy Some Thyme NZSP 2020',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'buySomeThyme-footer-section-control', array(
     'label'      => __( 'Footer Text', 'buySomeThyme-theme' ),
     'section'    => 'buySomeThyme-footer-section',
     'settings'   => 'buySomeThyme-footer-section-message',
   ) ) );

   // Site Title Text
   $wp_customize->add_section( 'buySomeThyme-title-text' , array(
       'title'      => __( 'Site Title Text', 'buySomeThyme-theme' ),
       'priority'   => 30,
   ));

   $wp_customize->add_setting( 'buySomeThyme-title-text' , array(
       'default'   => 'buySomeThyme',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'buySomeThyme-title-text-control', array(
     'label'      => __( 'Site Title Text', 'buySomeThyme-theme' ),
     'section'    => 'buySomeThyme-title-text',
     'settings'   => 'buySomeThyme-title-text',
   ) ) );
   }

 add_action( 'customize_register', 'mytheme_customize_register' );


//Hook2: wp_head to output custom-generated CSS
 function mytheme_customize_css()
 {
   ?>
    <style type="text/css">
    body {
            background-color: <?php echo get_theme_mod('buySomeThyme-background-colour','#FAF8F0'); ?>!important;
         }
   .footer, .header-background{
             background-color: <?php echo get_theme_mod('buySomeThyme-header-footer-colour', '#043353'); ?>!important ;
           }


  </style>
<?php
}
add_action( 'wp_head', 'mytheme_customize_css');
