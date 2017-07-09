<?php

function header_title(){
	echo 'Registration';
};

function get_title(){
	echo 'myRagnarok db | Register';
};

function display_content(){
	global $conn;
	$unameErr = $emailErr = $pwErr = "";
	if(isset($_POST['registerSubmit'])){
		$registerErr = 0;

		$sql = "SELECT * FROM users";
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result)){
			extract($row);
			$uname = register_input($_POST['username']);
			if($username == $uname){
				$unameErr = "Username already taken.";
				$registerErr = 1;
			};
		};//while end

		if(!preg_match("/^[a-z\d_]{3,20}$/i", $uname)){
			$unameErr = "Username must be between 3 to 20 characters long in alphanumeric and _ characters.";
			$registerErr = 1;
		};

		$email = register_input($_POST['email']);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$emailErr = "Please enter a valid email address!";
			$registerErr = 1;
		};
		
		$pw = register_input($_POST['password']);
		$pw2 = register_input($_POST['pw2']);

		if($registerErr == 0){
			if($pw == $pw2){
				$password = sha1($pw);
				$sql = "INSERT INTO users (username, email, password, role)
						VALUES ('$uname', '$email', '$password', 'regular')";
				mysqli_query($conn, $sql);
				echo '<span id="alert" style="display: none">Account successfully registered! Welcome, '.$uname.'</span>';
				alert();


			}else{
				$pwErr = "Password's don't match!";
				}
		};
	};//isset end

	echo '<div class="container">
		<div class="row">
			<div class="bg margin-top col l8 m8 s12 offset-l2 offset-m2 z-depth-2 center-align">
				<h5>Join our growing community!</h5>
				<form method="POST" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'">
					<div class="input-field">
						<input type="text" name="username" id="username" pattern=".{3,20}" required title="Username must be between 3 to 20 characters long in alphanumeric and _ characters.">
						<label for="username">Username</label>
					</div>
					<div class="input-field">
						<input type="email" name="email" id="email" required title="Please input a valid email address.">
						<label for="email">Email</label>
					</div>
					<div class="input-field">
						<input type="password" name="password" id="password" pattern=".{3,}" required title="Password must be at least 3 characters long.">
						<label for="password">Password</label>
					</div>
					<div class="input-field">
						<input type="password" name="pw2" id="pw2" pattern=".{3,}" required title="Password must be at least 3 characters long.">
						<label for="pw2">Confirm Password</label>
					</div>
					<div class="left-align">
						<span class="red-text text-darken-4"><b>'.$unameErr.'</b></span><br>
						<span class="red-text text-darken-4"><b>'.$emailErr.'</b></span><br>
						<span class="red-text text-darken-4"><b>'.$pwErr.'</b></span>
					</div>
					<button type="submit" name="registerSubmit" class="btn btn-blue"><i class="right material-icons">send</i>Register</button>
				</form>
			</div>
		</div>
	</div>';
};

require_once 'template.php';
?>