<?php

/* 
	Template Name: No Menu
*/

add_action( "wp_enqueue_scripts", "addTemplateNoWidgetStyles" );
function addTemplateNoWidgetStyles(){
	wp_enqueue_style( "noWidget", get_template_directory_uri("./")."/templates/noWidget.css" );
}

get_header();
get_custom_styles();

?>
<div class="template-container">
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
				$post_thumb = get_the_post_thumbnail( null, "thumbnail");
				the_content();
			}
		?>	
	</div>
</div>
<?php

