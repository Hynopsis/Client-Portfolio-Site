<!DOCTYPE html>
<html lang="en">  

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Main page for Vanderbloemen Creative.">
    <meta name="author" content="Robert Petersen">

    <title>VBC Home</title>

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

</head>

<body>

	<!-- include our navigation bar -->	
	<?php 
		require ('header.php');
	?>
	
	<!--pageBody just sets the width for the page-->
	<div id="pageBody">
	
    <!-- Page Content-->
    <div class="container" id="mainPage">

		<!-- just holds logo -->
        <div class="row botPad padTopSm">
            <div class="col-lg-12">                
				 <img src="img/mainLogo.png" width="925" height="142" class="img-responsive marginCenter logoImg" alt="Vanderbloemen Logo"/> 				
            </div>
        </div>
		
		<!-- holds our main page header background image-->
		<div class="row">
            <div class="col-lg-12">                
				 <img src="img/background1.jpg" width="1138" height="273" id="mainBackground" class="img-responsive marginCenter"  alt="Peaceful water image"/> 				
            </div>
        </div>
		
		
		<div class="row">					
			<div class="col-md-6 col-sm-12 col-xs-12 fontSelector"> 
				<p class="padBotSm">I am a Superhero designer ridding the world of bad design since May 2003. My journey began out of the entreprenuer 
					spirit and continues [dispite challenges] because of intense drive and determination to do better and give more.
				</p>
				
				<p class="glyph"><span class="glyphicon glyphicon-check "></span> Project-based fees or hourly rates are available.</p>
				<p class="glyph"><span class="glyphicon glyphicon-check "></span> No capes and tights, just real superhero design powers.</p>
				<p class="glyph"><span class="glyphicon glyphicon-check "></span> Custom-tailored services to suit your needs.</p>
			
				<div class="padTop icons">
					<!--since using spacer columns to squeeze content together, we add some left padding to actually center it -->
					<div class="col-md-1 col-sm-1 col-xs-0">                
						<!--just a spacer-->				
					</div>
					<div class="col-md-3 col-sm-3 col-xs-4">                
						<img src="img/iconPhone.jpg" width="120" height="124" class="img-responsive contactIcon marginCenter" alt="A phone icon" />				
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-4">                
						<img src="img/iconMail.jpg" width="120" height="124" class="img-responsive contactIcon marginCenter" alt="A mail icon" />				
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-4">                
						<img src="img/iconEmail.jpg" width="120" height="124" class="img-responsive contactIcon marginCenter" alt="A email icon" />			
					</div>
					<div class="col-md-1 col-sm-1 col-xs-0" >                
						<!--just a spacer-->			
					</div>
				</div>
			
			</div>
			
			<!-- our video portfolio showcase -->
			<div class="col-md-6 col-sm-12 col-xs-12"> 
				<!--moving these styles out to css seems to break the responsive video-->
				<div style="position:relative; width:100%; height:0px; padding-bottom:75%;">
					<iframe style="position:absolute; left:0; top:0; width:100%; height:100%"
						src="https://player.vimeo.com/video/64855521?height=300&width=500&autoplay=0#t-16s">
					</iframe>
				</div>
			</div>
			
        </div>
		
		<div class="row padBotLg padTopLg">			
			
			<div class="col-md-4 col-sm-12 col-xs-12 centerText"> 
							
				<div class="aboutTitle">
					<p><span class="glyphicon glyphicon-star-empty"></span> EXPERIENCE<p>					
				</div>
				
				<div class="aboutText">				
					19 years of experience in corporate communications, brand identity, 
					interactive, presentations, web design, and more.
				</div>
					
			</div>
			
			<div class="col-md-4 col-sm-12 col-xs-12 centerText heading"> 
				
				<div class="aboutTitle">
					<p><span class="glyphicon glyphicon-equalizer"></span> EXPECTATION<p>					
				</div>
				
				<div class="aboutText">				
					You get more than you expect. I am not your typical at-large designer. 
					I am trustworthy, dependable and flexible. I work when you need me.
				</div>
					
			</div>
			
			<div class="col-md-4 col-sm-12 col-xs-12 centerText heading"> 
				
				<div class="aboutTitle">				
					<p><span class="glyphicon glyphicon-scissors"></span> EXPENSE<p>
				</div>	
				
				<div class="aboutText">					
					Working with an at-large designer costs you less than hiring a
					part-time or full-time employee.					
				</div>
					
			</div>			
        </div>		
    </div><!-- /.container -->
	
	<!-- include our footer file-->
		<?php 
			require ('footer.php');
		?>
		
	
	</div>
    

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>	
	<!-- our custom javascript functions -->
	<script src="js/custom.js"></script>
	
	<script>
		$( document ).ready(function() {
			
			//since header from include file, need to check our page name and highlight tab for right page
			SetNavigationTab();
			SetSocialMedia();
			SetContactIcons();
			
			});
	</script>

</body>

</html>
