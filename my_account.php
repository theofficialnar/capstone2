<?php
function header_title(){
	echo 'My Account';
};

function get_title(){
	echo 'myRagnarok db | My Account';
};

function display_content(){
	global $conn;
	$uid = $_SESSION['id'];
	echo '<div class="container">
		<div class="row">
			';
			$sql = "SELECT * FROM users WHERE id = '$uid'";
			$result = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_assoc($result)){
				extract($row);
					echo '<form method="POST" action="lib/acct_update.php" enctype="multipart/form-data">
						<div class="col l8 m8 s12 offset-l2 offset-m2 bg margin-top center-align">
							<div class="row">
									<div class="col l4 m4 s4">
										<img src="'.$display_photo.'" alt="user_photo" class="circle change-profile-photo">
									</div>
									<div class="col l8 m8 s8 left-align">
										<h5>Update display photo</h5>
										<input type="file" name="display_photo">
									</div>
							</div>
							<div class="input-field">
								<input type="text" name="email" id="email">
								<label for="email">Change Email</label>
							</div>
							<div class="input-field">
								<input type="password" name="password" id="password">
								<label for="password">Change Password</label>
							</div>
							<div class="input-field">
								<input type="password" name="pw2" id="pw2">
								<label for="pw2">Confirm Password</label>
							</div>
							<button type="submit" name="updateAcct" class="btn btn-blue"><i class="right material-icons">save</i>Save Changes</button>
						</div>
					</form>';
			};//while end
							echo '
				
			
		</div>
	</div>';
};//function end

require_once 'template.php';
?>