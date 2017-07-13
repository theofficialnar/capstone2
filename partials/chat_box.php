<?php
$user_id = $_SESSION['id'];

echo '<div class="fixed-action-btn">
	<a class="btn-floating btn-large blue pulse" id="cbTrigger">
		<i class="material-icons">question_answer</i>
	</a>
</div>

<div id="chatBox" class="cb_modal z-depth-5">
	<div class="cb_content">
		<div class="close_container">
			<span class="cbClose">&times;</span>
		</div>
		<div class="chat_data"></div>';
		if(isset($_SESSION['loginFlag']) && $_SESSION['loginFlag'] == true){
		echo '<div class="chat_input">
			<textarea name="msg" placeholder="Say something..." class="cb_textarea" maxlength="255"></textarea>
			<button id="cbSubmit" class="btn btn-blue btn-full-width">Send</button>
			<span style="display: none" id="cb_uid">'.$user_id.'</span>
		</div>';
		}else{
		echo '<div>
			<h4 class="center-align">Please <a href="#modal1" id="cb_login">log in</a> to join the chat.</h4>
		</div>';
		};
	echo '</div>
</div>';

?>