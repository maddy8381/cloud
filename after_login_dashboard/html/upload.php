<?php

session_start();
if(isset($_GET['folder_name']))
    {
        $folder_name= $_GET['folder_name'];
    }
	$folder_name = $_SESSION['folder_name'];
	$email_abc =$email = $_SESSION['email'];
     $email = substr_replace($email ,"",-4);


	//echo $folder_name;
	$teamid=$_FILES['upfile']['name'];
    $file_extension = substr($teamid, -4);

    $teamid = substr_replace($teamid ,"",-4);

	require 'include/db_config.php';
	$db = new Database();
	$conn = $db->getConnection();
	$message = 'Successfully submitted the solution.<br>Your selected domain is <b></b>.<br>Your teamId is:<b> </b>.';
	if(isset($_FILES['upfile'])){
	
	$path = $_FILES['upfile']['name'];
	$flag=0;
	$ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
	if ($ext=="pdf") {
		if (move_uploaded_file($_FILES['upfile']['tmp_name'], "5AqZSwX321/".$teamid)){
			fsplit("5AqZSwX321/".$teamid,$conn);
			$flag=1;

		}
        else
		{
			echo "Failed to upload file";
		}	
	}
    else if($ext == "jpg"){
        if (move_uploaded_file($_FILES['upfile']['tmp_name'], "5AqZSwX321/".$teamid)){
            fsplit("5AqZSwX321/".$teamid,$conn);
            $flag=1;

        }
        else
        {
            echo "Failed to upload file";
        }   
    }
    else if($ext == "mp3"){
        if (move_uploaded_file($_FILES['upfile']['tmp_name'], "5AqZSwX321/".$teamid)){
            fsplit("5AqZSwX321/".$teamid,$conn);
            $flag=1;

        }
        else
        {
            echo "Failed to upload file";
        }   
    }
    else
	{
		echo "<script> alert('ONLY PDF IS ALLOWED');
		window.location.href='finalSubmisson.php'; </script>";
	}
	if($flag==1)
	{
		
		
	}	
	}

	// Import the PHP AES Encryption class
    // $target_dir = "uploads/";
    // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    // if(isset($_POST["submit"])) {
    //      $uploadOk = 1;
    // }
    // // Check if file already exists
    // if (file_exists($target_file)) {
    //     echo "Sorry, file already exists.";
    //     $uploadOk = 0;
    // }
    // // Check if $uploadOk is set to 0 by an error
    // if ($uploadOk == 0) {
    //     echo "Sorry, your file was not uploaded.";
    // // if everything is ok, try to upload file
    // } 
    // else {
    //     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    //         echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    //         fsplit("uploads/".$_FILES["fileToUpload"]["name"]);
    //         //deleteAllFromFolder('uploads/splits/');
    //         //deleteFile('uploads');
    //     } else {
    //         echo "Sorry, there was an error uploading your file.";
    //     }
    // }

    function deleteAllFromFolder($folder)
    {
        //Get a list of all of the file names in the folder.
        $files = glob($folder . '/*');

        //Loop through the file list.
        foreach($files as $file){
            //Make sure that this is a file and not a directory.
            if(is_file($file)){
                //Use the unlink function to delete the file.
                unlink($file);
            }
        }
    }

    function deleteFile($file)
    {
        if (!unlink($file))
          {
          echo ("Error deleting $file");
          }
        else
          {
          echo ("Deleted $file");
          }
    }
    
    //file-split in php
    function fsplit($file,$conn,$buffer=1024*100){
        
        //open file to read
        $file_handle = fopen($file,'r');
        //get file size
        $file_size = filesize($file);
        //no of parts to split
        $parts = $file_size / $buffer;

        //store all the file names
        $file_parts = array();
        
        //store all the keys
        $keys_of_fragments=array();

        //name of input file
        $file_name = basename($file);
        
        //path to write the final files
        $store_path = "uploads/splits/";
        $cur_ptr=0;
        $arraylength=1;
        $all_ip_address=[];
//         $stmt = $conn->prepare("SELECT ip_address FROM nodes");
// //            $stmt->bind_param("sss", $firstname, $lastname, $email)
//            $firstname = "John";
//            $lastname = "Doe";
//            $email = "john@example.com";
        // $stmt->execute();
        // $stmt->close();
        //  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        // foreach ($result as $key => $value) {
        //  array_push($all_ip_address,$value);
        //  $arraylength++;
        // }
        $colcnt=0;
        global $email, $file_extension,$email_abc,$folder_name;
        for($i=0;$i<$parts;$i++){
            
            //echo $email.$file_extension;
            $colcnt++;
            //read buffer sized amount from file
            $file_part = fread($file_handle, $buffer);
            //the filename of the part
            $file_part_path = $store_path."part$i"."_".$email."_".$file_name."".$file_extension;
            //open the new file [create it] to write
            $file_new = fopen($file_part_path,'w+');    
            $key="nextCloud";
            //write the part of file
            fwrite($file_new, encryptAES($file_part,$key));
            //add the name of the file to part list [optional]
            array_push($file_parts, $file_part_path);
            //close the part file handle
            fclose($file_new);
            // $stmt = $conn->prepare("INSERT INTO files VALUES (?, ?, ?)");
            // $lastname = "Doe";
            // $email = "john@example.com";
            // $stmt->bind_param("sss", $file_name, $lastname, $email);
            // $stmt->execute();
            // $stmt->close();
            sendFragmentToNode("uploads/splits/part$i"."_".$email."_".$file_name."".$file_extension,"192.168.43.38","part$i"."_".$email."_".$file_name."".$file_extension,$buffer,$conn);
            $cur_ptr=($cur_ptr+1)%$arraylength;
        }    
         $query = "INSERT INTO files(file_name,file_extension,user,folder_name,noOfFileParts,file_size,file_type,destination_ip,destination_path) values ('$file_name','$file_extension','$email_abc','$folder_name',$colcnt,".$file_size.",1,'192.168.43.38','Documents/')";
          $conn->query($query);  
        //close the main file handle   
        fclose($file_handle);
        return $file_parts;
    }  
    
    function sendFragmentToNode($filepath,$ip_address,$filedataname,$file_size,$conn){

            // $username='';
            // $password='';

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "secured_cloud";
			$conn = new mysqli($servername, $username, $password, $dbname);
            $url = 'https://'.$ip_address.'/remote.php/dav/files/virat/Documents/'.$filedataname;
            //  '.$filedataname;
           
	       
			
				    // echo "New record created successfully";191111989
							
		            $ch = curl_init($url);
		            curl_setopt($ch, CURLOPT_PUT, true);
		            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		            curl_setopt($ch, CURLOPT_USERPWD, "virat:viratkohli");
		            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		            $fileHandle=fopen($filepath, 'r');
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		           // curl_setopt($ch, CURLOPT_POSTFIELDS,fread($fileHandle,filesize($filepath)));
		            curl_setopt($ch, CURLOPT_INFILE, $fileHandle);
		            curl_setopt($ch, CURLOPT_INFILESIZE, filesize($filepath));
                   // echo $ch;
		            $response = curl_exec($ch);
                   // echo $response;
		            if (curl_error($ch)) {
					    $error_msg = curl_error($ch);
					 //   echo $error_msg;
					}
                    else{
                       // echo "Done Successfully";
                    }




    }

    function encryptAES($plaintext,$password)
    {
        $method = 'aes-256-cbc';

        // Must be exact 32 chars (256 bit)
        $password = substr(hash('sha256', $password, true), 0, 32);
//        echo "Password:" . $password . "\n";

        // IV must be exact 16 chars (128 bit)
        $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

        // av3DYGLkwBsErphcyYp+imUW4QKs19hUnFyyYcXwURU=
        $encrypted = base64_encode(openssl_encrypt($plaintext, $method, $password, OPENSSL_RAW_DATA, $iv));

        // My secret message 1234
        $decrypted = openssl_decrypt(base64_decode($encrypted), $method, $password, OPENSSL_RAW_DATA, $iv);

        return $encrypted;
    }



echo "<script>alert('File Uploaded Successfully');window.location.href='./index.php'</script>";
?>