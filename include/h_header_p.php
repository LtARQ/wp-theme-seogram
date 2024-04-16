<?php
 //Customization of Home header
 $arg->add_section('headerdata', array(
    'title' => 'Top Slider',
    'description' => 'Here you can change the title and tag of the site.',
    'priority' => 100
));
// Sitting and controls
$arg->add_setting('top_heading', array(
    'default' => 'Lets Check and Optimize your website!',
    'type' => 'theme_mod'
));
$arg->add_control('top_heading', array(
    'label' => 'Main Heading',
    'section' => 'headerdata',
    'priority' => 3,
));
// dynamic tag Description
$arg->add_setting('top_text', array(
    'default' => 'Ignite the most powerfull growth engine you have ever built for your company',
    'type' => 'theme_mod'
));
$arg->add_control('top_text', array(
    'label' => 'Main Text',
    'section' => 'headerdata',
    'priority' => 4,
));
// dynamic button text
$arg->add_setting('btn_text', array(
    'default' => 'Watch Video',
    'type' => 'theme_mod'
));
$arg->add_control('btn_text', array(
    'label' => 'Button Title',
    'section' => 'headerdata',
    'priority' => 5,
));
    // dynamic button link
$arg->add_setting('btn_link', array(
    'default' => 'blog',
    'type' => 'theme_mod'
));
$arg->add_control('btn_link', array(
    'label' => 'Button Link',
    'section' => 'headerdata',
    'priority' => 6,
));
// dynamic header Background
$arg->add_setting('bg_image', array(
    'default' => '',
    'type' => 'theme_mod'
));
$arg->add_control(new WP_Customize_Image_Control($arg, 'bg_image', array(
    'label' => 'Backgground Image',
    'section' => 'headerdata',
    'priority' => 1,
)));


?>