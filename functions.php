<?php
    add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
    add_action('customize_preview_init', 'theme_preview_register');
    add_action('customize_preview_init', 'theme_preview_register');
    add_action('after_setup_theme', 'add_features');
    add_action('after_setup_theme', 'add_menu');
    add_theme_support('custom-logo');

    function add_scripts_and_styles() {
      wp_deregister_script('jquery');
      wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', false, null, true);
      wp_enqueue_script('jquery');
      wp_enqueue_script('swiper-script', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', false, null, 'footer');
      wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'swiper-script'), null, 'footer');

      wp_enqueue_style('fontello', get_template_directory_uri() . '/assets/css/fontello.css');
      wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
      wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
      wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
      wp_enqueue_style('main', get_stylesheet_uri(), array('fontello', 'fonts','font-awesome', 'swiper-style'));
  }
  function theme_preview_register() {
    wp_enqueue_script('customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('jquery'), null, 'footer');
  }

  define( 'CUSTOMIZER_REPEATER_VERSION', '1.1.0' );
  require get_template_directory() . '/customizer-repeater/inc/customizer.php';
 

  function add_features(){
    add_theme_support('custom-logo', [
      'height'  => 50,
      'width'   => 100,
    ]);
  }

  function add_menu(){
    register_nav_menu('top', 'Головне меню');
    register_nav_menu('bottom', 'Нижнє меню');
  }

// customizer
  function testsite_customize_register ($wp_customize){

// додаємо панель
$wp_customize->add_panel( 'custom_settings', array(
  'title' => __('Home Page Settings', 'testsite'),
  'priority' => 1
 ) );
// тест
// Cекція заголовку
// колір кнопки
    $wp_customize->add_section('header_section', array(
      'title' => __('Header Section', 'testsite'),
      'priority' => 1,
      'panel' => 'custom_settings'
    ));

      // фон кнопки
      $wp_customize->add_setting('button_bg', array(
        'dafult'=> '#fff',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color'  
      ));
      $wp_customize->add_control (new WP_Customize_Color_Control($wp_customize,
      'button_background',array(
        'label' => __("Button background color", 'testsite'),
        'section' => 'header_section',
        'settings' => 'button_bg',
        'priority' => 6
      )));

// колір тексту кнопки
$wp_customize->add_setting('color_button_text', array(
  'dafult'=> '#000',
  'transport' => 'postMessage',
  'sanitize_callback' => 'sanitize_hex_color'     
));
  $wp_customize->add_control (new WP_Customize_Color_Control($wp_customize,
  'button_text_color',array(
    'label' => __("Button text color", 'testsite'),
    'section' => 'header_section',
    'settings' => 'color_button_text',
    'priority' => 5
  )));
  // Текст кнопки
      $wp_customize->add_setting('cd_button_text' , array(
        'default'     => 'Button',
        'transport'   => 'postMessage'
      ) );
      $wp_customize->add_control('cd_button_text', array(
        'label' => __('Button text', 'testsite'),
        'section'	=> 'header_section',
        'type'	 => 'text',
        'priority' => 4
      ) );

// TEST

$wp_customize->add_section('test_section', array(
      'title' => __('Text Section', 'testsite'),
      'priority' => 10,
      'panel' => 'custom_settings'
    ));
      $wp_customize->add_setting( 'customizer_repeater_example', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
     ));
     $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'customizer_repeater_example', array(
        'label'   => esc_html__('Example','customizer-repeater'),
        'section' => 'test_section',
        'priority' => 1,
        'customizer_repeater_image_control' => true,
        'customizer_repeater_icon_control' => true,
        'customizer_repeater_title_control' => true,
        'customizer_repeater_subtitle_control' => true,
        'customizer_repeater_text_control' => true,
        'customizer_repeater_link_control' => true,
        'customizer_repeater_shortcode_control' => true,
        'customizer_repeater_repeater_control' => true
        ) ) );






