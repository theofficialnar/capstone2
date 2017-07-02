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
		<div class="row">
			<div class="col l10 offset-l1 m12 s12 center-align">
				<div class="input-field">
					<form method="POST" action="" class="half-centered-form">';
						multiDropdown('class');
						echo '<input type="submit" name="skillSimSubmit" value="Select" class="btn btn-select">
					</form>
				</div>
			</div>
		</div>';
		
		if(isset($_POST['skillSimSubmit'])){
			$class_input = $_POST['class'];
			$sql = "SELECT * FROM skills";
			$result = mysqli_query($conn, $sql);
				echo '<div class="row">';
					echo '<div class="current_skill_tree col l6 m6 s12">';
						echo '<h5 class="center-align">Current Skills</h5>';
						echo '<form method="POST" action="skill_sim.php?class='.$class_input.'">';
							//Table for skills not tagged as Quest Skills
							while($row = mysqli_fetch_assoc($result)){
								extract($row);
								if($class == $class_input && $quest_skill == 'No'){
									echo '<div class="'.$id.'">';
									echo '<img id="icon'.$skill_name.'" src="'.$icon.'">';
									echo ' ' .$skill_name. ' ';
									echo '<button id="add'.$skill_name.'" onclick="level(1,this.id)" type="button" class="add'.$id.'"><i class="material-icons">call_made</i></button>';
									echo '<button id="min'.$skill_name.'" onclick="level(-1,this.id)" type="button" class="min'.$id.'"><i class="material-icons">call_received</i></button>';
									echo '<input readonly type="text" id="level'.$skill_name.'" class="level'.$id.'" name="'.$skill_name.'" value="0" style="width: 15px; border-bottom: none; margin: 0">';
									echo '<span style="display:none" id="hidden'.$skill_name.'" class="hidden'.$id.'">0</span>';
									echo '<span> / </span>';
									echo '<span id="max'.$skill_name.'">'.$max_level.'</span><br>';
									echo '</div>';
								};//non-quest skill closer
								//Automatically sets value for skills tagged as Quest Skill to 1
								if($class == $class_input && $quest_skill == 'Yes'){
									echo '<div class="'.$id.'">';
									echo '<img id="icon'.$skill_name.'" src="'.$icon.'">';
									echo ' ' .$skill_name. ' ';
									echo '<span><b>[ Quest Skill ]</b></span><br>';
									echo '<input hidden type="text" id="level'.$skill_name.'" name="'.$skill_name.'" value="1">';
									echo '</div>';
								};//quest skill closer
							};//while loop closer
							echo '<input type="submit" name="saveBuild" value="Save">';
							echo 'Unused Skill Points: <span id="sp_left"> 49 </span>';
						// echo '<button id="hideEndure" type="button">Hide</button>';					
						echo '</form>';
					echo '</div>';
			
			
		};//isset closer
	echo '</div>';

};//function closer

require_once 'template.php';

?>