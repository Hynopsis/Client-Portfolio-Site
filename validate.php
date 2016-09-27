<?php
		
		function CheckPos(){
			//here we check if we have post data ,if we do then a form was submitted, we redirect to the same page on submit
			$haveAllData = true;
			$firstName;
			$lastName;
			$email;
			$message;
			$errors = array("", "", "", "");	 	
			
			//echo("making errors array ");	
			//echo ("Intest values " . $_POST['interest'] . $_POST['interest1'] . $_POST['interest2'] . $_POST['interest3'] . $_POST['interest4'] . $_POST['interest5']);
			
			if (isset($_POST['firstName']) && $_POST['firstName'] != "") {
				//echo("Have first name " + $_POST['firstName']);
				$firstName = htmlspecialchars($_POST['firstName']);
				}
			else{
				//echo(" missing first name ");
				$errors[0] = "Missing first name";
				//print_r("Error: $errors[0]");
				
				$haveAllData = false;
			}
			
			
		
			//TURN THIS BACK TO TRUE AFTER DEBUGGING
			if($haveAllData){//then we dont have any data skip all this
			
				if (isset($_POST['lastName']) && $_POST['lastName'] != "") {
					$lastName = htmlspecialchars($_POST['lastName']);
					}
				else{
					$errors[1] = "Missing last name";					
					$haveAllData = false;
				}
				
				if (isset($_POST['email']) && $_POST['email'] != "") {
					$email = htmlspecialchars($_POST['email']);
					
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						$errors[2] = "Invalid email format"; 
						$haveAllData = false;
						}						
					}
				else{
					$errors[2] = "Missing email";					
					$haveAllData = false;
				}
				
				if (isset($_POST['message']) && $_POST['message'] != "") {
					$message = htmlspecialchars($_POST['message']);
					}
				else{
					$errors[3] = "Missing message";					
					$haveAllData = false;
				}
				
				if($haveAllData == false){
					//then generate our warnign message
					$errorMessage = "ERRORS FOUND: ";
					$counter = 0;
					$display = false;
					$isError = false;
					
					for( $i = 0; $i<4; $i++ ) {
						
						if(strcmp($errors[$i], "") == 0){
							print("Empty string found");
						}
						else{
							if($i != 0 && $isError){
								$errorMessage .= ", " . $errors[$i];
							}
							else{
								$errorMessage .= $errors[$i];
							}
							$isError = true;
						}
					}
					return $errorMessage;					
				}
				else{
					
					  $from = "From: VanderbloemenCreative.com!"; //Site name
						// Change this to your email address you want to form sent to
					  $to = "lastresortname@hotmail.com";//"stephanie@vanderbloemencreative.com"; //"lastresortname@hotmail.com";
					  $subject = "Admin - Vanderbloemen Creative! Info Request";
					  
					  $message1 = "Message from " . $firstName . " " . $lastName . ".\r\n" ; 					  
					  $message1 .= "Interests: ";
					  
					  $started = false;
					  
					  if(isset($_POST['interest']) && $_POST['interest'] != ""){
						  $message1 .= $_POST['interest'];
						  $started = true;
					  }
					  if(isset($_POST['interest1']) && $_POST['interest1'] != ""){
						  						  
						  if($started){
							  $message1 .=  ", ";
						  }
						  else{
							  $message1 .= " ";
						  }
						  $started = true;
						  $message1 .= $_POST['interest1'];
					  }
					  if(isset($_POST['interest2']) && $_POST['interest2'] != ""){
						  						  
						  
						  if($started){
							  $message1 .=  ", ";
						  }
						  else{
							  $message1 .= " ";
						  }
						  $started = true;
						  $message1 .= $_POST['interest2'];
					  }
					  if(isset($_POST['interest3']) && $_POST['interest3'] != ""){
						 						  
						  
						  if($started){
							  $message1 .=  ", ";
						  }
						  else{
							  $message1 .= " ";
						  }
						  $started = true;
						   $message1 .= $_POST['interest3'];
					  }
					  if(isset($_POST['interest4']) && $_POST['interest4'] != ""){
						  						  
						  if($started){
							  $message1 .=  ", ";
						  }
						  else{
							  $message1 .= " ";
						  }
						  $started = true;
						  $message1 .= $_POST['interest4'];
					  }
					  if(isset($_POST['interest5']) && $_POST['interest5'] != ""){
						  						  
						  if($started){
							  $message1 .=  ", ";
						  }
						  else{
							  $message1 .= " ";
						  }
						  $started = true;
						  $message1 .= $_POST['interest5'];
					  }
					  
					  if($started == false){
						  $message1 .= "None specified.\r\n";
					  }
					  else{
						  $message1 .= ".\r\n";
					  }
					  
					  if(isset($_POST['phone']) && $_POST['phone'] != ""){
						  $message1 .= "Phone number provided: " . $_POST['phone']. ".\r\n";
					  }
					  
					  $message1 .= "Message: " . $message;
					  
					  mail($to,$subject,$message1,$from);
					  
					return "success";
				}
				
			
			}
			return "";
		}
		?>	