// Текст заголовку
      $wp_customize->add_setting('cd_title_text' , array(
        'default'     => 'Title',
        'transport'   => 'postMessage'
      ) );
      $wp_customize->add_control('cd_title_text', array(
        'label' => __('Title', 'testsite'),
        'section'	=> 'header_section',
        'type'	 => 'text',
        'priority' => 1
      ) );

      // Текст пыдзаголовку
      $wp_customize->add_setting('cd_subtitle_text' , array(
        'default'     => 'Sub Title',
        'transport'   => 'postMessage'
      ) );
      $wp_customize->add_control('cd_subtitle_text', array(
        'label' => __('Sub Title', 'testsite'),
        'section'	=> 'header_section',
        'type'	 => 'text',
        'priority' => 2
      ) );

      // Cекція Про нас
      $wp_customize->add_section('about_section', array(
        'title' => __('About Us Section', 'testsite'),
        'priority' => 1,
        'panel' => 'custom_settings'
      ));

// Додаємо блоки про нас


// Вибираємо скільки блоківпотрібно
$wp_customize->add_setting('how_many_about_us_items', array(
  'default' => "two",
  'transport' => 'refresh'
) );
$wp_customize->add_control( 'how_many_about_us_items', array(
'label' => __('Select the number of items', 'testsite'),
'section' => 'about_section',
'settings' => 'how_many_about_us_items',
'priority' => 2,
'type' => 'select',
'choices'  => array(
  'one' => _x( 'One Item', 'how_many_about_us_items'),
  'two'  => _x( 'Two items', 'how_many_about_us_items'),
  'three'  => _x( 'Three items', 'how_many_about_us_items'),
  'four'  => _x( 'Four items', 'how_many_about_us_items'),
),
) );


// Показуєм/Ховаєм перший блок



// Перший
$wp_customize->add_setting('about_title_text1' , array(
  'default'     => 'About Us Title Item 1',
  'transport'   => 'postMessage'
) );
$wp_customize->add_control('about_title_text1', array(
  'label' => __('About Us Title Item 1', 'testsite'),
  'section'	=> 'about_section',
  'type'	 => 'text',
  'priority' => 2
) );
$wp_customize->add_setting('about_subtitle_text1' , array(
  'default'     => 'About Us Sub-Title Item 1',
  'transport'   => 'postMessage'
) );
$wp_customize->add_control('about_subtitle_text1', array(
  'label' => __('About Us Sub-Title Item 1', 'testsite'),
  'section'	=> 'about_section',
  'type'	 => 'text',
  'priority' => 2
) );


// Другий
$wp_customize->add_setting('about_title_text2' , array(
  'default'     => 'About Us Title Item 2',
  'transport'   => 'postMessage'
) );
$wp_customize->add_control('about_title_text2', array(
  'label' => __('About Us Title Item 2', 'testsite'),
  'section'	=> 'about_section',
  'type'	 => 'text',
  'priority' => 3
) );
$wp_customize->add_setting('about_subtitle_text2' , array(
  'default'     => 'About Us Sub-Title Item 2',
  'transport'   => 'postMessage'
) );
$wp_customize->add_control('about_subtitle_text2', array(
  'label' => __('About Us Sub-Title Item 2', 'testsite'),
  'section'	=> 'about_section',
  'type'	 => 'text',
  'priority' => 3
) );


// Третій
$wp_customize->add_setting('about_title_text3' , array(
  'default'     => 'About Us Title Item 3',
  'transport'   => 'postMessage'
) );
$wp_customize->add_control('about_title_text3', array(
  'label' => __('About Us Title Item 3', 'testsite'),
  'section'	=> 'about_section',
  'type'	 => 'text',
  'priority' => 4
) );
$wp_customize->add_setting('about_subtitle_text3' , array(
  'default'     => 'About Us Sub-Title Item 3',
  'transport'   => 'postMessage'
) );
$wp_customize->add_control('about_subtitle_text3', array(
  'label' => __('About Us Sub-Titl Iteme 3', 'testsite'),
  'section'	=> 'about_section',
  'type'	 => 'text',
  'priority' => 4
) );


