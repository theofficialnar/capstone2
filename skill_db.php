<?php
function header_title(){
	echo 'Skill Database';
};

function get_title(){
	echo 'myRagnarok db | Skill Database';
};

function display_content(){
	global $conn;
	echo '<div class="container">
		<div class="input-field">
			<form method="POST" action="">';
				multiDropdown('class');
				echo '<input type="submit" name="skillDbSubmit" value="Select" class="btn">
			</form>
		</div>';
		if(isset($_POST['skillDbSubmit'])){
			$class_input = $_POST['class'];
			$sql = "SELECT * FROM skills";
			$result = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_assoc($result)){
				extract($row);
				if($class == $class_input){
				echo '<img src=' .$icon. '>';
				echo $skill_name . '<br>';
				}
			}
		};
	echo '</div>';
};

require_once 'template.php';
	?>