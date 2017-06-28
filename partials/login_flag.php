<?php
if(isset($_SESSION['loginFlag']) && $_SESSION['loginFlag'] == true){
	echo '<li><a href=#> Hello, ' .$_SESSION['username']. '!</a></li>';
}else{
	echo '<li> <a href="#modal1">Login</a> </li>';
}


?>