// Четвертий
$wp_customize->add_setting('about_title_text4' , array(
  'default'     => 'About Us Title Item 4',
  'transport'   => 'postMessage'
) );
$wp_customize->add_control('about_title_text4', array(
  'label' => __('About Us Title Item 4', 'testsite'),
  'section'	=> 'about_section',
  'type'	 => 'text',
  'priority' => 5
) );
$wp_customize->add_setting('about_subtitle_text4' , array(
  'default'     => 'About Us Sub-Title Item 4',
  'transport'   => 'postMessage'
) );
$wp_customize->add_control('about_subtitle_text4', array(
  'label' => __('About Us Sub-Title Item 4', 'testsite'),
  'section'	=> 'about_section',
  'type'	 => 'text',
  'priority' => 5
) );

// 2 картинки на фон
      $wp_customize->add_setting( 'bg_image_white', array(
				'default'      => '', // по замовчуванню без фону
				'transport'    => 'refresh'
      )
		);
      $wp_customize->add_control(
			new WP_Customize_Image_Control( $wp_customize, 'bg_image_white',array(
				'label'    => 'About Us Background White',
				'settings' => 'bg_image_white',
				'section'  => 'about_section'
       ) )
		);
    $wp_customize->add_setting( 'bg_image_black', array(
      'default'      => '', // по замовчуванню без фону
      'transport'    => 'refresh'
    )
  );
    $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize, 'bg_image_black', array(
      'label'    => 'About Us Background Black',
      'settings' => 'bg_image_black',
      'section'  => 'about_section'
     ) )
  );


// Ховаэм показуємо Секцію Про нас
 $wp_customize->add_setting(
   'about_section_show',
   array(
     'default'           => 'show',
     'transport'         => 'refresh'
   )
 );

 $wp_customize->add_control(
   'about_section_show',
   array(
     'type'     => 'select',
     'label'    => __( 'Show or Hide Section', 'twentynineteen' ),
     'choices'  => array(
       'hide' => _x( 'Hide', 'primary color', 'twentynineteen' ),
       // 'custom'  => _x( 'Custom', 'primary color', 'twentynineteen' ),
       'show'  => _x( 'Show', 'primary color', 'twentynineteen' ),
     ),
     'section'  => 'about_section',
     'priority' => 1
   )
 );





// Cекція Команда
$wp_customize->add_section('team_section', array(
  'title' => __('Team Section', 'testsite'),
  'priority' => 1,
  'panel' => 'custom_settings'
));
$wp_customize->add_setting('team_title' , array(
  'default'     => 'Team Title',
  'transport'   => 'refresh'
) );
$wp_customize->add_control('team_title', array(
  'label' => __('Team Title', 'testsite'),
  'section'	=> 'team_section',
  'type'	 => 'text',
  'priority' => 2
) );
$wp_customize->add_setting('team_subtitle' , array(
  'default'     => 'Team Sub-Title',
  'transport'   => 'refresh'
) );
$wp_customize->add_control('team_subtitle', array(
  'label' => __('Team Sub-Title', 'testsite'),
  'section'	=> 'team_section',
  'type'	 => 'text',
  'priority' => 2
) );

// член команди 1
// фото
$wp_customize->add_setting( 'team_meber_image', array(
  'default'      => '', // по замовчуванню без фону
  'transport'    => 'refresh'
)
);
$wp_customize->add_control(
new WP_Customize_Image_Control( $wp_customize, 'team_meber_image', array(
  'label'    => 'Team Member Img',
  'settings' => 'team_meber_image',
  'section'  => 'team_section',
  'priority' => 3
 ) )
);
// Ім'я
$wp_customize->add_setting('team_member_name' , array(
  'default'     => 'Team Member Name',
  'transport'   => 'refresh'
) );
$wp_customize->add_control('team_member_name', array(
  'label' => __('Team Member Name', 'testsite'),
  'section'	=> 'team_section',
  'type'	 => 'text',
  'priority' => 3
) );
// Позиція
$wp_customize->add_setting('team_member_position' , array(
  'default'     => 'Team Member Position',
  'transport'   => 'refresh'
) );
$wp_customize->add_control('team_member_position', array(
  'label' => __('Team Member position', 'testsite'),
  'section'	=> 'team_section',
  'type'	 => 'text',
  'priority' => 3
) );

