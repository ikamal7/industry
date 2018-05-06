<?php 
require get_template_directory() . '/inc/cs-framework/cs-framework.php';


function industry_metabox($options){

	$options      = array();

	$options[] = array(
		'id'			=>	'slider_metabox',
		'title'			=>	'Slider Options',
		'post_type'		=>	'slide',
		'context'		=>	'normal',
		'priority'		=>	'default',
		'sections'		=>	array(
			array(
				'name'	=>	'slider_metabox_options',
				'fields'=>	array(
					array(
						'id'	=> 'width',
						'type'	=>	'select',
						'title'	=>	'Slide text width',
						 'options'=> array(
						    'col-md-4'    => '4 Columns',
						    'col-md-5'    => '5 Columns',
						    'col-md-6'    => '6 Columns',
						    'col-md-7'    => '7 Columns',
						    'col-md-8'    => '8 Columns',
						    'col-md-9'    => '9 Columns',
						    'col-md-10'    => '10 Columns',
						    'col-md-11'    => '11 Columns',
						    'col-md-12'    => '12 Columns',
						),
						 'default'			=> 'col-md-6',
					),
					array(
						'id'	=> 'offset',
						'type'	=>	'select',
						'title'	=>	'Slide text offset',
						 'options'=> array(
						    'no-offset'    => 'No offset',
						    'col-md-offset-1'    => '1 Column',
						    'col-md-offset-2'    => '2 Columns',
						    'col-md-offset-3'    => '3 Columns',
						    'col-md-offset-4'    => '4 Columns',
						    'col-md-offset-5'    => '5 Columns',
						    'col-md-offset-6'    => '6 Columns',
						    'col-md-offset-7'    => '7 Columns',
						    'col-md-offset-8'    => '8 Columns',
						),
						 'default'			=> 'no-offset',
					),
					array(
						'id'	=> 'align',
						'type'	=>	'select',
						'title'	=>	'Slide text Align',
						 'options'=> array(
						    'left'    => 'Left',
						    'right'    => 'Right',
						    'center'    => 'Center',
						),
						 'default'			=> 'left',
					),
					array(
						'id'	=> 'slider_text_color',
						'type'	=>	'color_picker',
						'title'	=>	'Select Text color'
					),
					array(
						'id'	=> 'overlay_enable',
						'type'	=>	'switcher',
						'title'	=>	'Overlay Enable',
          				'label' => 'Yes, Please do it.',
					),
					array(
						'id'	=> 'overlay_color',
						'type'	=>	'color_picker',
						'title'	=>	'Select Overlay color',
						'default'=> '#333'
					),
					array(
						'id'	=> 'overlay_opacity',
						'type'	=>	'number',
						'title'	=>	'Overlay Opacity',
						'desc'	=>	'Type a number, it will be % and limit 1 - max 99%',
						'default'=> '70',
			          	'after' => '%',
						'dependency'=> array('overlay_enable', '==', 'true')
					),
					/*
					array(
						'id'	=> 'button_enable',
						'type'	=>	'switcher',
						'title'	=>	'Button Enable',
          				'label' => 'Yes, Please do it.',
					),
					array(
						'id'	=> 'select_btn',
						'type'	=>	'select',
						'title'	=>	'Select Link',
						 'options'=> array(
						    'page_link'    => 'Page Link',
						    'custom_link'  => 'Custom link',
						),
						 'default'			=> array('page_link'),
						'dependency'=> array('button_enable', '==', 'true')
					),
					array(
						'id'	=> 'btn_link_page',
						'type'	=>	'select',
						'title'	=>	'Select page',
						 'options'=> 'pages',
						'dependency'=> array(
                        	'select_btn|button_enable', '==|==', 'page_link|true'
                        )
					),
					array(
						'id'	=> 'btn_link_url',
						'type'	=>	'text',
						'title'	=>	'Custom URL',
						'dependency'=> array(
                        	'select_btn|button_enable', '==|==', 'custom_link|true'
                        )
					),*/
				),
			),
		),
	);

		$options[] = array(
		'id'			=>	'industry_page_meta',
		'title'			=>	'Page Options',
		'post_type'		=>	'page',
		'context'		=>	'normal',
		'priority'		=>	'high',
		'sections'		=>	array(
			array(
				'name'	=>	'industry_page_meta_options',
				'fields'=>	array(
					array(
						'id'	=> 'header_style',
						'type'	=>	'select',
						'title'	=>	'Select header',
						 'options'=> array(
						    '1'    => 'Header 1',
						    '2'    => 'Header 2',
						),
						 'default'		=> '1',
				),
					array(
						'id'	=> 'enable_title',
						'type'	=>	'switcher',
						'title'	=>	'Enable Page title',
						'default'	=>	true,
					),
					array(
						'id'	=> 'custom_page_title',
						'type'	=>	'textarea',
						'title'	=>	'Custom page title',
						'dependency'=> array(
                        	'enable_title', '==', 'true'
                        )
					),
					array(
						'id'	=> 'text_align',
						'type'	=>	'select',
						'title'	=>	'Text Align',
						 'options'=> array(
						    'text-center'    => 'Center',
						    'text-left'    => 'Left',
						    'text-right'    => 'Right',
						),
						 'default'		=> 'text-left',
						'dependency'=> array(
                        	'enable_title', '==', 'true'
                        )
				),
			),
		),
	),
);

	return $options;
}
add_filter( 'cs_metabox_options', 'industry_metabox' );


