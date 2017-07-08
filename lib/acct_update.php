<?php
session_start();
require_once 'connection.php';
require_once 'library.php';
global $conn;
$uid = $_SESSION['id'];
if(isset($_POST['updateAcct'])){
	$newEmail = register_input($_POST['email']);
	$newPw1 = register_input($_POST['password']);
	$newPw2 = register_input($_POST['pw2']);

	if($_FILES["display_photo"]["error"] != 4){
		$newDP = basename($_FILES["display_photo"]["name"]);
		$fileExistFlag = 0;
		$sql = "SELECT file_name FROM users WHERE file_name = '$newDP'";
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result)){
			extract($row);
			if($file_name === $newDP){
				$fileExistFlag = 1;
			}
		};

		if($fileExistFlag == 0){
			$uploadOk = 0;
			$target_dir = "../uploads/";
			$target_file = $target_dir . $newDP;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

			$check = getimagesize($_FILES["display_photo"]["tmp_name"]);
			if($check !== false){
				$uploadOk = 0;
			}else{
				$uploadOk = 1;
			};

			if($_FILES["display_photo"]["size"] > 500000){
				$uploadOk = 1;
			};

			if($imageFileType !== "jpg" && $imageFileType !== "jpeg" && $imageFileType !== "gif" && $imageFileType !== "png"){
				$uploadOk = 1;
			};

			if($uploadOk == 0){
				if(move_uploaded_file($_FILES["display_photo"]["tmp_name"], $target_file)){
					$target_file = substr($target_file, 3);
					if($newPw1 == "" || $newPw2 == ""){
						if($newEmail == ""){
							$sql = "UPDATE users SET
							display_photo = '$target_file',
							file_name = '$newDP'
							WHERE id = '$uid'";
							mysqli_query($conn, $sql);
							echo '<script>
								alert("Account details updated!");
								window.location.replace("../my_account.php");
							</script>';
						}else if(!filter_var($newEmail, FILTER_VALIDATE_EMAIL)){
							echo '<script>
								alert("Please input a valid email address.");
								window.location.replace("../my_account.php");
							</script>';
						}else{
							$sql = "UPDATE users SET
							display_photo = '$target_file',
							file_name = '$newDP',
							email = '$newEmail'
							WHERE id = '$uid'";
							mysqli_query($conn, $sql);
							echo '<script>
								alert("Account details updated!");
								window.location.replace("../my_account.php");
							</script>';
						};
					}else{
						if($newPw1 == $newPw2){
							$newPassword = sha1($newPw1);
							if($newEmail == ""){
								$sql = "UPDATE users SET
								display_photo = '$target_file',
								file_name = '$newDP',
								password = '$newPassword'
								WHERE id = '$uid'";
								mysqli_query($conn, $sql);
								echo '<script>
									alert("Account details updated!");
									window.location.replace("../my_account.php");
								</script>';
							}else if(!filter_var($newEmail, FILTER_VALIDATE_EMAIL)){
								echo '<script>
									alert("Please input a valid email address.");
									window.location.replace("../my_account.php");
								</script>';
							}else{
								$sql = "UPDATE users SET
								display_photo = '$target_file',
								file_name = '$newDP',
								email = '$newEmail',
								password = '$newPassword'
								WHERE id = '$uid'";
								mysqli_query($conn, $sql);
								echo '<script>
									alert("Account details updated!");
									window.location.replace("../my_account.php");
								</script>';
							};
						}else{
							echo '<script>
								alert("Passwords don\'t match!");
								window.location.replace("../my_account.php");
							</script>';
						};

					};
				}else{
					echo '<script>
						alert("An error was encountered in uploading your photo.");
						window.location.replace("../my_account.php");
					</script>';
				};
			};//Upload ok end

		}else{
			echo '<script>
				alert("The photo already exists in the directory, please choose another one.");
				window.location.replace("../my_account.php");
			</script>';
		};//file exist end
	}else{
		if($newPw1 == "" || $newPw2 == ""){
			if($newEmail != "" && filter_var($newEmail, FILTER_VALIDATE_EMAIL)){
				$sql = "UPDATE users SET
				email = '$newEmail'
				WHERE id = '$uid'";
				mysqli_query($conn, $sql);
				echo '<script>
					alert("Account details updated!");
					window.location.replace("../my_account.php");
				</script>';
			}else{
				echo '<script>
					alert("Please input a valid email address.");
					window.location.replace("../my_account.php");
				</script>';
			}
		}else{
			if($newPw1 == $newPw2){
				$newPassword = sha1($newPw1);
				if($newEmail == ""){
					$sql = "UPDATE users SET password = '$newPassword' WHERE id = '$uid'";
					mysqli_query($conn, $sql);
					echo '<script>
						alert("Account details updated!");
						window.location.replace("../my_account.php");
					</script>';
				}else{
					$sql = "UPDATE users SET email = '$newEmail',
					password = '$newPassword'
					WHERE id = '$uid'";
					mysqli_query($conn, $sql);
					echo '<script>
						alert("Account details updated!");
						window.location.replace("../my_account.php");
					</script>';
				};
			}else{
				echo '<script>
					alert("Passwords don\'t match!");
					window.location.replace("../my_account.php");
				</script>';
			};
		};
	};
};//isset end
?>