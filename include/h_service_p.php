<?php

//Customization of Services Area Panel
    
$arg->add_panel('services', array(
    'title' => 'Main Service Area',
    'description' => 'Select any one',
    'priority' => 105,
));
// Service section 1
$arg->add_section('service_1', array(
    'title' => 'First Service',
    'description' => 'Here you can change the title and tag of the First Service.',
    'priority' => 2,
    'panel' => 'services',
));
// Service section 2
$arg->add_section('service_2', array(
    'title' => 'Second Service',
    'description' => 'Here you can change the title and tag of the Second Service.',
    'priority' => 3,
    'panel' => 'services',
));
// Service section 3
$arg->add_section('service_3', array(
    'title' => 'Third Service',
    'description' => 'Here you can change the title and tag of the Third Service.',
    'priority' => 4,
    'panel' => 'services',
));



// Sitting and controls of Service section 1

// dynamic heading
$arg->add_setting('service_1_heading', array(
    'default' => 'SEO Consultancy',
    'type' => 'theme_mod'
));
$arg->add_control('service_1_heading', array(
    'label' => 'Main Heading',
    'section' => 'service_1',
    'type' => 'text',
    'priority' => 3,
));
// dynamic Description
$arg->add_setting('sa_1_des', array(
    'default' => 'We help you define your SEO objective & develop a realistic strategy with you',
    'type' => 'theme_mod'
));
$arg->add_control('sa_1_des', array(
    'label' => 'Main Text',
    'type' => 'textarea',
    'section' => 'service_1',
    'priority' => 4,
));
// dynamic button text
$arg->add_setting('sa_1_btn_text', array(
    'default' => 'Read More',
    'type' => 'theme_mod'
));
$arg->add_control('sa_1_btn_text', array(
    'label' => 'Button Title',
    'section' => 'service_1',
    'priority' => 5,
));
    // dynamic button link
$arg->add_setting('sa_1_btn_link', array(
    'default' => 'blog',
    'type' => 'theme_mod'
));
$arg->add_control('sa_1_btn_link', array(
    'label' => 'Button Link',
    'section' => 'service_1',
    'priority' => 6,
));



// Sitting and controls of Service section 2
$arg->add_setting('service_2_heading', array(
    'default' => 'Content Marketing',
    'type' => 'theme_mod'
));
$arg->add_control('service_2_heading', array(
    'label' => 'Main Heading',
    'section' => 'service_2',
    'type' => 'text',
    'priority' => 3,
));
// dynamic Description
$arg->add_setting('sa_2_des', array(
    'default' => 'We help you define your SEO objective & develop a realistic strategy with you',
    'type' => 'theme_mod'
));
$arg->add_control('sa_2_des', array(
    'label' => 'Main Text',
    'type' => 'textarea',
    'section' => 'service_2',
    'priority' => 4,
));
// dynamic button text
$arg->add_setting('sa_2_btn_text', array(
    'default' => 'Read More',
    'type' => 'theme_mod'
));
$arg->add_control('sa_2_btn_text', array(
    'label' => 'Button Title',
    'section' => 'service_2',
    'priority' => 5,
));
    // dynamic button link
$arg->add_setting('sa_2_btn_link', array(
    'default' => 'blog',
    'type' => 'theme_mod'
));
$arg->add_control('sa_2_btn_link', array(
    'label' => 'Button Link',
    'section' => 'service_2',
    'priority' => 6,
));



// Sitting and controls of Service section 3
$arg->add_setting('service_3_heading', array(
    'default' => 'Keyword Research',
    'type' => 'theme_mod'
));
$arg->add_control('service_3_heading', array(
    'label' => 'Main Heading',
    'section' => 'service_3',
    'type' => 'text',
    'priority' => 3,
));

// dynamic Description
$arg->add_setting('sa_3_des', array(
    'default' => 'We help you define your SEO objective & develop a realistic strategy with you',
    'type' => 'theme_mod'
));
$arg->add_control('sa_3_des', array(
    'label' => 'Main Text',
    'section' => 'service_3',
    'priority' => 4,
));
// dynamic button text
$arg->add_setting('sa_3_btn_text', array(
    'default' => 'Read More',
    'type' => 'theme_mod'
));
$arg->add_control('sa_3_btn_text', array(
    'label' => 'Button Title',
    'section' => 'service_3',
    'priority' => 5,
));
    // dynamic button link
$arg->add_setting('sa_3_btn_link', array(
    'default' => 'blog',
    'type' => 'theme_mod'
));
$arg->add_control('sa_3_btn_link', array(
    'label' => 'Button Link',
    'section' => 'service_3',
    'priority' => 6,
));


?>