function industry_theme_options( $options ) {

  $options      = array(); // remove old options

  $options[]    = array(
    'name'      => 'header_options',
    'title'     => 'Header Setting',
    'icon'      => 'fa fa-header',
    'fields'    => array(
     	array(
	        'id'    => 'logo_text',
	        'type'  => 'text',
	        'title' => 'Logo Text',
      ),
		array(
			'id'              => 'header_1_links',
			'type'            => 'group',
			'title'           => 'Header 1 Links',
			'button_title'    => 'Add New',
			'accordion_title' => 'Add New Links',
			'fields'          => array(
				array(
					'id'    => 'link_text',
					'type'  => 'text',
					'title' => 'Link Text',
				),
				array(
					'id'    => 'link',
					'type'  => 'text',
					'title' => 'Link',
				),
				array(
					'id'    => 'bg_color',
					'type'  => 'color_picker',
					'title' => 'Background Color',
					'default'=> '#46BE25'
				),
				array(
					'id'    => 'text_color',
					'type'  => 'color_picker',
					'title' => 'Text Color',
					'default'=> '#ffffff'
				),
				array(
					'id'    => 'target',
					'type'  => 'select',
					'title' => 'Link open in',
					'options'=> array(
						'_self'	=> 'Same Tab',
						'_blank'	=> 'New Tab',
					)
				),
			),
		),
		array(
			'id'              => 'header_2_links',
			'type'            => 'group',
			'title'           => 'Header 2 Links',
			'button_title'    => 'Add New',
			'accordion_title' => 'Add New Links',
			'fields'          => array(
				array(
					'id'    => 'link_text',
					'type'  => 'text',
					'title' => 'Link Text',
				),
				array(
					'id'    => 'link',
					'type'  => 'text',
					'title' => 'Link',
				),
				array(
					'id'    => 'icon',
					'type'  => 'icon',
					'title' => 'Choose a icon',
				),
				array(
					'id'    => 'bg_color',
					'type'  => 'color_picker',
					'title' => 'Background Color',
					'default'=> '#46BE25'
				),
				array(
					'id'    => 'text_color',
					'type'  => 'color_picker',
					'title' => 'Text Color',
					'default'=> '#ffffff'
				),
				array(
					'id'    => 'target',
					'type'  => 'select',
					'title' => 'Link open in',
					'options'=> array(
						'_self'	=> 'Same Tab',
						'_blank'	=> 'New Tab',
					)
				),
			),
		),
    ), 
    ); //end the section
    $options[]    = array(
    'name'      => 'social_links',
    'title'     => 'Social Link',
    'icon'      => 'fa fa-facebook',
    'fields'    => array(
		array(
			'id'              => 'socials',
			'type'            => 'group',
			'title'           => 'Social Link',
			'button_title'    => 'Add New',
			'accordion_title' => 'Add New Links',
			'fields'          => array(
				array(
					'id'    => 'social_icon',
					'type'  => 'icon',
					'title' => 'Select Icon',
				),
				array(
					'id'    => 'link',
					'type'  => 'text',
					'title' => 'Link',
				),
			), 
		),
	),
);

  $options[]    = array(
    'name'      => 'typography_options',
    'title'     => 'Typography Setting',
    'icon'      => 'fa fa-font',
    'fields'    => array(
      array(
        'id'    => 'body_font',
        'type'  => 'typography',
        'title' => 'Typography',
        'default'=> array(
        	'family'	=> 'Montserrat',
        	'variant'	=> '300'
        )
      ),
      array(
        'id'    => 'body_font_variants',
        'type'  => 'checkbox',
        'title' => 'Select font Weight',
        'default' => array('300', 'regular', '500', '600', '700'),
        'options'=> array(
        	'300'	=> '300',
        	'300i'	=> '300 italic',
        	'400'	=> '400 regular',
        	'500'	=> '500',
        	'500i'	=> '500 italic',
        	'600'	=> '600',
        	'600i'	=> '600 italic',
        	'700'	=> '700',
        	'700i'	=> '700 italic',
        	'800'	=> '800',
        	'800i'	=> '800 italic',
        	'900'	=> '900',
        	'900i'	=> '900 italic',
        )
      ),
      array(
        'id'    => 'body_font_size',
        'type'  => 'text',
        'title' => 'Body font size',
        'default'=> '14px'
      ),
      array(
        'id'    => 'heading_font_enable',
        'type'  => 'switcher',
        'title' => 'Different Heading font?',
        'default'=> 'false'
      ),
      array(
        'id'    => 'heading_font',
        'type'  => 'typography',
        'title' => 'Typography',
        'default'=> array(
        	'family'	=> 'Montserrat',
        	'variant'	=> '300'
        ),
        'dependency'	=> array('heading_font_enable', '==', 'true')
      ),
      array(
        'id'    => 'heading_font_variants',
        'type'  => 'checkbox',
        'title' => 'Select font Weight',
        'default' => array('300', 'regular', '500', '600', '700'),
        'options'=> array(
        	'300'	=> '300',
        	'300i'	=> '300 italic',
        	'400'	=> '400 regular',
        	'500'	=> '500',
        	'500i'	=> '500 italic',
        	'600'	=> '600',
        	'600i'	=> '600 italic',
        	'700'	=> '700',
        	'700i'	=> '700 italic',
        	'800'	=> '800',
        	'800i'	=> '800 italic',
        	'900'	=> '900',
        	'900i'	=> '900 italic',
        ),
        'dependency'	=> array('heading_font_enable', '==', 'true')
      ),
    )
  ); //end

  $options[]    = array(
    'name'      => 'styling',
    'title'     => 'Styling Setting',
    'icon'      => 'fa fa-paint-brush',
    'fields'    => array(
      array(
        'id'    => 'pri_color',
        'type'  => 'color_picker',
        'title' => 'Primary color',
        'default'=> '#2E3539'
      ),
      array(
        'id'    => 'sec_color',
        'type'  => 'color_picker',
        'title' => 'Secondary color',
        'default'=> '#46BE25'
      ),
      array(
        'id'    => 'main_menu_bg',
        'type'  => 'color_picker',
        'title' => 'Main menu background color',
        'default'=> '#2E3539'
      ),
      array(
        'id'    => 'dropdown_bg',
        'type'  => 'color_picker',
        'title' => 'Main menu Dropdown background color',
        'default'=> '#2E3539'
      ),
      array(
        'id'    => 'dropdown_bg_hover',
        'type'  => 'color_picker',
        'title' => 'Main menu Dropdown Hover background color',
        'default'=> '#46BE25'
      ),
      array(
        'id'    => 'menu_text',
        'type'  => 'color_picker',
        'title' => 'Main menu Text color',
        'default'=> '#ffffff'
      ),
      array(
        'id'    => 'menu_text_hover',
        'type'  => 'color_picker',
        'title' => 'Main menu Hover Text color',
        'default'=> '#46BE25'
      ),
      array(
        'id'    => 'dropdown_text_hover',
        'type'  => 'color_picker',
        'title' => 'Dropdown menu Hover Text color',
        'default'=> '#ffffff'
      ),
      array(
        'id'    => 'btn_color',
        'type'  => 'color_picker',
        'title' => 'Button color',
        'default'=> '#F3C932'
      ),
    )
  ); //end
  $options[]    = array(
    'name'      => 'blog_setting',
    'title'     => 'Blog Setting',
    'icon'      => 'fa fa-pencil',
    'fields'    => array(
      array(
        'id'    => 'author_name',
        'type'  => 'switcher',
        'title' => 'Enable author name?',
        'default'=> 'true'
      ),
      array(
        'id'    => 'blog_date',
        'type'  => 'switcher',
        'title' => 'Enable author date?',
        'default'=> 'true'
      ),
    )
  ); //end

  return $options;

}
add_filter( 'cs_framework_options', 'industry_theme_options' );