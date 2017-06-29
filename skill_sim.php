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
			echo '<form method="POST" action="skill_sim.php?class='.$class_input.'">';
			while($row = mysqli_fetch_assoc($result)){
				extract($row);
				if($class == $class_input){

					echo '<img id="icon'.$skill_name.'" src="'.$icon.'">';
					echo ' ' .$skill_name. ' ';
					echo '<button id="add'.$skill_name.'" onclick="level(1,this.id)" type="button"> + </button>';
					echo '<button id="min'.$skill_name.'" onclick="level(-1,this.id)" type="button"> - </button>';
					echo '<input readonly type="text" id="level'.$skill_name.'" name="'.$skill_name.'" value="0" style="width: 20px">';
					echo '<span id="max'.$skill_name.'">'.$max_level.'</span><br>';
				}
			}
		echo '<input type="submit" name="saveBuild" value="Save">';
		}
		
		echo '</form>
	</div>';

};

require_once 'template.php';

?>