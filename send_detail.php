<?php
    include_once('connection.php');

    $db=mysqli_connect($servername,$username,$password,$dbname);
    if($db->connect_error){
    	die("connection failed".$db);
    }
    else{
        echo "sucess";
    }
    
 
    if(isset($_POST['submit'])){
	$name= $_POST['your_name'];
    $contact= $_POST['contact'];
    $subject= $_POST['subject'];   
    $message= $_POST['message'];
    $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));  
          $query = "INSERT INTO sender (name,contact,subject,message,image) VALUES ('$name','$contact','$subject','$message','$image')";
          mysqli_query($db,$query);
      }
?>