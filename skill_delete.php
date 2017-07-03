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
	echo '<div class="container">';
	while($row = mysqli_fetch_assoc($result)){
		extract($row);
		echo '<div class="center-align">
				<img src="'.$icon.'"> <span>'.$skill_name.'</span>
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
		</table>
			<div class="center-align">
				<h5>Are you sure you want to delete '.$skill_name.' from the database? There\'s no turning back from here.</h5>
				<form method="POST" action="">
					<input type="submit" name="deleteYes" value="Yes" class="btn red">
					<input type="submit" name="deleteNo" value="No" class="btn green">
				</form>
			</div>';
	}
	echo '</div>';
}//function end

require_once 'template.php';

?>