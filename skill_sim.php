<?php
function header_title(){
	echo 'Skill Simulator';
};

function get_title(){
	echo 'myRagnarok db | Skill Simulator';
};

function display_content(){
	global $conn;
	echo '<div class="container">
		<div class="input-field">
			<form method="POST" action="">';
				multiDropdown('class');
				echo '<input type="submit" name="skillSimSubmit" value="Select" class="btn">
			</form>
		</div>';
		
		if(isset($_POST['skillSimSubmit'])){
			$class_input = $_POST['class'];
			$sql = "SELECT * FROM skills";
			$result = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_assoc($result)){
				extract($row);
				echo '<div class="row">';
					echo '<div class="current_skill_tree col l6 m6 s12">';
						echo '<h5 class="center-align">Current Skills</h5>';
						echo '<form method="POST" action="skill_sim.php?class='.$class_input.'">';
							//Table for skills not tagged as Quest Skills
							if($class == $class_input && $quest_skill == 'No'){
								echo '<div class="'.$id.'">';
								echo '<img id="icon'.$skill_name.'" src="'.$icon.'">';
								echo ' ' .$skill_name. ' ';
								echo '<button id="add'.$skill_name.'" onclick="level(1,this.id)" type="button" class="add'.$id.'"><i class="material-icons">call_made</i></button>';
								echo '<button id="min'.$skill_name.'" onclick="level(-1,this.id)" type="button" class="min'.$id.'"><i class="material-icons">call_received</i></button>';
								echo '<input readonly type="text" id="level'.$skill_name.'" name="'.$skill_name.'" value="0" style="width: 15px; border-bottom: none; margin: 0">';
								echo '<span style="display:none" id="hidden'.$skill_name.'" class="hidden'.$id.'">0</span>';
								echo '<span> / </span>';
								echo '<span id="max'.$skill_name.'">'.$max_level.'</span><br>';
								echo '</div>';
							};
							//Automatically sets value for skills tagged as Quest Skill to 1
							if($class == $class_input && $quest_skill == 'Yes'){
								echo '<div class="'.$id.'">';
								echo '<img id="icon'.$skill_name.'" src="'.$icon.'">';
								echo ' ' .$skill_name. ' ';
								echo '<span><b>[ Quest Skill ]</b></span><br>';
								echo '<input hidden type="text" id="level'.$skill_name.'" name="'.$skill_name.'" value="1">';
								echo '</div>';
							};
						echo '<input type="submit" name="saveBuild" value="Save">';
						// echo '<button id="hideEndure" type="button">Hide</button>';
							
						echo '</form>';
						echo '<div class="locked_skills col l6 m6 s12">';
							if($class == $class_input && $quest_skill == 'Yes' && $unlock_requirements != 'None'){
									echo '<img src="'.$icon.'">';
									echo '<span>'.$skill_name.'</span>';
									echo '<span>'.$unlock_requirements.'</span><br>';
								};
						echo '</div>';
					echo '</div>
				</div>';
			};
			
		};
	echo '</div>';

};

require_once 'template.php';

?>