// член команди 2
// фото
$wp_customize->add_setting( 'team_meber_image_2', array(
  'default'      => '', // по замовчуванню без фону
  'transport'    => 'refresh'
)
);
$wp_customize->add_control(
new WP_Customize_Image_Control( $wp_customize, 'team_meber_image_2', array(
  'label'    => 'Team Member Img 2',
  'settings' => 'team_meber_image_2',
  'section'  => 'team_section',
  'priority' => 4
 ) )
);
// Ім'я
$wp_customize->add_setting('team_member_name_2' , array(
  'default'     => 'Team Member Name 2',
  'transport'   => 'refresh'
) );
$wp_customize->add_control('team_member_name_2', array(
  'label' => __('Team Member Name 2', 'testsite'),
  'section'	=> 'team_section',
  'type'	 => 'text',
  'priority' => 4
) );
// Позиція
$wp_customize->add_setting('team_member_position_2' , array(
  'default'     => 'Team Member Position 2',
  'transport'   => 'refresh'
) );
$wp_customize->add_control('team_member_position_2', array(
  'label' => __('Team Member position 2', 'testsite'),
  'section'	=> 'team_section',
  'type'	 => 'text',
  'priority' => 4
) );
// член команди 3
// фото
$wp_customize->add_setting( 'team_meber_image_3', array(
  'default'      => '', // по замовчуванню без фону
  'transport'    => 'refresh'
)
);
$wp_customize->add_control(
new WP_Customize_Image_Control( $wp_customize, 'team_meber_image_3', array(
  'label'    => 'Team Member Img 3',
  'settings' => 'team_meber_image_3',
  'section'  => 'team_section',
  'priority' => 5
 ) )
);
// Ім'я
$wp_customize->add_setting('team_member_name_3' , array(
  'default'     => 'Team Member Name 3',
  'transport'   => 'refresh'
) );
$wp_customize->add_control('team_member_name_3', array(
  'label' => __('Team Member Name 3', 'testsite'),
  'section'	=> 'team_section',
  'type'	 => 'text',
  'priority' => 5
) );
// Позиція
$wp_customize->add_setting('team_member_position_3' , array(
  'default'     => 'Team Member Position 3',
  'transport'   => 'refresh'
) );
$wp_customize->add_control('team_member_position_3', array(
  'label' => __('Team Member position 3', 'testsite'),
  'section'	=> 'team_section',
  'type'	 => 'text',
  'priority' => 5
) );

// Ховаэм показуємо Секцію Команда
$wp_customize->add_setting(
  'team_section_show',
  array(
    'default'           => 'show',
    'transport'         => 'refresh'
  )
);

$wp_customize->add_control(
  'team_section_show',
  array(
    'type'     => 'select',
    'label'    => __( 'Show or Hide Section', 'twentynineteen' ),
    'choices'  => array(
      'hide' => _x( 'Hide', 'primary color', 'twentynineteen' ),
      'show'  => _x( 'Show', 'primary color', 'twentynineteen' ),
    ),
    'section'  => 'team_section',
    'priority' => 1
  )
);




