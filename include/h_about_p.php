<?php

    // About Section of the home page
    
    $arg->add_section('about', array(
        'title' => 'About Section',
        'description' => 'change About Section.',
        'priority' => 106,
    ));

    $arg->add_setting('about_title', array(
        'default' => 'The number #1 SEO Service Company',
        'type' => 'theme_mod'
    ));
    $arg->add_control('about_title', array(
        'label' => __('About Title'),
        'type' => 'text',
        'section' => 'about',
        'priority' => 5,
    ));

    $arg->add_setting('about_des', array(
        'default' => '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>',
        'type' => 'theme_mod'
    ));
    $arg->add_control('about_des', array(
        'label' => __('About Description'),
        'type' => 'textarea',
        'section' => 'about',
        'priority' => 6,
    ));

    // dynamic button text
    $arg->add_setting('about_btn_text', array(
        'default' => 'Read More',
        'type' => 'theme_mod'
    ));
    $arg->add_control('about_btn_text', array(
        'label' => 'Button Text',
        'section' => 'about',
        'priority' => 7,
    ));
    // dynamic button link
    $arg->add_setting('about_btn_link', array(
        'default' => 'about',
        'type' => 'theme_mod'
    ));
    $arg->add_control('about_btn_link', array(
        'label' => 'Button Link',
        'section' => 'about',
        'priority' => 8,
    ));

    // $arg->add_setting('serv', array(
    //     'default' => 'Lets Check and Optimize your website!',
    //     'type' => 'theme_mod'
    // ));
    // $arg->add_control( 'serv', array(
    //     'type' => 'range',
    //     'section' => 'about',
    //     'label' => __( 'Range' ),
    //     'description' => __( 'This is the range control description.' ),
    //     'input_attrs' => array(
    //       'min' => 0,
    //       'max' => 10,
    //       'step' => 2,
    //     ),
    //   ) );
    //   $arg->add_setting('color_control', array(
    //     'default' => 'Lets Check and Optimize your website!',
    //     'type' => 'theme_mod'
    // ));
    //   $arg->add_control( new WP_Customize_Color_Control( $arg, 'color_control', array(
    //     'label' => __( 'Accent Color', 'theme_textdomain' ),
    //     'section' => 'about',
    //   ) ) );

?>