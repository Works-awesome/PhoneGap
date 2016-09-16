<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Email sent!'
       
	);

    $device = @trim(stripslashes($_POST['selectbasic']));
    $problem = @trim(stripslashes($_POST['selectbasic2']));
    $des = @trim(stripslashes($_POST['description']));
    $Name = @trim(stripslashes($_POST['Name']));
    $Mobile = @trim(stripslashes($_POST['Mobile']));
    $Address= @trim(stripslashes($_POST['Address']));
    $City= @trim(stripslashes($_POST['City']));
     $time= @trim(stripslashes($_POST['Time']));
    
    $subject= 'Request for service';
    $headers .= 'CC: ajay.dhangar@gmail.com' . "\r\n";
    
    $email_from = $email;
    $email_to = 'liefsolutions@gmail.com';

    $body = 'Name: ' . $Name . "\n\n" . 'Mobile: ' . $Mobile . "\n\n" . 'Address: ' . $Address . "\n\n" . 'Subject: ' . $subject . "\n\n"  . 'device: ' . $device . "\n\n" . 'problem: ' . $problem . "\n\n" . 'des: ' . $des . "\n\n" . 'Time: ' . $time . "\n\n";

   if (mail($email_to, $subject,$body, 'From: <'.$email_from.'>')) { 
            echo '<p>Your message has been sent!</p>';
           //header('Location:index.html');
        } else { 
            echo '<p>Something went wrong, go back and try again!</p>'; 
         //  header('Location:index.html');
        }
  

    
    
    
    die;


 