// Секція Досягнення
$wp_customize->add_section('provide_section', array(
  'title' => __('Provide Section', 'testsite'),
  'priority' => 1,
  'panel' => 'custom_settings'
));
$wp_customize->add_setting('provide_title' , array(
  'default'     => 'Provide Title',
  'transport'   => 'refresh'
) );
$wp_customize->add_control('provide_title', array(
  'label' => __('Provide Title', 'testsite'),
  'section'	=> 'provide_section',
  'type'	 => 'text',
  'priority' => 2
) );
$wp_customize->add_setting('provide_subtitle' , array(
  'default'     => 'Provide Sub-Title',
  'transport'   => 'refresh'
) );
$wp_customize->add_control('provide_subtitle', array(
  'label' => __('Provide Sub-Title', 'testsite'),
  'section'	=> 'provide_section',
  'type'	 => 'text',
  'priority' => 2
) );
// Досягнення 1
// Картинка
$wp_customize->add_setting( 'provide_image_item_1', array(
  'default'      => '', // по замовчуванню без фону
  'transport'    => 'refresh'
)
);
$wp_customize->add_control(
new WP_Customize_Image_Control( $wp_customize, 'provide_image_item_1', array(
  'label'    => 'Provide Image Item 1',
  'settings' => 'provide_image_item_1',
  'section'  => 'provide_section',
  'priority' => 3
 ) )
);
// Заголовок
$wp_customize->add_setting('provide_title_item_1' , array(
  'default'     => 'Provide Title Item 1',
  'transport'   => 'refresh'
) );
$wp_customize->add_control('provide_title_item_1', array(
  'label' => __('Provide Title Item 1', 'testsite'),
  'section'	=> 'provide_section',
  'type'	 => 'text',
  'priority' => 3
) );
// Підзаголовок
$wp_customize->add_setting('provide_subtitle_item_1' , array(
  'default'     => 'Provide Subtitle Item 1',
  'transport'   => 'refresh'
) );
$wp_customize->add_control('provide_subtitle_item_1', array(
  'label' => __('Provide Subtitle Item 1', 'testsite'),
  'section'	=> 'provide_section',
  'type'	 => 'text',
  'priority' => 3
) );
// Досягнення 2
// Картинка
$wp_customize->add_setting( 'provide_image_item_2', array(
  'default'      => '', // по замовчуванню без фону
  'transport'    => 'refresh'
)
);
$wp_customize->add_control(
new WP_Customize_Image_Control( $wp_customize, 'provide_image_item_2', array(
  'label'    => 'Provide Image Item 2',
  'settings' => 'provide_image_item_2',
  'section'  => 'provide_section',
  'priority' => 4
 ) )
);
// Заголовок
$wp_customize->add_setting('provide_title_item_2' , array(
  'default'     => 'Provide Title Item 2',
  'transport'   => 'refresh'
) );
$wp_customize->add_control('provide_title_item_2', array(
  'label' => __('Provide Title Item 2', 'testsite'),
  'section'	=> 'provide_section',
  'type'	 => 'text',
  'priority' => 4
) );
// Підзаголовок
$wp_customize->add_setting('provide_subtitle_item_2' , array(
  'default'     => 'Provide Subtitle Item 2',
  'transport'   => 'refresh'
) );
$wp_customize->add_control('provide_subtitle_item_2', array(
  'label' => __('Provide Subtitle Item 2', 'testsite'),
  'section'	=> 'provide_section',
  'type'	 => 'text',
  'priority' => 4
) );
// Досягнення 3
// Картинка
$wp_customize->add_setting( 'provide_image_item_3', array(
  'default'      => '', // по замовчуванню без фону
  'transport'    => 'refresh'
)
);
$wp_customize->add_control(
new WP_Customize_Image_Control( $wp_customize, 'provide_image_item_3', array(
  'label'    => 'Provide Image Item 3',
  'settings' => 'provide_image_item_3',
  'section'  => 'provide_section',
  'priority' => 5
 ) )
);
// Заголовок
$wp_customize->add_setting('provide_title_item_3' , array(
  'default'     => 'Provide Title Item 3',
  'transport'   => 'refresh'
) );
$wp_customize->add_control('provide_title_item_3', array(
  'label' => __('Provide Title Item 3', 'testsite'),
  'section'	=> 'provide_section',
  'type'	 => 'text',
  'priority' => 5
) );
// Підзаголовок
$wp_customize->add_setting('provide_subtitle_item_3' , array(
  'default'     => 'Provide Subtitle Item 3',
  'transport'   => 'refresh'
) );
$wp_customize->add_control('provide_subtitle_item_3', array(
  'label' => __('Provide Subtitle Item 3', 'testsite'),
  'section'	=> 'provide_section',
  'type'	 => 'text',
  'priority' => 5
) );

// Ховаєм Секцію Досягнення
$wp_customize->add_setting(
  'provide_section_show',
  array(
    'default'           => 'show',
    'transport'         => 'refresh'
  )
);

