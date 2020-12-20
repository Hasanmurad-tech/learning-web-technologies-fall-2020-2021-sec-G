<?php

	setcookie('isValid', 'true', time()-3500, '/');
	header('location: ../view/login.php');

?>