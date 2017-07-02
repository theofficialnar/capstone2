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
			echo '<div class="row">
				<div class="current-skill-tree col l6 m6 s12">
					<h5 class="center-align">Current Skills</h5>
					<form method="POST" action="skill_sim.php?class='.$class_input.'">
						<table>
							<tbody>';
						//Table for skills not tagged as Quest Skills
						while($row = mysqli_fetch_assoc($result)){
							extract($row);
							if($class == $class_input && $quest_skill == 'No'){
									echo '<tr class="'.$id.'">
										<td><img id="icon'.$skill_name.'" src="'.$icon.'"> '.$skill_name.'</td>
										<td><button id="add'.$skill_name.'" onclick="level(1,this.id)" type="button" class="add'.$id.'"><i class="material-icons">call_made</i></button>
										<button id="min'.$skill_name.'" onclick="level(-1,this.id)" type="button" class="min'.$id.'"><i class="material-icons">call_received</i></button></td>
										<td>
											<input readonly type="text" id="level'.$skill_name.'" class="level'.$id.'" name="'.$skill_name.'" value="0" style="width: 15px; border-bottom: none; margin: 0">
											<span style="display:none" id="hidden'.$skill_name.'" class="hidden'.$id.'">0</span>
											<span> / </span>
											<span id="max'.$skill_name.'">'.$max_level.'</span><br>
										</td>
									</tr>';
							};//non-quest skill closer
							//Automatically sets value for skills tagged as Quest Skill to 1
							if($class == $class_input && $quest_skill == 'Yes'){
									echo '<tr class="'.$id.'">
										<td><img id="icon'.$skill_name.'" src="'.$icon.'"> '.$skill_name.' <span><b>[ Quest Skill ]</b></span></td>
										<td><input hidden type="text" id="level'.$skill_name.'" name="'.$skill_name.'" value="1"></td>
									</tr>';
							};//quest skill closer
						};//while loop closer
							echo '</tbody>
						</table>
							<input type="submit" name="saveBuild" value="Save">
							Unused Skill Points: <span id="sp_left"> 49 </span>
					</form>
				</div>';

			//Locked skills filter
			if($class_input == 'Swordsman'){
				$sql = "SELECT * FROM skills WHERE id IN ('5','9','10')";
				}
			if($class_input == 'Magician'){
				$sql = "SELECT * FROM skills WHERE id IN ('17','18','20', '22', '23', '26')";
				}
			if($class_input == 'Archer'){
				$sql = "SELECT * FROM skills WHERE id IN ('29','30','32')";
				}

			$result = mysqli_query($conn, $sql);
				echo '<div class="to-be-unlocked-tree col l6 m6 s12">
					<h5 class="center-align">Skills to be unlocked</h5>
					<table>
						<tbody>';
					if($class_input != 'Novice'){
						while($row = mysqli_fetch_assoc($result)){
							extract($row);
							echo '<tr>
								<td><img src="'.$icon.'"> '.$skill_name.' '.$unlock_requirements.'</td>
							</tr>';
						};
					}else{
						echo ' ';
					}
						echo '</tbody>
					</table>
				</div>
			</div>'; //row
		};//isset closer
	echo '</div>'; //container

};//function closer

require_once 'template.php';

?>