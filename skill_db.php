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
		<div class="row">
			<div class="col l10 offset-l1 m12 s12 center-align">
				<div class="input-field">
					<form method="POST" action="" class="half-centered-form">';
						multiDropdown('class');
						echo '<input type="submit" name="skillDbSubmit" value="Select" class="btn btn-blue">
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col l10 offset-l1 m12 s12">
				<div class="collapsible-container">
					<ul class="collapsible" data-collapsible="expandable">';
				if(isset($_POST['skillDbSubmit'])){
					$class_input = $_POST['class'];
					$sql = "SELECT * FROM skills";
					$result = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($result)){
						extract($row);
						if($class == $class_input){
						echo '<li>';
							if($quest_skill == 'Yes'){
								echo '<div class="collapsible-header valign-wrapper"><img src=' .$icon. '>' . ' <span class="skill-db-header">' .$skill_name. ' <b>[ Quest Skill ]</b></span></div>';
								}else{
								echo '<div class="collapsible-header valign-wrapper"><img src=' .$icon. '>' . ' <span class="skill-db-header">' .$skill_name. '</span></div>';
								};
							echo '<div class="collapsible-body">
								<table class="bordered">
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
								</table>';
									if(isset($_SESSION['loginFlag']) && $_SESSION['loginFlag'] == true && $_SESSION['role'] == 'admin'){
										echo "<div class='center-align skill-db-admin-btn'>
												<a href='skill_edit.php?id=$id' class='btn btn-small waves-effect teal accent-4 btn-hover-scale'>Edit</a>
												<a href='skill_delete.php?id=$id'class='btn btn-small waves-effect red accent-1 btn-hover-scale'>Delete</a>
										</div>";
										}
							echo '</div>
						</li>';
							}
					};//while end
				};//if end
					echo '
					</ul>
				</div>
			</div>
		</div>
	</div>';
};//function end

require_once 'template.php';
	?>