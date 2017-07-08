<?php
	require_once 'lib/connection.php';
	require_once 'lib/library.php';

	$bid = $_GET['bid'];
	$comment = user_input($_POST['comment']);
	$commenter_id = $_POST['user_id'];
	$sql = "INSERT INTO build_comments (comment, build_id, commenter_id, comment_date)
			VALUES ('$comment', '$bid', '$commenter_id', CURDATE())";
	mysqli_query($conn, $sql);

	$sql = "SELECT bc.*,u.username,u.display_photo FROM build_comments bc JOIN builds b ON bc.build_id = b.id JOIN users u ON bc.commenter_id = u.id ORDER BY id DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
		extract($row);
		echo '<div class="comment'.$id.'">
			<img src="'.$display_photo.'" class="circle comment-section-photo left z-depth-2">
			<p style="margin-top: 0">Posted by: <b>'.$username.'</b><br>
			<span class="build-date">'.$comment_date.'</span></p>
			<blockquote>'.$comment.'</blockquote>
			<hr>
		</div>';
	};
?>