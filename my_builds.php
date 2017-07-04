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
	$sql = "SELECT * FROM builds WHERE acct_id = '$acct_id'";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
		extract($row);
		echo "<a href='build.php?build_id=$id'>";
			echo '<div class="card blue-grey z-depth-5" id="buildCards">
				<div class="card-content white-text">
					<span class="card-title"><b>'.strtoupper($build_name).'</b></span>
					<p class="build-date">'.$build_date.'</p>
					<p>'.ucfirst($build_description).'</p>
				</div>
				<div class="card-action center-align">';
					echo "<button class='waves-effect waves-teal btn blue-grey lighten-5 black-text btn-hover-scale'>Update</button>
						<a href='#modal3' class='waves-effect waves-red btn blue-grey lighten-5 black-text btn-hover-scale' id='del".$id."' onclick='modal_pass(this.id)'>Delete</a>";
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
			<button id="deleteBuildYes" class="btn">Yes</button>
			<button id="deleteBuildNo" class="btn">No</button>
		</div>
	</div>';
};

require_once 'template.php';

?>