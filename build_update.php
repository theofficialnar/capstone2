<?php
function header_title(){
	echo 'Build Editor';
};

function get_title(){
	echo 'myRagnarok db | Build Editor';
};

function display_content(){
	global $conn;
	$build_id = $_GET['build_id'];
	echo '<div class="container">';
	$sql = "SELECT * FROM skill_sims ss JOIN skills s ON ss.skill_id = s.id WHERE build_id = '$build_id'";
	$result = mysqli_query($conn, $sql);
		echo '<div class="row">
			<div class="col l12 m12 s12">
				<form method="POST">';
				while($row = mysqli_fetch_assoc($result)){
					extract($row);
					if($quest_skill == 'No'){
							echo'<div class="row">
								<div class="'.$id.' col l5 m5 s12">
									<img id="icon'.$skill_name.'" src="'.$icon.'"> <span>'.$skill_name.'</span>
								</div>
								<div class="skill-data'.$id.' col l4 m4 s6"><button id="add'.$skill_name.'" onclick="level(1,this.id)" type="button" class="add'.$id.'"><i class="material-icons">call_made</i></button>
									<button id="min'.$skill_name.'" onclick="level(-1,this.id)" type="button" class="min'.$id.'"><i class="material-icons">call_received</i></button>
								</div>
								<div class="skill-data'.$id.' col l3 m3 s6">
										<input readonly type="text" id="level'.$skill_name.'" class="level'.$id.' current-skill-level" name="'.$skill_name.'" value="'.$level.'" style="width: 20px; border-bottom: none; margin: 0">
										<span style="display:none" id="hidden'.$skill_name.'" class="hidden'.$id.'">'.$level.'</span>
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
					if($quest_skill == 'Yes'){
							echo '<div class="row">
								<div class="'.$id.' col l5 m5 s12">
									<img id="icon'.$skill_name.'" src="'.$icon.'"> <span>'.$skill_name.' <b>[ Quest Skill ]</b></span>
									<input hidden type="text" id="level'.$skill_name.'" name="'.$skill_name.'" value="1">
								</div>
							</div>';
					};//quest skill closer
				}; //while closer
					echo '<input type="submit" name="updateBuild" value="Save Changes">
						Unused Skill Points: <input type="text" id="sp_left" name="sp_left" value="'.$pts_left.'" style="width: 20px; border-bottom: none; margin: 0">
				</form>
			</div>
		</div>
	</div>';
};

require_once 'template.php';
?>