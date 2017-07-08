<?php
// DROPDOWN
function multiDropdown($name){
	global $conn;
	echo "<select name='$name'>";
	echo '<option value="none" disabled selected>Choose an option</option>';
	$sql = "SELECT DISTINCT class FROM skills ORDER BY id ASC";
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
		echo '<span id="alert" style="display: none">Account successfully registered!</span>';
		alert();
	}else{
		echo '<span id="alert" style="display: none">Passwords do not match. Please try again.</span>';
		alert();
		}
};

//SAVE_BUILD
if(isset($_POST['saveBuild'])){
	$acct_id = $_SESSION['id'];
	$build_name = trim(addslashes($_POST['build_name']));
	$build_description = trim(addslashes($_POST['build_description']));
	// echo "build name: $build_name, build description: $build_description<br>";
	$sql = "INSERT INTO builds (acct_id, build_name, build_description, build_date)
			VALUES ('$acct_id', '$build_name', '$build_description', CURDATE())";
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
		$pts_left = $_POST['sp_left'];
		$sql = "INSERT INTO skill_sims (skill_id, level, build_id, pts_left) VALUES ('$id', '$skill_level', '$build_id', '$pts_left')";
		mysqli_query($conn,$sql);
		// echo "skill id: $id, skill name: $skill_name, skill level: $skill_level, acct id: $acct_id, build id: $build_id <br>";
		
	}
	echo '<span id="alert" style="display: none">Build successfully saved.</span>';
	alert();
};

//GENERATE REPORT
if(isset($_POST['genRep'])){
	$class = $_GET['class'];
	$sql = "SELECT * FROM skills WHERE class='$class'";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
		extract($row);
		$skill_name = str_replace(' ', '_', $skill_name);
		$skill_level = $_POST["$skill_name"];
		echo "skill id: $id, skill name: $skill_name, skill level: $skill_level<br>";
	};
};

//SKILL_EDIT
if(isset($_POST['editYes'])){
	$id = $_GET['id'];
	$skill_name = trim(addslashes($_POST['skill_name']));
	$description = trim(addslashes($_POST['description']));
	if($_POST['required_for'] == ""){
		$required_for = "None";
	}else{
		$required_for = trim(addslashes($_POST['required_for']));
	};
	if($_POST['unlock_requirements'] == ""){
		$unlock_requirements = "None";
	}else{
		$unlock_requirements = trim(addslashes($_POST['unlock_requirements']));
	};
	$max_level = isset($_POST['max_level']) ? $_POST['max_level'] : 1;
	$icon = 'ro_skill_icons/' . $_POST['icon'];
	$quest_skill = isset($_POST['quest_skill']) ? 'Yes' : 'No';
	$sql = "UPDATE skills SET
			skill_name = '$skill_name',
			description = '$description',
			required_for = '$required_for',
			unlock_requirements = '$unlock_requirements',
			max_level = '$max_level',
			icon = '$icon',
			quest_skill = '$quest_skill'
			WHERE id='$id'";
	mysqli_query($conn, $sql);
	header('location: skill_db.php');
};

if(isset($_POST['editNo'])){
	header('location: skill_db.php');
};

// SKILL_DELETE
if(isset($_POST['deleteYes'])){
	$sql = "DELETE FROM skills WHERE id = '$id'";
	mysqli_query($conn, $sql);
	header('location: skill_db.php');
};

if(isset($_POST['deleteNo'])){
	header('location: skill_db.php');
};

//BUILD UPDATE
if(isset($_POST['updateBuild'])){
	$build_id = $_GET['build_id'];
	$sql = "SELECT * FROM skill_sims ss JOIN skills s ON ss.skill_id=s.id WHERE build_id = '$build_id'";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
		extract($row);
		$skill_name = str_replace(' ', '_', $skill_name);
		$skill_level = $_POST["$skill_name"];
		$pts_left = $_POST['sp_left'];
		$sql = "UPDATE skill_sims SET
				level = '$skill_level',
				pts_left = '$pts_left'
				WHERE skill_id = '$skill_id' AND build_id = '$build_id'";
		mysqli_query($conn, $sql);
		header('location: my_builds.php');
	};
};

//ACCOUNT UPDATE
// if(isset($_POST['updateAcct'])){
// 	$uid = $_SESSION['id'];
// 	$new_display_photo = 'images/' . $_POST['display_photo'];
// 	$new_email = $_POST['email'];
// 	$new_pw1 = $_POST['password'];
// 	$new_pw2 = $_POST['pw2'];
// 	if($new_pw1 == "" || $new_pw2 == ""){
// 		if($new_email == ""){
// 			$sql = "UPDATE users SET
// 			display_photo = '$new_display_photo'
// 			WHERE id = '$uid'";
// 			mysqli_query($conn, $sql);
// 			echo '<span id="alert" style="display: none">Account updated!</span>';
// 			alert();
// 		}else{
// 			$sql = "UPDATE users SET
// 				display_photo = '$new_display_photo',
// 				email = '$new_email'
// 				WHERE id = '$uid'";
// 			mysqli_query($conn, $sql);
// 			echo '<span id="alert" style="display: none">Account updated!</span>';
// 			alert();
// 		}
// 	}else{
// 		if($new_pw1 == $new_pw2){
// 			$new_password = sha1($new_pw1);
// 			if($new_email == ""){
// 				$sql = "UPDATE users SET
// 				display_photo = '$new_display_photo',
// 				password = '$new_password'
// 				WHERE id = '$uid'";
// 				mysqli_query($conn, $sql);
// 				echo 'Account updated!';
// 			}else{
// 				$sql = "UPDATE users SET
// 				display_photo = '$new_display_photo',
// 				email = '$new_email',
// 				password = '$new_password'
// 				WHERE id = '$uid'";
// 				mysqli_query($conn, $sql);
// 				echo '<span id="alert" style="display: none">Account updated!</span>';
// 				alert();
// 			}
// 		}else{
// 			echo '<span id="alert" style="display: none">Passwords don\'t match!</span>';
// 			alert();
// 		}
// 	};
// };

	?>

