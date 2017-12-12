<?php
/**
 * The template for displaying all category
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#category
 *
 * @package fredtheme
 */

 //add script
add_action( "wp_enqueue_scripts", "add_category_scripts" );
function add_category_scripts(){
	wp_enqueue_style( "categoryStyles", get_template_directory_uri("./")."/css/categoryStyles.css" );
}


get_header(); 
?>
<h1 class='title-cat'><?php single_cat_title() ?></h1>

	<div id="cat-articles">
		<?php 
		if( have_posts() ){ 
			$i = 1;
			while( have_posts() ){

				the_post();

				$title = get_the_title();
				$content = substr( get_the_content(), 0, 200 )." ...";
				$imgUrl = get_the_post_thumbnail_url();
				$link = get_post_permalink();

				$pair = "";
				if( $i%2 == 0 ){
					$pair = "pair";
				}
				?>
				<div class="article-category <?= $pair ?>">
					<div class="divImg-article-category">
						<?php if( $imgUrl != null ){ ?>
						<img class="img-article-category" src="<?= $imgUrl ?>"/>
						<?php } ?>
					</div>
					<div class="text-article-category">
						<h2 class="title-article-category"><?= $title ?></h2>
						<p class="content-article-category"><?= $content ?></p>
						<a href="<?= $link ?>" class="buttonLink-article-category">
							Lire l'article
						</a>
					</div>
				</div>
				<?php
				$i++;
			}	
					
	 	} ?>
	</div>


