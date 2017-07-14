<?php
function header_title(){
	echo 'My Builds';
};

function get_title(){
	echo 'myRagnarok db | My Builds';
};

function display_content(){
	global $conn;
	$acct_id = $_SESSION['id'];

	echo '<div class="container">
		<div class="row">
			<div class="col l8 m8 s12 offset-l2 offset-m2 margin-top" id="build-container">';
	$sql = "SELECT DISTINCT b.*,c.class_icon FROM classes c JOIN skills s ON c.class_name=s.class JOIN skill_sims ss ON ss.skill_id=s.id JOIN builds b ON ss.build_id=b.id WHERE acct_id = '$acct_id'";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
		extract($row);
		echo "<a href='build.php?build_id=$id' style='color: inherit'>";
			echo '<div class="card indigo lighten-3 z-depth-5">
				<div class="card-content">
					<img src="'.$class_icon.'" class="left responsive-img" style="padding-right: 15px">
					<span class="card-title black-text"><b>'.strtoupper($build_name).'</b></span><hr>
					<p class="build-date black-text">'.$build_date.'</p>
					<p class="black-text">'.ucfirst($build_description).'</p>
				</div>
				<div class="card-action center-align">';
					echo "<a href='build_update.php?build_id=$id' class='waves-effect waves-teal btn blue-grey lighten-5 black-text btn-hover-scale btn-margin'><i class='material-icons'>edit</i></a>
						<a href='#modal3' class='waves-effect waves-red btn blue-grey lighten-5 black-text btn-hover-scale btn-margin' id='del".$id."' onclick='modal_pass(this.id)'><i class='material-icons'>delete_forever</i></a>";
				echo '</div>
			</div>
		</a>';
	};
			echo '</div>
		</div>
	</div>
	<div id="modal3" class="modal">
		<div class="modal-content center-align">
			<h4>Are you sure you want to delete this build?</h4>
			<span id="delIdReceiver" style="display: none"></span>
		</div>
		<div class="modal-footer center-align">
			<button id="deleteBuildYes" class="btn red accent-1 btn-hover-scale btn-margin"><i class="material-icons">check</i></button>
			<button id="deleteBuildNo" class="modal-close btn teal accent-4 btn-hover-scale btn-margin"><i class="material-icons">close</i></button>
		</div>
	</div>';
};

require_once 'template.php';

?>