<?php 
	session_start();
	$folder_name = ($_GET['folder_name']);
	$email = $_SESSION['email'];

	require '../include/db_config.php';
	$db = new Database();
	$conn = $db->getConnection();
	$cnt = 0;
	$creation_date=11;
	$folder_size=11;
	$query = "SELECT user FROM folders where user = '$email' and folder_name = '$folder_name' ";
	$q = $conn->query($query);
		
	$q->setFetchMode(PDO::FETCH_ASSOC);
	while ($r = $q->fetch()) {
		$cnt++;
	}


	if($cnt == 1){

		echo '0';

				
		
	}
	else{

		$query = "INSERT INTO folders(folder_name,user,creation_date,folder_size) values ('$folder_name', '$email','$creation_date','$folder_size')";
		
		if($conn->query($query))
		{
				echo '<div class="alert alert-success">
							  <strong>folder Created Successfully</strong><br>
				</div>';
		}
		else
		{
			echo '0';
		}
		
	}
	
?>