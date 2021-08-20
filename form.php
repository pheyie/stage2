<?php

	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=hng','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
 
 	  if (isset($_POST['submit']) && !empty($_POST['fullname']) && !empty($_POST['message']) && !empty($_POST['email'])&& !empty($_POST['phonenumber']) ){
 	 	

 	 
 	  	
 	  		
 	  		$fullname  = $_POST['fullname'];
 	  		$message  = $_POST['message'];
 	  		$email  = $_POST['email'];
 	  		$phonenumber  = $_POST['phonenumber'];
 	  		
 	  		$pdo->exec("INSERT INTO resumes (fullname,message,email,phonenumber)
 	  						values ('$fullname','$message','$email','$phonenumber')");

 	  		echo "Thanks for the message";


 	  		}				
 	  		
 	  	else{

 	  		 echo "fill all fields";
 	  		
 	 	 }
 

