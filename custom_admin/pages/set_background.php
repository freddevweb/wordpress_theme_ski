<?php 

add_action( 'admin_enqueue_scripts', 'load_scriptimgs' );
function load_scriptimgs(){

	wp_enqueue_script( "media", get_template_directory_uri("./")."/js/media.js", array( 'jquery' ), true);
};

/* get all img uploaded */
$query_images_args = array(
    'post_type'      => 'attachment',
    'post_mime_type' => 'image',
    'post_status'    => 'inherit',
    'posts_per_page' => - 1,
);
$query_images = new WP_Query( $query_images_args );


if( !empty( $_POST) ){
	
	$imgSelected = $_POST["img"];


	
	

	$img = $imgSelected;

	
}
else {

	$img = get_theme_support( 'custom-background' );
	// $img = get_theme_support( 'custom_background' );
	
}

var_dump($img);


// add_action( "admin_init", "add_option_customBgImg" );
// function add_option_customBgImg(){
// 	add_option( "customBgImg","" );
// }



?>
<div class="bgimg-main">
	<h2>Background image</h2>
	<div class="bgimg-content">
		<div class="bgimg-selection">
			<div class="imgselected">
				<?php if( isset($imgSelected ) ){ ?>
				<img src="<?= $imgSelected ?>"/>
				<?php } ?>
			</div>
		</div>
		<div class="form-img">
			<form method="POST" id="form-img-set">
				<div class="imageselection">
					<?php
					foreach($query_images->posts as $image){
						$imgName = $image->post_title;
						$imgUrl = $image->guid;
						
						?>
							
							<label for="<?= "img".$imgName ?>">
								<input type="radio" name="img" 
								id="<?= "img".$imgName ?>" class="input_hidden" value="<?= $imgUrl ?>" />
								<img src="<?= $imgUrl ?>" />
								<br />
								<div class="imgtitle"><?= $imgName ?></div>
							</label>
						<?php
					};
					?>
				</div>
				<input type="submit" value="Add background image">
			</form>
		</div>
	</div>
</div>
<?php 
	
	
// include 'http://localhost/2_dev_idem/wordpress-4.9.1/wordpress_TpFred/wp-admin/media-upload.php';


?>


<?php




