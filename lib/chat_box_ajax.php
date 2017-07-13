<?php
	require_once 'connection.php';
	require_once 'library.php';
	
	$user_id = $_GET['uid'];
	$msg = user_input($_POST['msg']);
	$sql = "INSERT INTO chats (user_id, msg) VALUES ('$user_id','$msg')";
	mysqli_query($conn, $sql);
	$last_row = mysqli_insert_id($conn);

	$sql = "SELECT c.*,u.username,u.id FROM chats c JOIN users u ON c.user_id = u.id WHERE c.id = '$last_row'";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
		extract($row);
		echo '<span class="chat_name">'.$username.'</span>
		<span class="right build-date">'.$date.'</span>
		<br>
		<span class="chat_msg">'.$msg.'</span><hr>';
	};
 ?>