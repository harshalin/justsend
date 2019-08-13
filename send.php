<?php
   include'send_detail.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>just send</title>
    <link rel="stylesheet" href="send.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<body>
    <div class="container">
        <div class="header">
        	<h2>jUst SEnD</h2>
        </div>
        <form  method="post" >
            <div class="input">
                <input type="text" name="your_name" placeholder="Your name">
            </div>
            <div class="input">
                <input type="text" name="contact" placeholder="Your email or phone">
            </div>
            <div class="input">
                <input type="text" name="subject" placeholder="subject">
            </div>
            <div class="input">
            	<textarea name="message" placeholder="message"></textarea>
            </div>
            <div class="input">
            	<input type="file" name="image" id="fileSelect">
            </div>
            <!--<div class="input">
              <input type="file" name="image" id="fileSelect" >
            </div>-->
            <div>
                <center><input type="submit" name="submit" value="submit"></center>
            </div>
     </form>
</body>
</html>