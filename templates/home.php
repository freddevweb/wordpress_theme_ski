<?php
/**
 * Template Name: Home Slider
 *
 */

add_action( "wp_enqueue_scripts", "add_scripts");

function add_scripts(){

	wp_enqueue_style( "home", get_template_directory_uri("./")."/templates/home.css" );
	
	wp_enqueue_script( "slider", get_template_directory_uri("./")."/js/slider.js", array( 'jquery' ), true);
}

$comments = new WP_Query( [
	"post_type" => "comments"
]);
get_header();
?>
<div class="slider-container">
	<div class="content">
		<?php 
			if( $comments->have_posts() ){
				while( $comments->have_posts()){
					$comments->the_post();
					
					if( get_the_post_thumbnail() ){
						
						$imgUrl = get_the_post_thumbnail_url();
						$title = get_the_title();
						$link = get_post_permalink();
						
						$div = "<div class='slide fade' >";
						$div .= "<a href='".$link."'>";
						$div .= "<div class='img'>";
						$div .= '<img src="'.$imgUrl.'" />';
						$div .= "</div>";
						$div .= "<div class='slideTitle'>";
						$div .= "<h2>".$title."</h2>";
						$div .= "</div>";
						$div .= "</a>";
						$div .= "</div>";

						echo $div;
					
					}
				}
			}
		?>	
	</div>
</div>
<div class="post-container">
	<div class="post-content">
		<?php
		$posts = new WP_Query( [
			"post_type" => ""
		]);
			while( $posts->have_posts() ){

				$posts->the_post();
				
				$imgUrl = get_the_post_thumbnail_url();
				$title = get_the_title();
				$content = substr( get_the_content(), 0, 300 )." ...";
				$link = get_post_permalink();

				$divPost = "<div class='post'>";
				$divPost .= "<div class='post-img'>";
				$divPost .= "<img src=".$imgUrl." />";
				$divPost .= "</div>";
				$divPost .= "<h3 class='post-title'>".$title."</h3>";
				$divPost .= "<p>".$content."</p>";
				$divPost .= "<div class='link'><a href='".$link."'>En savoir plus</a></div>";
				$divPost .= "</div>";
				
				echo $divPost;
			}
		?>
	</div>
</div>
<?php
// var_dump(get_template_directory_uri("./")."/js/slider.js");
// var_dump( $posts );
