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
	echo '<div class="container">
		<div class="row">
			<div class="col l10 offset-l1 m12 s12 margin-top bg z-depth-2 center-align">';
	while($row = mysqli_fetch_assoc($result)){
		extract($row);
				echo '<form method="POST" action="lib/skill_edit_script.php?id='.$id.'" enctype="multipart/form-data">
					<div class="input-field">
						<input type="text" name="skill_name" id="skill_name" value="'.$skill_name.'">
						<label for="skill_name">Skill Name</label>
					</div>
					<div class="input-field">
						<textarea name="description" id="description" class="materialize-textarea">'.$description.'</textarea>
						<label for="description">Description</label>
					</div>
					<div class="left-align">
						<label>Max Level</label>
						<input type="number" name="max_level" value="'.$max_level.'" max="10" min="0">
					</div>
					<p>';
						if($quest_skill == 'Yes'){
							echo'<input type="checkbox" id="quest_skill" name="quest_skill" checked="checked">';
						}else{
							echo'<input type="checkbox" id="quest_skill" name="quest_skill">';
						}
						echo '<label for="quest_skill">Quest Skill</label>
					</p>
					<div class="input-field">
						<input type="text" name="required_for" id="required_for" value="'.$required_for.'">
						<label for="required_for">Required for</label>
					</div>
					<div class="input-field">
						<input type="text" name="unlock_requirements" id="unlock_requirements" value="'.$unlock_requirements.'">
						<label for="unlock_requirements">Unlock Requirements</label>
					</div>
					<div class="left-align" style="margin: 10px 0 20px">
						<label style="font-size: 15px">Skill Icon</label><br>
						<input type="file" name="icon">
					</div>
					<h5> Apply changes? </h5>
					<button type="submit" name="editYes" class="btn red accent-1 btn-hover-scale btn-margin">Yes</button>
					<button type="submit" name="editNo" class="btn teal accent-4 btn-hover-scale btn-margin">No</button>
				</form>';
	}
			echo '</div>
		</div>
	</div>';
};//function end

require_once 'template.php';

?>