<?php
	if( isset( $_POST["colorH"] ) &&  isset( $_POST["colorP"] ) && isset( $_POST["colorBg"] ) ){
		$colors = [
			"headers" => $_POST['colorH'],
			"body" => $_POST['colorP'],
			"background" => $_POST["colorBg"]
		];
		
		// dd($_POST);

		update_option( "customColors", $colors );

		
		
		// dd($colorsVal);
	}
	$colorsVal = [
		"headers" => [],
		"body" => "",
		"background" => ""
	];
	if( get_option("customColors") ){
		$colorsVal = get_option("customColors");
	}

?>

<h1>Colors</h1>

<form method="POST" id="formcolor">
	<?php for($i=0 ; $i<6 ; $i++ ){ ?>
	<label>
		<span class="title" >Title h<?= $i+1 ?> :</span>
		<input class="jscolor" type="text" name="colorH[]" value="<?= $colorsVal["headers"][$i]?>">
	</label>
	<br />
	<?php } ?>
	</br>
	</br>
	<label>
		<span class="title" >Texte :</span>
		<input class="jscolor" type="text" name="colorP" value="<?= $colorsVal["body"]?>">
	</label>
	</br>
	</br>
	<label>
		<span class="title" >Fond :</span>
		<input class="jscolor" type="text" name="colorBg" value="<?= $colorsVal["background"]?>">
	</label>
	</br>
	<input type="submit" value="Appliquer">
</form>