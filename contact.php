<!DOCTYPE html>
<html lang="en">  

<head>
   
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VBC - Contact</title>  

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">	
	<!--Import our own custom css file -->
	<link href="css/custom.css" rel="stylesheet">
	
	<?php 
		//import our icon for browser tab
		require ('head.php');
	?>
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!--//so on page load we will see if we have any post data, if we do
	//then user has submitted information on the contact form and it should be recognized -->
</head>

<body>

    <!-- include our header file shared between pages, and include our validation routine -->
	<?php 
		require ('header.php');
		require ('validate.php');
	?>	
	
	<!--pageBody just sets the width for the page-->
	<div id="pageBody">
	
    <!-- Page Content-->
    <div class="container" id="mainPage">

		<!-- just holds logo -->
        <div class="row botPad padTopSm">
            <div class="col-lg-12">                
				 <img src="img/mainLogo.png" class="img-responsive marginCenter logoImg" alt="Logo"> 				
            </div>
        </div>
		
		
		<div class="centerText padBotSm">
			<h3>			
				<!--So if there is no post data then we want a simple message displayed, otherwise check data and load error message, or load complete   -->
				<!--//so first call our php function, if it returns "", then we are good and say complete-->
				<?php
				$formMessage = CheckPos();
				
				if($formMessage == ""){ //then firstName is empty assume they havent filled anything out					
					echo('Are you in need of a superhero? Simply send me a message through this super high-tech form and I will swoop in and save the day!');
				}
				else if($formMessage == "success"){
					echo('Submission Complete! We will contact you soon regarding your request.');					
				}
				else{
					echo($formMessage);
				}
				?>
			</h3>
		</div>		
		
		<div id="errorTxt"> 
		<!-- error messages are displayed here-->
		</div>
	
		<div id="contactForm"> 
		
			<div class="container ">
			<div class="row ">
				<div class="col-md-4 col-sm-12 col-xs-12 centerText negMarginRight" > 
					<h3 class="bold">Vanderbloemen Creative</h3>
					
					<h4>900 South 5th St # 401</h4>
					<h4>Milwaukee, WI 53204</h4>
					<h4>Phone: 414.828.2123</h4>
					<h4>stephanie@vanderbloemencreative.com</h4>
					<br />
					<form method="POST" action="http://vanderbloemencreative.us8.list-manage2.com/subscribe/post?u=6678b5d65fb80f87f3be181b3&amp;id=8a5b1cceda" name="mc-embedded-subscribe-form" class="validate padBotSm" target="_blank" novalidate> <!-- turn off html validation-->
				
						<fieldset class="form-group">
							<!-- seperate form for our subscribe not sure if going to use -->
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12 centerText" > 
									<label for="firstName">Subscribe to our mailing list: </label> <label class = "errorText" id="email2Error">  </label>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 centerText" > 
									<input type="text" class="form-control" name="EMAIL" placeholder="Enter your email" required>
									<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
									<div style="position: absolute; left: -5000px;"><input type="text" name="b_6678b5d65fb80f87f3be181b3_8a5b1cceda" value=""/></div>
									<button type="submit" style="margin-top: 8px; " value="Subscribe" name="subscribe" class="btn btn-primary">Sign-up</button>
								</div>
							</div>						
						</fieldset>
						
					</form>
					
					<img src="img/tw.jpg" class="img-responsive marginCenter contactSocialImg tw" alt="Logo">   
					<img src="img/fb.jpg" class="img-responsive marginCenter contactSocialImg fb" alt="Logo">   
					<img src="img/in.jpg" class="img-responsive marginCenter contactSocialImg li" alt="Logo">  
					<img src="img/go.jpg" class="img-responsive marginCenter contactSocialImg go" alt="Logo"> 					
							
				</div>
				
				<div class="col-md-7 col-sm-12 col-xs-12 formBackground marginLeftLg"> 
					
					<form id="formMain" method="POST" name="go" action="#" novalidate> <!-- turn off html validation-->
				
						
						<label for="firstName">First Name*: </label> <p class = "errorText" id="firstNameError">  </p>
						<input type="text" class="form-control progressValue" name="firstName" id="firstName" placeholder="John" required>
						
						<label for="lastName">Last Name*: </label> <label class = "errorText" id="lastNameError">  </label>
						<input type="text" class="form-control progressValue" name="lastName" id="lastName" placeholder="Smith" required>
						
						<label for="email">Email*: </label> <label class = "errorText" id="emailError">  </label>
						<input type="text" class="form-control progressValue" name="email" id="email" placeholder="Enter your email" required>
												
				
						
						<label>Interests: </label> <label class = "errorText" id="interestError">  </label>
							<div class="row">									
								<div class="col-md-4 col-sm-6 col-xs-6 centerCheckBox" > 
									<input type="checkbox" name="interest" value="Marketing"> Marketing
								</div>
								<div class="col-md-4 col-sm-6 col-xs-6 centerCheckBox" > 
									<input type="checkbox" name="interest1" value="Logos"> Logos
								</div>
								<div class="col-md-4 col-sm-6 col-xs-6 centerCheckBox" > 
									<input type="checkbox" name="interest2" value="Presentations"> Presentations
								</div>
								<div class="col-md-4 col-sm-6 col-xs-6 centerCheckBox" >  
									<input type="checkbox" name="interest3" value="Packaging"> Packaging
								</div>
								<div class="col-md-4 col-sm-6 col-xs-6 centerCheckBox" > 
									<input type="checkbox" name="interest4" value="Art Direction"> Art Direction
								</div>
								<div class="col-md-4 col-sm-6 col-xs-6 centerCheckBox" > 
									<input type="checkbox" name="interest5" value="Web Design"> Web Design
								</div>									
							</div>
						
						
						<label for="phone">Phone: </label> <label class = "errorText" id="phoneError">  </label>
						<input type="text" class="form-control progressValue" name="phone" id="phone" placeholder="xxx-xxx-xxxx" >
					
						<label for="message">Message*: </label> <label class = "errorText" id="messageError">  </label>
						<textarea rows="6" cols="50" class="form-control" name="message" id="message" placeholder="Please leave a message.">
							</textarea>
												
						<div class="row padBot padTopSm">
							<div class="col-md-6 col-sm-6 col-xs-6" > 
								<button type="submit" class="btn btn-primary floatRight">Submit</button>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6" > 
								<button type="button" onclick="ClearData()" class="btn btn-primary floatLeft">Clear</button>
							</div>
						</div>					
					
					</form>
				</div>
				
				<div class="col-md-1 col-sm-1 col-xs-0"> 
					<!--just a spacer-->
				</div>
			</div>
			</div>
		
		</div>
		
		<div class="padBot centerText padTop">
			<h3>Have questions you'd like to ask me? Feel free to call, email, text, DM on twitter or leave a message on Facebook or LinkedIn.</h3>
		</div>
	
    </div>
	
	<!-- include our footer file-->
	<?php 
		require ('footer.php');
	?>
	
	</div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>	
	<!-- our custom javascript functions -->
	<script src="js/custom.js"></script>	
	<!-- get our jquery validation from a cdn-->
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"> </script>	
	<!-- get our jquery additional files, not sure if neededd-->
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.min.js"> </script>
	
	
	<script>
		$( document ).ready(function() {
			//since header from include file, need to check our page name and highlight tab for right page
			SetNavigationTab();
			SetSocialMedia();			
			
			/*Using jquery validation plugin, so these are settings for validation*/
			$("#formMain").validate({
			rules: {
				firstName: "required",
				lastName: "required",
				email: "required",
				message: "required",
				firstName: {
					required: true,
				},
				email: {
					required: true,
					email: true
				},
				phone: {
					phoneUS: true
				},
				message: {
					required: true,
				}
				
				
			},
			messages: {
				firstname: "Please enter your first name",
				lastname: "Please enter your last name",
				email: {
					required: "Please enter a valid email address",
					email: "Not in proper email format"
				},
				message: {
					required: "Please enter a message",
					minlength: "Must be at least 9 characters in length"
				}
				
				},
				//errorPlacement: function(error, element) {
					//error.insertAfter(element); // <- the default
					//}
				errorElement : 'div',
				errorLabelContainer: '.errorTxt'
			});
			
			<!-- validate form just for our mailing list -->
			$("#formMail").validate({
				rules: {
					email: "required"				
				},
				messages: {
					email: {
						required: "Please enter a valid email address",
						email: "Not in proper email format"
					}
					
					}
			});	
			
		});
	</script>
	
</body>

</html>
