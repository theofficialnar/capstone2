<?php
	require_once 'connection.php';
	$sql = "SELECT c.*,u.username,u.id FROM chats c JOIN users u ON c.user_id = u.id ORDER by c.date ASC";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
		extract($row);
		echo '<span class="chat_name">'.$username.'</span>
		<span class="right build-date">'.$date.'</span>
		<br>
		<span class="chat_msg">'.$msg.'</span><hr>';
	};


?>