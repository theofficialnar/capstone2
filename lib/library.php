<?php
// DROPDOWN
function multiDropdown($name){
	global $conn;
	echo "<select name='$name'>";
	$sql = "SELECT DISTINCT class FROM skills";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
		extract($row);
		if(isset($_POST[$name]) && $_POST[$name] == $class){
			echo "<option selected>". $class."</option>";
		}else{
			echo "<option>".$class."</option>";
		}
	}
	echo "</select>";
};

// ALERT
function alert(){
	echo "<script type='text/javascript'>
	alert(document.getElementById('alert').innerHTML);
			</script>";
};

// SKILL SUBMIT
if(isset($_POST['skillSubmit'])){
	$skill_name = addslashes($_POST['skill_name']);
	$description = addslashes($_POST['description']);
	$class = $_POST['class'];
	$required_for = addslashes($_POST['required_for']);
	$max_level = $_POST['max_level'];
	$icon = 'ro_skill_icons/' . $_POST['icon'];

	$sql = "INSERT INTO skills (skill_name, description, class, required_for, max_level, icon)
			VALUES ('$skill_name', '$description', '$class', '$required_for', '$max_level', '$icon')";

	mysqli_query($conn, $sql);
	echo 'Successfully added ' .$skill_name. ' to database!';
	// echo '<script> Materialize.toast(\'I am a toast!\', 4000)</script>';
};

// REGISTER
if(isset($_POST['registerSubmit'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pw = $_POST['password'];
	$pw2 = $_POST['pw2'];
	if($pw == $pw2){
		$password = sha1($pw);
		$sql = "INSERT INTO users (username, email, password, role)
				VALUES ('$username', '$email', '$password', 'regular')";
		mysqli_query($conn, $sql);
		echo 'Account successfully registered!<br>Welcome, '.$username;
	}else{
		echo 'Passwords do not match. Please try again.';
		}
};

//SAVE_BUILD
if(isset($_POST['saveBuild'])){
	$acct_id = $_SESSION['id'];
	$sql = "INSERT INTO builds (acct_id) VALUES ('$acct_id')";
	mysqli_query($conn, $sql);

	$sql = "SELECT * FROM builds ORDER BY builds.id DESC LIMIT 1";
	$result = mysqli_query($conn,$sql);
	while($buildId = mysqli_fetch_assoc($result)){
		extract($buildId);
		$_SESSION['buildId'] = $id;
	}

	$class = $_GET['class'];
	$sql = "SELECT * FROM skills WHERE class='$class'";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
		extract($row);
		$build_id = $_SESSION['buildId'];
		$skill_name = str_replace(' ', '_', $skill_name);
		$skill_level = $_POST["$skill_name"];
		$sql = "INSERT INTO skill_sims (skill_id, level, build_id) VALUES ('$id', '$skill_level', '$build_id')";
		mysqli_query($conn,$sql);
		// echo "skill id: $id, skill name: $skill_name, skill level: $skill_level, acct id: $acct_id, build id: $build_id<br>";
		
	}
	echo 'Build successfully saved.';
};


	?>

