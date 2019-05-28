<?php
	session_start();
	session_unset("username");
	echo"Huy session thanh cong <br>";
	echo"<a href='../?ac=home'>Back Login</a>";
?>