<?php 
	require_once 'connection.php';
	$bid = $_GET['bid'];

	$sql = "SELECT bc.*,u.username,u.display_photo FROM build_comments bc JOIN builds b ON bc.build_id = b.id JOIN users u ON bc.commenter_id = u.id WHERE build_id = '$bid' ORDER BY id DESC LIMIT 5";
	$result = mysqli_query($conn,$sql);
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