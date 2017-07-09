<?php
session_start();
require_once 'connection.php';

if(isset($_POST['editYes'])){
	$id = $_GET['id'];
	$skill_name = user_input($_POST['skill_name']);
	$description = user_input($_POST['description']);

	if($_POST['required_for'] == ""){
		$required_for = "None";
	}else{
		$required_for = user_input($_POST['required_for']);
	};

	if($_POST['unlock_requirements'] == ""){
		$unlock_requirements = "None";
	}else{
		$unlock_requirements = user_input($_POST['unlock_requirements']);
	};

	$max_level = isset($_POST['max_level']) ? $_POST['max_level'] : 1;
	$quest_skill = isset($_POST['quest_skill']) ? 'Yes' : 'No';

	//if file field for icon is left unchanged
	if($_FILES["icon"]["error"] == 4){
		$sql = "UPDATE skills SET
			skill_name = '$skill_name',
			description = '$description',
			required_for = '$required_for',
			unlock_requirements = '$unlock_requirements',
			max_level = '$max_level',
			quest_skill = '$quest_skill'
			WHERE id='$id'";
		mysqli_query($conn, $sql);
		echo '<script>
			alert("Skill information has been successfully changed!");
			window.location.replace("../skill_db.php");
		</script>';
	}else{
		$iconName = basename($_FILES["icon"]["name"]);
		$uploadOk = 0;
		$target_dir = "../ro_skill_icons/";
		$target_file = $target_dir . $iconName;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

		// var_dump($imageFileType);

		//checks if image is real, svg icons will be skipped
		if($imageFileType !== "svg"){
			$check = getimagesize($_FILES["icon"]["tmp_name"]);
			if($check !== false){
				$uploadOk = 0;
			}else{
				$uploadOk = 1;
			};
		};

		//checks if file is lesser than 500kb
		if($_FILES["icon"]["size"] > 500000){
			$uploadOk = 1;
		};


		//checks the file if the extensions are valid
		if($imageFileType !== "jpg" && $imageFileType !== "jpeg" && $imageFileType !== "gif" && $imageFileType !== "png" && $imageFileType !== "svg"){
			$uploadOk = 1;
		};

		//moves and adds the file to database if no problems are encountered
		if($uploadOk == 0){
			if(move_uploaded_file($_FILES["icon"]["tmp_name"], $target_file)){
				$target_file = substr($target_file, 3);
				$sql = "UPDATE skills SET
					skill_name = '$skill_name',
					description = '$description',
					required_for = '$required_for',
					unlock_requirements = '$unlock_requirements',
					max_level = '$max_level',
					icon = '$target_file',
					quest_skill = '$quest_skill'
					WHERE id='$id'";
				mysqli_query($conn, $sql);
				echo '<script>
					alert("Skill information has been successfully changed!");
					window.location.replace("../skill_db.php");
				</script>';
			}else{
				echo '<script>
					alert("An error was encountered when adding the skill to the database. \\n Please try again.");
					window.location.replace("../skill_db.php");
				</script>';
			};//move_uploaded_files end
		}else{
			echo '<script>
				alert("An error was encountered in uploading your photo.\\n Please make sure the file is less than 500kb and either one of the following file types .jpg, .jpeg, .gif, .png or .svg.");
				window.location.replace("../skill_db.php");
			</script>';
		}//uploadOk end
	};//file_error end
};//skillEditYes end

if(isset($_POST['editNo'])){
	header('location: ../skill_db.php');
};

?>