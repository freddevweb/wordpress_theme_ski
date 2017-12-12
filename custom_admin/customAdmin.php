<?php
// add scripts from admin
add_action( "admin_enqueue_scripts", "addScripts" );
function addScripts(){

	wp_enqueue_style( 'adminStyles', get_template_directory_uri("./")."/custom_admin/adminStyles.css" );
}

add_action( 'admin_enqueue_scripts', 'load_script' );
function load_script(){
	wp_enqueue_script("jscolor", get_template_directory_uri("./")."/js/jscolor.js");

	wp_enqueue_script( "themecustommedia", get_template_directory_uri("./")."/js/media.js", array( 'jquery' ), true);
}

// admin menu
add_action( "admin_menu", "generate_theme_menu" );

function generate_theme_menu(){

	add_menu_page( 
		"Fred", 
		"Ftheme", 
		"administrator", 
		"fredtheme", 
		"generate_theme_menu_page", 
		"dashicons-welcome-widgets-menus", 
		60 
	);

	add_submenu_page( 
		"fredtheme",
		"template_colors",
		"Colors",
		"administrator",
		"menu_colors", 
		"generateSubMenuColor"
	);

	// add_submenu_page( 
	// 	"fredtheme",
	// 	"template_widget_position",
	// 	"Widget Position",
	// 	"administrator",
	// 	"menu_widget_position", 
	// 	"generateSubMenuWidgetsPosition" 
	// );
	add_submenu_page( 
		"fredtheme",
		"set_background_image",
		"Background image",
		"administrator",
		"background_image", 
		"generateSubMenuBgImg" 
	);
}

function generate_theme_menu_page(){
	include 'pages/accueil.php';
}



function generateSubMenuColor(){
	include 'pages/template_color.php';
}
function generateSubMenuWidgetsPosition(){
	include 'pages/template_widgets_position.php';
}
function generateSubMenuBgImg(){
	include 'pages/set_background.php';
}




function get_custom_styles(){
	
	$customColor = get_option("customColors");

	$style = "<style>";
		
	for( $i=0 ; $i<6; $i++){

		$style .= "h".($i+1)."{ color: #".$customColor["headers"][$i]."}";
	} 
	
	$style .= "p { color: #".$customColor["body"].	"}";
	$style .= "#content { background-color: #".$customColor["background"]."}";
	$style .= "</style>";

	// dd($style);
	echo $style;
	
}


add_action("init", "create_comment_post_type");

function create_comment_post_type(){
	
	
		register_post_type( "comments", [
			"label" 		=> "Comments",
			"labels" 		=> [
				"name" 			=> "Comments",
				"singular_name" => "comments",
				"all_items"		=> "All comments",
				"add_new" => "Add_comment"
			],
			"description" 	=> "Un commentaire",
			"show_in_menu"  => true,
			"public" 		=> true,
			"menu_icon"		=> "dashicons-admin-home",
			"menu_position" => 2,
			"supports" 		=> [
				"title",
				"editor",
				"revisions",
				"thumbnail"
			],
			
	
		]);
	
	};