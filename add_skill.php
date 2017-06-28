<?php
function header_title(){
	echo 'Add Skills';
}

function get_title(){
	echo 'myRagnarok db | Add Skills';
}

function display_content(){
	global $conn;
	echo '<div class="container">
		<form method="POST" action="">
			<div class="input-field">
				<input type="text" name="skill_name" id="skill_name">
				<label for="skill_name">Skill Name</label>
			</div>
			<div class="input-field">
				<input type="text" name="description" id="description">
				<label for="description">Description</label>
			</div>
			<div class="input-field">
				<input type="text" name="class" id="class">
				<label for="class">Class</label>
			</div>
			<div class="input-field">
				<input type="text" name="required_for" id="required_for">
				<label for="required_for">Required for</label>
			</div>
			<div class="input-field">
				<input type="text" name="max_level" id="max_level">
				<label for="max_level">Max Level</label>
			</div>
			<div class="file-field input-field">
				<div class="btn">
					<span>File</span>
					<input type="file" name="icon">
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text">
				</div>
			</div>
			<button type="submit" name="skillSubmit" class="btn">Submit</button>
		</form>
	</div>';
}

require_once 'template.php';
?>