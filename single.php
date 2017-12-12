<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fredTheme
 */

//   add script
add_action( "wp_enqueue_scripts", "add_single_scripts" );
function add_single_scripts(){
	wp_enqueue_style( "singleStyles", get_template_directory_uri("./")."/css/singleStyles.css" );
}




while ( have_posts() ) : the_post();
$imgUrl = get_the_post_thumbnail_url();

endwhile;

get_header(); 
?>
	
<div class="page-article" style="background-image: url(<?= $imgUrl ?>)">

	<div id="primary" class="content-area" >
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();
			$imgUrl = get_the_post_thumbnail_url();
			$content = get_the_content();
			$title = get_the_title();
			

			?>
			<div class="article">
				<div class="divImg-article">
					<?php if( $imgUrl != null ){ ?>
					<img class="img-article" src="<?= $imgUrl ?>"/>
					<?php } ?>
				</div>
				<div class="text-article">
					<h2 class="title-article"><?= $title ?></h2>
					<p class="content-article"><?= $content ?></p>
					
				</div>
			</div>
			<?php

		endwhile; // End of the loop.

		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar() ?>
</div>
<?php


