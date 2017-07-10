<?php 
function header_title(){
	echo 'Builds';
};

function get_title(){
	echo 'myRagnarok db | Builds';
};

function display_content(){
	global $conn;
	echo '<div class="container">
		<div class="row">';
	$sql = "SELECT DISTINCT b.*,c.class_icon,u.username FROM classes c JOIN skills s ON c.class_name=s.class JOIN skill_sims ss ON ss.skill_id=s.id JOIN builds b ON ss.build_id=b.id JOIN users u ON b.acct_id = u.id ORDER BY b.id DESC";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		extract($row);
		echo "<div class='col l6 m6 s12'>
			<a href='build.php?build_id=$id'>";
				echo '<div class="card medium indigo lighten-3 z-depth-5">
					<div class="card-content black-text">
						<div class="center-align">
							<img src="'.$class_icon.'" class="responsive-img">
						</div>
						<span class="card-title center-align"><b>'.strtoupper($build_name).'</b></span><hr>
						<p class="build-date">'.$build_date.'</p>
						<p class="build-creator"> Submitted by: '.$username.'</p>
						<p>'.ucfirst($build_description).'</p>
					</div>
					<div class="card-action center-align">';
						echo "<a href='build_update.php?build_id=$id' class='waves-effect waves-teal btn blue-grey lighten-5 black-text btn-hover-scale btn-margin'><i class='material-icons'>edit</i></a>
							<a href='#modal3' class='waves-effect waves-red btn blue-grey lighten-5 black-text btn-hover-scale btn-margin' id='del".$id."' onclick='modal_pass(this.id)'><i class='material-icons'>delete_forever</i></a>";
					echo '</div>
				</div>
			</a>
		</div>';
	};
		echo '</div>
	</div>';
};

require_once 'template.php';



 ?>