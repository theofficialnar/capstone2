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
			echo '<div class="card blue-grey">
				<div class="card-content white-text">
					<span class="card-title">'.$build_name.'</span>
					<p class="build-date">'.$build_date.'</p>
					<p>'.$build_description.'</p>
				</div>
				<div class="card-action center-align">';
					echo "<a href='build.php?build_id=$id' class='waves-effect btn'>View</a>
						<a href='build_update.php?build_id=$id' class='waves-effect btn'>Update</a>
						<a href='#modal3' class='waves-effect btn' id='del".$id."' onclick='modal_pass(this.id)'>Delete</a>";
				echo '</div>
			</div>';
	};
			echo '</div>
		</div>
	</div>
	<div id="modal3" class="modal">
		<div class="modal-content">
			<h4>Are you sure you want to delete this build?</h4>
			<span id="delIdReceiver" style="display: none"></span>
		</div>
		<div class="modal-footer">
			<button id="deleteBuildYes" class="btn">Yes</button>
			<button id="deleteBuildNo" class="btn">No</button>
		</div>
	</div>';
};

require_once 'template.php';

?>