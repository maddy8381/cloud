<?php
	
	session_start();
	unset($_SESSION['email']);
	unset($_SESSION['f_name']);
	unset($_SESSION['l_name']);
	unset($_SESSION['mobile_no']);
	unset($_SESSION['plan_id']);
	session_destroy();
	echo "<script type='text/javascript'>
     window.location.href='../../index.php'</script>";

?>