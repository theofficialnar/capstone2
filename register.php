<?php

function header_title(){
	echo 'Registration';
};

function get_title(){
	echo 'myRagnarok db | Register';
};

function display_content(){
	global $conn;
	echo '<div class="container">
			<div class="main-body-wrapper">
				<form method="POST" action="">
					<div class="input-field">
						<input type="text" name="username" id="username">
						<label for="username">Username</label>
					</div>
					<div class="input-field">
						<input type="text" name="email" id="email">
						<label for="email">Email</label>
					</div>
					<div class="input-field">
						<input type="password" name="password" id="password">
						<label for="password">Password</label>
					</div>
					<div class="input-field">
						<input type="password" name="pw2" id="pw2">
						<label for="pw2">Confirm Password</label>
					</div>
					<input type="submit" name="registerSubmit">
				</form>
			</div>
	</div>';
};

require_once 'template.php';
?>