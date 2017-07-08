<?php
require_once 'connection.php';
if(isset($_POST['skillSubmit'])){
	if($_FILES["icon"]["error"] == 4){
		echo '<script>
			alert("Icon field cannot be empty!");
			window.location.replace("../add_skill.php");
		</script>';
	}else{
		$iconName = basename($_FILES["icon"]["name"]);
		$uploadOk = 0;
		$target_dir = "../ro_skill_icons/";
		$target_file = $target_dir . $iconName;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

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
				$skill_name = user_input($_POST['skill_name']);
				$description = user_input($_POST['description']);
				$class = $_POST['class'];
				$target_file = substr($target_file, 3);
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

				$sql = "INSERT INTO skills (skill_name, description, class, required_for, max_level, icon, quest_skill, unlock_requirements)
				VALUES ('$skill_name', '$description', '$class', '$required_for', '$max_level', '$target_file', '$quest_skill', '$unlock_requirements')";
				mysqli_query($conn, $sql);
				echo '<script>
					alert("Skill has successfully added to the database.");
					window.location.replace("../add_skill.php");
				</script>';
			}else{
				echo '<script>
					alert("An error was encountered when adding the skill to the database. \\n Please try again.");
					window.location.replace("../add_skill.php");
				</script>';
			};//move_uploaded_files end
		}else{
			echo '<script>
				alert("An error was encountered in uploading your photo.\\n Please make sure the file is less than 500kb and either one of the following file types .jpg, .jpeg, .gif, .png or .svg.");
				window.location.replace("../add_skill.php");
			</script>';
		}//uploadOk end
	};//file_error end
};//skillSubmit end
?>