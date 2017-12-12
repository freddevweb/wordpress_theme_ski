<?php

/* 
	Template Name: Left Menu
*/

add_action( "wp_enqueue_scripts", "addTemplateNoWidgetStyles" );
function addTemplateNoWidgetStyles(){
	wp_enqueue_style( "widthWidget", get_template_directory_uri("./")."/templates/widthWidget.css" );
}

get_header();
get_custom_styles();
get_theme_support( 'custom_background' );
?>
<div class="template-container">
	<div class="sidebar">
		<!-- faire apparaitre menu -->
		<?php 
			get_sidebar("sidebar");
		?>
	</div>

	<div class="content">
		<?php  
			while( have_posts()){
				the_post();
				if( get_the_post_thumbnail() ){
					$img = get_the_post_thumbnail_url();
					?>
					<img src="<?= $img ?>" alt="" />
					<?php
				}
				the_title( "<h1>", "</h1>" );
				the_content();
			}
		?>	
	</div>
</div>

<?php
