<?php
function header_title(){
	echo 'Delete Skill from Database';
};

function get_title(){
	echo 'myRagnarok db | Delete Skill';
};

function display_content(){
	global $conn;
	$id = $_GET['id'];
	$sql = "SELECT * FROM skills WHERE id = '$id'";
	$result = mysqli_query($conn,$sql);
	echo '<div class="container">
		<div class="row">
			<div class="col l10 offset-l1 m12 s12 margin-top bg z-depth-2 center-align">';
	while($row = mysqli_fetch_assoc($result)){
		extract($row);
				echo '<div>
						<img src="'.$icon.'"> ';
						if($quest_skill == 'Yes'){
						echo '<span class="skill-db-header">'.$skill_name.' <span class="quest-marker">[ Quest Skill ]</span></span>';
						}else{
						echo '<span class="skill-db-header">'.$skill_name.'</span>';
						};
				echo '<hr>
				</div>
				<table>
					<tbody>
						<tr>
							<td><span class="skill-db-title">Description: </span></td>
							<td><span>'.$description.'</span></td>
						</tr>
						<tr>
							<td><span class="skill-db-title">Unlock Requirements: </span></td>
							<td><span>'.$unlock_requirements.'</span></td>
						</tr>
						<tr>
							<td><span class="skill-db-title">Required For: </span></td>
							<td><span>'.$required_for.'</span></td>
						</tr>
					</tbody>
				</table><hr>
					<div class="center-align">
						<h5>Are you sure you want to delete '.$skill_name.' from the database? There\'s no turning back from here.</h5>
						<form method="POST" action="">
							<button type="submit" name="deleteYes" class="btn red accent-1 btn-hover-scale btn-margin">Yes</button>
							<button type="submit" name="deleteNo" class="btn teal accent-4 btn-hover-scale btn-margin">No</button>
						</form>
					</div>';
	};//while end
			echo '</div>
		</div>
	</div>';
};//function end

require_once 'template.php';

?>