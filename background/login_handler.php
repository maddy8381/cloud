<?php
	
	$email = $_GET['email'];
	$password = md5($_GET['password']);
	
	require '../include/db_config.php';
    $db = new Database();
	$conn = $db->getConnection();
	
		$query = "SELECT * FROM user WHERE email = '$email' and password = '$password'";

		$q = $conn->query($query);
		$cnt=0;		
		if($q->setFetchMode(PDO::FETCH_ASSOC))
		{
			
			while ($r = $q->fetch()) {
				 $email = $r['email'];
				 $f_name = $r['f_name'];
				 $l_name = $r['l_name'];
				 $mobile_no = $r['mobile_no'];
				 $plan_id = $r['plan_id'];
 				 $cnt++;
			}
			
		}
		if($cnt==0)
			{
				echo $cnt;
			}
			else{
				session_start();
				$_SESSION['email'] = $email;
				$_SESSION['f_name']=$f_name;
				$_SESSION['l_name']=$l_name;
				$_SESSION['mobile_no']=$mobile_no;
				$_SESSION['plan_id']=$plan_id;
				echo "12345";
		}

	
?>



	
