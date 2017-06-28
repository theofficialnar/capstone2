<?php
	if(isset($_POST['logInSubmit'])) {
		$username = $_POST['username'];
		$password = sha1($_POST['password']);
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			while($row = mysqli_fetch_assoc($result)){
				extract($row);
				$_SESSION['username']= $username;
				$_SESSION['role'] = $role;
				$_SESSION['loginFlag'] = true;
				echo '<span id="alert" style="display: none">Log in successful!</span>';
				alert();
				header('location: register.php');
			}
		}else{
		echo '<span id="alert" style="display: none">Account not registered!</span>';
		alert();
		}
	}

?>

<div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
    	<div class="container">
			<div class="row" id="login">
				<h3>Log in now</h3>
				<form method="POST" action="">
					<div class="input-field">
						<input type="text" name="username" id="username">
						<label for="username">Username</label>
					</div>
					<div class="input-field">
						<input type="password" name="password" id="password">
						<label for="password">Password</label>
					</div>
					<button type="submit" name="logInSubmit" class="btn waves-effect waves-effect z-depth-5">Log in</button>
				</form>
				<h6>Don't have an account? <a href="register.php" target="_blank">Register here</a></h6>
			</div>
		</div>
    </div>
</div>