<?php  


/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */
function industry_custom_css() {
	wp_enqueue_style( 'industry_custom', get_template_directory_uri(). '/assets/css/custom.css' );
	$body_font = cs_get_option('body_font');
	$body_font_variant = $body_font['variant'];
	$body_font_size = cs_get_option('body_font_size');

	$heading_font_enable = cs_get_option('heading_font_enable');
	$heading_font = cs_get_option('heading_font');
	$heading_font_variant = $heading_font['variant'];

	//menu color
	$main_menu_bg = cs_get_option('main_menu_bg');
	$dropdown_bg = cs_get_option('dropdown_bg');
	$dropdown_bg_hover = cs_get_option('dropdown_bg_hover');
	$menu_text = cs_get_option('menu_text');
	$menu_text_hover = cs_get_option('menu_text_hover');
	$dropdown_text_hover = cs_get_option('dropdown_text_hover');

	if(!empty($body_font)){
		$body_font_family = $body_font['family'];
	}else{
		$body_font_family = 'Montserrat';
	}
	if(!empty($heading_font)){
		$heading_font_family = $heading_font['family'];
	}else{
		$heading_font_family = 'Montserrat';
	}

	$custom_css = '';
	$custom_css .= '
			body{ 
				font-family: '. esc_html( $body_font_family) .'; 
				font-weight: '. esc_html( $body_font_variant) .'; 
				font-size: '. esc_html( $body_font_size) .';
			}
	';
	if($heading_font_enable == true){
		$custom_css .= 'h1, h2, h3, h4, h5, h6 {
			font-family: '. esc_html( $heading_font_family) .'; 
			font-weight: '. esc_html( $heading_font_variant) .'; 
		}';
	}


	$custom_css = '
		.header-bottom-area {
		    background-color: '.esc_attr( $main_menu_bg ).';
		}
		.header-bottom-area li a{
			color: '.esc_attr( $menu_text ).';
		}
		.header-bottom-area li:hover > a {
		    color: '.esc_attr( $menu_text_hover ).';
		}
		.header-bottom-area li ul {
		    background-color: '.esc_attr( $dropdown_bg ).';
		}
		.header-bottom-area li li:hover > a {
		    background-color: '.esc_attr( $dropdown_bg_hover ).';
		    color: '.esc_attr( $dropdown_text_hover ).';
		}
	';

	wp_add_inline_style( 'industry_custom', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'industry_custom_css' );
