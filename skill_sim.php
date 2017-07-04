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
				<div class="current-skill-tree col l12 m12 s12">
					<h5 class="center-align">Current Skills</h5>
					<form method="POST" action="skill_sim.php?class='.$class_input.'">';
						//Table for skills not tagged as Quest Skills
						while($row = mysqli_fetch_assoc($result)){
							extract($row);
							if($class == $class_input && $quest_skill == 'No'){
									echo'<div class="row">
										<div class="'.$id.' col l5 m5 s12">
											<img id="icon'.$skill_name.'" src="'.$icon.'"> <span>'.$skill_name.'</span>
										</div>
										<div class="skill-data'.$id.' col l4 m4 s6"><button id="add'.$skill_name.'" onclick="level(1,this.id)" type="button" class="add'.$id.'"><i class="material-icons">call_made</i></button>
											<button id="min'.$skill_name.'" onclick="level(-1,this.id)" type="button" class="min'.$id.'"><i class="material-icons">call_received</i></button>
										</div>
										<div class="skill-data'.$id.' col l3 m3 s6">
												<input readonly type="text" id="level'.$skill_name.'" class="level'.$id.' current-skill-level" name="'.$skill_name.'" value="0" style="width: 20px; border-bottom: none; margin: 0">
												<span style="display:none" id="hidden'.$skill_name.'" class="hidden'.$id.'">0</span>
												<span class="hide-on-small-only"> / </span>
												<span id="max'.$skill_name.'" class="hide-on-small-only">'.$max_level.'</span><br>
										</div>';
										if($unlock_requirements != 'None'){
											echo '<div class="skill-requirements'.$id.' col l7 m7 s12">
												<span>Requires '.$unlock_requirements.' to unlock.</span>
											</div>';
										}
									echo '</div>';
							};//non-quest skill closer
							//Automatically sets value for skills tagged as Quest Skill to 1
							if($class == $class_input && $quest_skill == 'Yes'){
									echo '<div class="row">
										<div class="'.$id.' col l5 m5 s12">
											<img id="icon'.$skill_name.'" src="'.$icon.'"> <span>'.$skill_name.' <b>[ Quest Skill ]</b></span>
											<input hidden type="text" id="level'.$skill_name.'" name="'.$skill_name.'" value="1">
										</div>
									</div>';
							};//quest skill closer
						};//while loop closer
							echo '<a href="#modal2"><button>Save</button></a>
								<input type="submit" name="genRep" value="Generate Report">
								Unused Skill Points: <input type="text" id="sp_left" name="sp_left" value="49" style="width: 20px; border-bottom: none; margin: 0">

								<div id="modal2" class="modal">
									<div class="modal-content">
										<div class="input-field">
											<input type="text" name="build_name" id="build_name">
											<label for="build_name">Name</label>
										</div>
										<div class="input-field">
											<textarea name="build_description" id="build_description" class="materialize-textarea"></textarea>
											<label for="build_description">Description</label>
										</div>
									</div>
									<div class="modal-footer">
										<input type="submit" name="saveBuild" value="Save">
										<input type="submit" name="cancelBuild" value="Cancel">
									</div>
								</div>
						</form>
					</div>
				</div>
			</div>'; //row

		};//isset closer
	echo '</div>'; //container

};//function closer

require_once 'template.php';

?>