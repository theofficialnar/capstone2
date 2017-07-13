<?php
	require_once 'connection.php';
	$sql = "SELECT * FROM (SELECT c.user_id,c.msg,c.date,u.username,u.id FROM chats c JOIN users u ON c.user_id = u.id ORDER BY c.date DESC LIMIT 20) AS cu ORDER BY date ASC";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
		extract($row);
		echo '<span class="chat_name">'.$username.'</span>
		<span class="right build-date">'.$date.'</span>
		<br>
		<span class="chat_msg">'.$msg.'</span><hr>';
	};


?>