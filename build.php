<?php
ob_start();
function header_title(){
	echo 'Build View';
};

function get_title(){
	echo 'myRagnarok db | Build View';
};

function display_content(){
	global $conn;
	$build_id = $_GET['build_id'];
	echo '<div class="container">';
		$sql = "SELECT DISTINCT b.*,c.class_icon FROM classes c JOIN skills s ON c.class_name=s.class JOIN skill_sims ss ON ss.skill_id=s.id JOIN builds b ON ss.build_id=b.id WHERE b.id = '$build_id'";
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result)){
			extract($row);
			echo '<div class="row">
				<div class="margin-top bg col l10 m12 s12 offset-l1 z-depth-2">
					<div class="row">
						<img src="'.$class_icon.'" class="left responsive-img" style="padding-right: 15px">
						<h2>'.$build_name.'</h2>
						<hr>
						<span>'.$build_date.'</span>
					</div>
					<div class="row">
						<span class="flow-text">'.$build_description.'</span>
					</div>
				</div>
			</div>';
		};//while end

		echo '<div class="row">
			<div class="col l8 m10 s12 offset-l2 offset-m1">
				<div class="col l10 m8 s8" style="padding: 0">
					<h4>Skill Name</h4>
				</div>
				<div class="col l2 m4 s4 center-align" style="padding: 0">
					<h4>Level</h4>
				</div>';
		$sql = "SELECT * FROM builds b JOIN skill_sims ss ON b.id = ss.build_id JOIN skills s ON ss.skill_id = s.id WHERE build_id = '$build_id'";
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result)){
			extract($row);
				echo '<div class="col l10 m8 s8" style="padding: 0">';
					if($quest_skill == 'Yes'){
					echo '<p class="skill-db-header"><img src="'.$icon.'"> '.$skill_name.' <span class="quest-marker">[ Quest Skill ]</span></p>';
					}else{
					echo '<p class="skill-db-header"><img src="'.$icon.'"> '.$skill_name.'</p>';
					};
				echo '</div>
				<div class="col l2 m4 s4 center-align" style="padding: 0">	
					<p>'.$level.'</p>
				</div>';
		};//while end
			echo '</div>
		</div>
		<div class="row comment-section">
			<div class="margin-top bg col l10 m12 s12 offset-l1 z-depth-2">
				<h5>Have something to say?</h5>';
				if(isset($_SESSION['loginFlag']) && $_SESSION['loginFlag'] == true){
					echo '<div class="input-field">
						<span style="display: none" id="build_id">'.$build_id.'</span>
						<span style="display: none" id="user_id">'.$_SESSION['id'].'</span>
						<textarea name="build_comment" id="build_comment" class="materialize-textarea"></textarea>
						<label for="build_comment">Leave a comment</label>
						<button id="build-comment-submit" class="btn btn-blue">Comment</button>
					</div>';
				}else{
					echo '<div class="comment-blocker">
						<h3 class="comment-blocker-text center-align">Please <a href="#modal1">log in</a> to leave a comment.</h3>
						<div class="input-field disable">
							<textarea name="build_comment" id="build_comment" class="materialize-textarea"></textarea>
							<label for="build_comment">Leave a comment</label>
							<button id="build-comment-submit" class="btn btn-blue">Comment</button>
						</div>
					</div>';
				};
				echo '<div id="comment-section" class="margin-top">';
				$sql = "SELECT bc.*,u.username,u.display_photo FROM build_comments bc JOIN builds b ON bc.build_id = b.id JOIN users u ON bc.commenter_id = u.id WHERE build_id = '$build_id' ORDER BY id DESC LIMIT 5";
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
				echo '</div>
				<div>';
					$sql = "SELECT COUNT(*) comments FROM build_comments WHERE build_id = '$build_id'";
					$result = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($result)){
						extract($row);
						if($comments >= 5){
							echo '<button id="showMore">Show more</button>
							<button id="showLess" style="display: none">Show less</button>';
						};
					};
				echo '</div>
			</div>
		</div>
	</div>';
};

require_once 'template.php';
ob_end_flush();
?>