$wp_customize->add_control(
  'provide_section_show',
  array(
    'type'     => 'select',
    'label'    => __( 'Show or Hide Section', 'testsite' ),
    'choices'  => array(
      'hide' => _x( 'Hide', 'primary color', 'testsite' ),
      'show'  => _x( 'Show', 'primary color', 'testsite' ),
    ),
    'section'  => 'provide_section',
    'priority' => 1
  )
);



// Секція Контакти
$wp_customize->add_section('contact_section', array(
  'title' => __('Contact Section', 'testsite'),
  'priority' => 1,
  'panel' => 'custom_settings'
));
$wp_customize->add_setting('contact_title' , array(
  'default'     => 'Contact Title',
  'transport'   => 'refresh'
) );
$wp_customize->add_control('contact_title', array(
  'label' => __('Contact Title', 'testsite'),
  'section'	=> 'contact_section',
  'type'	 => 'text',
  'priority' => 1
) );
$wp_customize->add_setting('contact_subtitle' , array(
  'default'     => 'Contact Sub-Title',
  'transport'   => 'refresh'
) );
$wp_customize->add_control('contact_subtitle', array(
  'label' => __('Contact Sub-Title', 'testsite'),
  'section'	=> 'contact_section',
  'type'	 => 'text',
  'priority' => 1
) );
// Телефон
$wp_customize->add_setting('contact_phone' , array(
  'default'     => 'Contact Phone',
  'transport'   => 'refresh',
  'sanitize_callback' => 'absint'
) );
$wp_customize->add_control('contact_phone', array(
  'label' => __('Contact Phone (0630000000)', 'testsite'),
  'section'	=> 'contact_section',
  'type'	 => 'number',
  'priority' => 2
) );
// Місто,вулиця
$wp_customize->add_setting('contact_adress' , array(
  'default'     => 'Contact Adress',
  'transport'   => 'refresh'
) );
$wp_customize->add_control('contact_adress', array(
  'label' => __('Contact Adress', 'testsite'),
  'section'	=> 'contact_section',
  'type'	 => 'text',
  'priority' => 3
) );
// Карта
$wp_customize->add_setting('contact_map' , array(
  'default'     => 'Contact Map',
  'transport'   => 'refresh'
) );
$wp_customize->add_control('contact_map', array(
  'label' => __('Contact Map Url', 'testsite'),
  'section'	=> 'contact_section',
  'type'	 => 'text',
  'priority' => 3
) );
// Поштова скринька
$wp_customize->add_setting('contact_mail' , array(
  'default'     => 'Contact Mail',
  'transport'   => 'refresh'
) );
$wp_customize->add_control('contact_mail', array(
  'label' => __('Contact Mail', 'testsite'),
  'section'	=> 'contact_section',
  'type'	 => 'text',
  'priority' => 4
) );
// Секція Підвал
$wp_customize->add_section('footer_section', array(
  'title' => __('Footer Section', 'testsite'),
  'priority' => 1,
  'panel' => 'custom_settings'
));
// Копірайт
$wp_customize->add_setting('copiright_title' , array(
  'default'     => 'Copiright Title',
  'transport'   => 'postMessage'
) );
$wp_customize->add_control('copiright_title', array(
  'label' => __('Copyright Title', 'testsite'),
  'section'	=> 'footer_section',
  'type'	 => 'text',
  'priority' => 1
) );




}






  add_action('customize_register', 'testsite_customize_register');
  
  function testsite_customize_css() {
    ?>
      <style>
      .header__button{
          background : <?php echo get_theme_mod('button_bg', '#fff');?>;
          color: <?php echo get_theme_mod('color_button_text', '#000');?>;
        }
      </style>
    <?php
  } 

add_action('wp_head' ,'testsite_customize_css');


///////////////////////////////////////////////////////////////////

/**
 * Load dynamic logic for the customizer controls area.
 */
function twentynineteen_panels_js() {
	wp_enqueue_script( 'twentynineteen-customize-controls', get_theme_file_uri( 'assets/js/customize-controls.js' ), array(), '20181214', true );
}
add_action( 'customize_controls_enqueue_scripts', 'twentynineteen_panels_js' );






?>