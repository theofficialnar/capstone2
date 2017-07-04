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
			<div class="col l8 m8 s12 offset-l2 offset-m2">';
	$sql = "SELECT * FROM builds WHERE acct_id = '$acct_id'";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
		extract($row);
			echo '<div class="card blue-grey darken-1">
				<div class="card-content white-text">
					<span class="card-title">'.$build_name.'</span>
					<p class="build-date">'.$build_date.'</p>
					<p>'.$build_description.'</p>
				</div>
				<div class="card-action center-align">';
					echo "<a href='build.php?build_id=$id'><button>View</button></a>";
				echo '</div>
			</div>';
	};
			echo '</div>
		</div>
	</div>';
};

require_once 'template.php';

?>