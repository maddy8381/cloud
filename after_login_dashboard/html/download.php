<?php
	$arrContextOptions=array(
        "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    ); 

    session_start();
    $ename = $_SESSION['email'];
    $ename = substr_replace($ename ,"",-4);

    require 'include/db_config.php';
    $db = new Database();
    $conn = $db->getConnection();


    $email1 = $email = $_SESSION['email'];
    $f_name = $_GET['file_name'];
	if(isset($_GET['file_name']))
    {
        $file_name= $_GET['file_name'];
    }

    $extension = "";
     $con=mysqli_connect("localhost","root","","secured_cloud");
// Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $folder_name = $_SESSION['folder_name'];  
    $sql="SELECT file_extension FROM files where file_name = '$f_name' and user = '$email1' and folder_name = '$folder_name' ";

    if ($result=mysqli_query($con,$sql))
      {
      // Fetch one and one row
      while ($row=mysqli_fetch_row($result))
        {
            
                $extension = $row[0];
        }
    }

    echo $extension;
	$file_name = $file_name.$extension;
	
    //echo $file_name;
    $email = substr_replace($email ,"",-4);
    $noOfFileParts = 21;
    $teamid=$file_name;
	// $teamid=$_FILES['upfile']['name'];
    $file_extension = $extension;
    // echo $file_extension;
    $teamid = substr_replace($teamid ,"",-4);

    $ip_address='192.168.43.38';
    $name= $teamid;
    $fp1 = fopen('downloads/'.$name.$file_extension, 'a+');

    

    $no_of_parts = 0;
    
    $con=mysqli_connect("localhost","root","","secured_cloud");
// Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $sql="SELECT noOfFileParts FROM files where file_name = '$f_name' and user = '$email1'";

    if ($result=mysqli_query($con,$sql))
      {
      // Fetch one and one row
      while ($row=mysqli_fetch_row($result))
        {
            
                $no_of_parts = $row[0];
        }
    }




    echo $no_of_parts;    
    for($i=0;$i<$no_of_parts;$i++)
    {
        echo 'Looking for part'.$i.'_'.$name;
        echo 'looking for - https://virat:viratkohli@192.168.43.38/remote.php/dav/files/virat/Documents/part'.$i.'_'.$ename.'_'.$name.$extension;
        $str=file_get_contents('https://virat:viratkohli@192.168.43.38/remote.php/dav/files/virat/Documents/part'.$i.'_'.$ename.'_'.$name.$extension, false, stream_context_create($arrContextOptions));
        // $str="nothing there";
        // if($str=='')
        //     break;
        $file2 = decryptAES($str,'nextCloud');
        // echo "".decryptAES($str,'nextCloud');
        // $file2 = $str;
        // $file2 = "I don't what is problem";
        fwrite($fp1, $file2);
    }
    fclose($fp1);
    header('Content-Description: File Transfer');
    header('Content-Type: application/force-download');
    header("Content-Disposition: attachment; filename=\"" . basename('downloads/'.$name.$file_extension) . "\";");
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize('downloads/'.$name.$file_extension));
    ob_clean();
    flush();
    readfile('downloads/'.$name.$file_extension); 
//            deleteFile('downloads/'.$name);
    exit;

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

    function decryptAES($plaintext,$password)
    {
            $method = 'aes-256-cbc';

            // Must be exact 32 chars (256 bit)
            $password = substr(hash('sha256', $password, true), 0, 32);
            $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

            $decrypted = openssl_decrypt(base64_decode($plaintext), $method, $password, OPENSSL_RAW_DATA, $iv);
            return $decrypted;
    }

   // echo "string";
?>