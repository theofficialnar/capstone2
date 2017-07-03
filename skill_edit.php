<?php
function header_title(){
	echo 'Edit Skill Information';
};

function get_title(){
	echo 'myRagnarok db | Edit Skill Information';
};

function display_content(){
	global $conn;
	$id = $_GET['id'];
	$sql = "SELECT * FROM skills WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	echo '<div class="container">';
	while($row = mysqli_fetch_assoc($result)){
		extract($row);
		echo '<form method="POST" action="">
			<div class="input-field">
				<input type="text" name="skill_name" id="skill_name" value="'.$skill_name.'">
				<label for="skill_name">Skill Name</label>
			</div>
			<div class="input-field">
				<textarea name="description" id="description" class="materialize-textarea">'.$description.'</textarea>
				<label for="description">Description</label>
			</div>
			<div>
				<label>Max Level</label>
				<input type="number" name="max_level" value="'.$max_level.'" max="10" min="0">
			</div>
			<div class="input-field">';
				if($quest_skill == 'Yes'){
					echo'<input type="checkbox" id="quest_skill" name="quest_skill" checked="checked">';
				}else{
					echo'<input type="checkbox" id="quest_skill" name="quest_skill">';
				}
				echo '<label for="quest_skill">Quest Skill</label>
			</div>
			<div class="input-field">
				<input type="text" name="required_for" id="required_for" value="'.$required_for.'">
				<label for="required_for">Required for</label>
			</div>
			<div class="input-field">
				<input type="text" name="unlock_requirements" id="unlock_requirements" value="'.$unlock_requirements.'">
				<label for="unlock_requirements">Unlock Requirements</label>
			</div>
			<div class="file-field input-field">
				<div class="btn">
					<span>File</span>
					<input type="file">
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" name="icon" type="text" value="'.substr($icon,15).'">
				</div>
			</div>
			<h5> Apply changes? </h5>
			<input type="submit" name="editYes" value="Yes" class="btn red">
			<input type="submit" name="editNo" value="No" class="btn green">
		</form>';
	}
};//function end

require_once 'template.php';

?>