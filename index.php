<?php
function header_title(){
	echo 'Home Page';
};

function get_title(){
	echo 'myRagnarok db';
};

function display_content(){
	global $conn;
	echo '<div class="container">
		<div class="row">
			<h1>Latest News</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="row">
			<div class="col l6 m6 s12">
				<h4>Top Builds</h4>
			</div>
			<div class="col l6 m6 s12 bg z-depth-2">
				<div class="index-header center-align">
					<h4>Latest Builds</h4>
				</div>';
				$sql = "SELECT * FROM builds b JOIN users u ON b.acct_id = u.id  
						ORDER BY b.build_date  ASC";
				$result = mysqli_query($conn, $sql);
				while($row = mysqli_fetch_assoc($result)){
					extract($row);
					echo '<div>
						<div class="row">
							<div class="col l6">
								<span><b>'.strtoupper($build_name).'</b></span>
							</div>
							<div class="col l6">
								<span><i>'.$build_date.'</i></span>
							</div>
						</div>
						<p>'.$build_description.'</p>
						<span>'.$username.'</span><hr>
					</div>';
				}
			echo '</div>
		</div>
	</div>';
};

require_once 'template.php';

?>