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
		<div class="row">
			<div class="col l10 offset-l1 m12 s12 margin-top bg z-depth-2 center-align">
				<form method="POST" action="lib/skill_add_script.php" enctype="multipart/form-data">
					<div class="input-field">
						<select name="class">
							<option value="" disabled selected>Choose an option</option>
							<option>Novice</option>
							<option>Swordsman</option>
							<option>Magician</option>
							<option>Archer</option>
							<option>Acolyte</option>
							<option>Merchant</option>
							<option>Thief</option>
						</select>
						<label>Class</label>
					</div>
					<div class="input-field">
						<input type="text" name="skill_name" id="skill_name">
						<label for="skill_name">Skill Name</label>
					</div>
					<div class="input-field">
						<textarea name="description" id="description" class="materialize-textarea"></textarea>
						<label for="description">Description</label>
					</div>
					<div class="input-field">
						<select name="max_level">
							<option value="1" disabled selected>Choose an option</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
						</select>
						<label>Max Level</label>
					</div>
					<p>
						<input type="checkbox" id="quest_skill" name="quest_skill">
						<label for="quest_skill">Quest Skill</label>
					</p>
					<div class="input-field">
						<input type="text" name="required_for" id="required_for">
						<label for="required_for">Required for</label>
					</div>
					<div class="input-field">
						<input type="text" name="unlock_requirements" id="unlock_requirements">
						<label for="unlock_requirements">Unlock Requirements</label>
					</div>
					<div class="left-align" style="margin: 10px 0 20px">
						<label style="font-size: 15px">Skill Icon</label><br>
						<input type="file" name="icon">
					</div>
					<button type="submit" name="skillSubmit" class="btn blue accent-2 btn-hover-scale"><i class="right material-icons">send</i>Submit</button>
				</form>
			</div>
		</div>
	</div>';
}

require_once 'template.php';
?>