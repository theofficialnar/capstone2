<?php

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

function alert(){
	echo "<script type='text/javascript'>
	alert(document.getElementById('alert').innerHTML);
			</script>";
};

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
	?>

