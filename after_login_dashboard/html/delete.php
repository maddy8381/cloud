<?php

	$f_name = $_GET['file_name'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "secured_cloud";
	session_start();
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$folder_name = $_SESSION['folder_name'];
	// sql to delete a record
	$sql = "DELETE FROM files WHERE file_name = '$f_name' and user = 'sgmadankar@gmail.com' and folder_name = '$folder_name' ";

	echo $f_name;
	if ($conn->query($sql) === TRUE) {

	echo "<script>alert('File Deleted Successfully');window.location.href='./files_handler.php';</script>";
	} else {
	    
	echo "<script>alert('Error In deleting File');window.location.href='./files_handler.php';</script>";
	}

	$conn->close();


?>