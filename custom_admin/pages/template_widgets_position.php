<?php
	// var_dump($_POST);
	// $position;

	// if( isset( $_POST["position"]) ){
		
	// 	if( $_POST["position"] == "right" ){

	// 	}
	// 	if(  $_POST["position"] == "left" ){

	// 	}
	// 	if(  $_POST["position"] == "no" ){
			
	// 	}
	// }
/* for all but not pages */


?>

<h1>Widget position</h1>

<form method="POST">
	<div id="formPosition">
		<div class="block">
			<label>From :
				<select>
					<option></option>
					<option name="articles">Articles</option>
					<option name="categories">Category</option>
				</select>
			</label>
		</div>
		<div id="position" class="block">
			<label>
				<span>Left position</span>
				<div class="illustrW">
					<div class="illutr-title"></div>
					<div class="illust-content">
						<div class="widget left"></div>
						<div class="text"></div>
					</div>
				</div>
				<input type="radio" value="left" name="position" />
			</label>
			<label>
				<span>Right position</span>
				<div class="illustrW">
					<div class="illutr-title"></div>
					<div class="illust-content">
						<div class="text"></div>
						<div class="widget right"></div>
					</div>
				</div>
				<input type="radio" value="right" name="position" />
			</label>
		</div>
		<div id="none" class="block">
			<label>
				<span>None</span>
				<div class="illustr">
					<div class="illutr-title"></div>
					<div class="illust-content"></div>
				</div>
				<input type="radio" value="no" name="position" />
				
			</label>
		</div>
		<div class="block">
			<input type="submit" value="Apply" />
		</div>
	</div>
</form>

