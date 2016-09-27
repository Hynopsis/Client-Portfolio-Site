<!DOCTYPE html>
<html lang="en">  

<head>

    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VBC - About</title>

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

    <!-- include our header file shared between pages -->
	<?php 
		require ('header.php');
	?>
	
	<!--pageBody just sets the width for the page-->
	<div id="pageBody">
	
    <!-- Page Content-->
    <div class="container">

		<!-- just holds logo -->
        <div class="row botPad">
            <div class="col-lg-12">
                
				 <img src="img/logo.png" class="img-responsive marginCenter logoImg" alt="Logo"> 
				
            </div>
        </div>
        <!-- /.row -->
		
		<!-- holds our main page header background -->
		<div class="row botPad">
            <div class="col-lg-12">
                
				 <img src="img/aboutBanner2.jpg" class="img-responsive marginCenter outline"  alt="Background"> 
				
            </div>
        </div>
        
		
		
		</br>
		<div class="aboutIntro padBotSm">
			<!--<h2 class ="centerText projectHeading">Recent Projects</h2>-->
			<p>I am a Superhero designer ridding the world of bad design since May 2003. 
			My journey began out of the entreprenuer spirit and continues [dispite challenges] 
			because of intense drive and determination to do better and give more.</p>
		</div>
			
		<hr class = "lineAbout"> </hr>
		
		
		
		<div class="aboutEnd padBot">
		
			</br>
			<p><span class="glyphicon glyphicon-check"></span> Project-based fees or hourly rates are available.</p>
			<p><span class="glyphicon glyphicon-check"></span> No capes and tights, just real superhero design powers.</p>
			<p><span class="glyphicon glyphicon-check"></span> Custom-tailored services to suit your needs.</p>
			<!-- <p>If you need a service custom-tailored to suit your needs, feel free to ask! I am  flexible and will 
			work to facilitate your requests!</p> -->
		
		</div>
		
		<!-- contains welcome panel  center it, -->
		<div class="row projectsContent "><!--marginCenter -->
			
			
			<div class="col-md-4 col-sm-4 col-xs-12 text-center aboutHeight"> 
			
				
				
				<div class="aboutTitle">
					<p><span class="glyphicon glyphicon-star-empty"></span> EXPERIENCE<p>
					
				</div>
				<div class="aboutText aboutOutline gradientBackground shadow">
				
					19 years of experience in corporate communications, brand identity, 
					interactive, presentations, web design, and more.
				</div>
					
			</div>
			
			<div class="col-md-4 col-sm-4 col-xs-12 text-center aboutHeight "> 
				
				<div class="aboutTitle">
					<p><span class="glyphicon glyphicon-equalizer"></span> EXPECTATION<p>
					
				</div>
				<div class="aboutText aboutOutline gradientBackground shadow">
				
					You get more than you expect. I am not your typical at-large designer. 
					I am trustworthy, dependable and flexible. I work when you need me.
				</div>
					
			</div>
			
			<div class="col-md-4 col-sm-4 col-xs-12 text-center  aboutHeight"> 
				
				<div class="aboutTitle">
				
					<p><span class="glyphicon glyphicon-scissors"></span> EXPENSE<p>
				</div>	
				
				<div class="aboutText aboutOutline gradientBackground shadow">
					
					Working with an at-large designer costs you less than hiring a
					part-time or full-time employee.
					
				</div>
					
			</div>
			
        </div>
		
		<!-- Backup of tri-panel that was pretty cool, but is not responsive, would probably still work for other purposes
		<div class="row marginCenter projectsContent ">
			</br>
			<h2 class ="centerText projectHeading">Recent Projects</h2>
			
			<hr class = "lineProject"> </hr>
			
			<div class="col-lg-12 projectSection  "> 
			
				<div class="projectsImgHolder projectImg projectOne">
					
				</div>
				
				<div class="projectsTitle">
					<p>Officia in Biltong<p>
					<hr class = "lineTitle"> </hr>
				</div>
				<div class="projectsText">
					Bacon ipsum dolor amet cupidatat lorem culpa magna frankfurter turducken turkey qui. 
					Kevin irure andouille mollit swine pork. Dolore meatloaf elit prosciutto commodo lorem tail.
				</div>
				<button type="button" class="projectButton">LEARN MORE</button>		
			</div>
			
			<div class="col-lg-4 projectSection floatCenter"> 
				<div class="projectsImgHolder projectImg projectTwo">
					
				</div>
				<div class="projectsTitle">
					<p>Voluptate Prosciutto.<p>
					<hr class = "lineTitle"> </hr>
				</div>
				<div class="projectsText">
					Fatback t-bone bresaola, brisket spare ribs meatball sirloin cupim sed ball tip deserunt cupidatat short loin tenderloin. 
					Occaecat turkey ut picanha do, salami shankle pariatur. 
					
				</div>
				<button type="button" class="projectButton">LEARN MORE</button>		
			</div>
			
			<div class="col-lg-4 projectSection floatCenter">
				<div class="projectsImgHolder projectImg projectThree">
					
				</div>		
				<div class="projectsTitle">
					<p>Sed Nulla Strip<p>
					<hr class = "lineTitle"> </hr>
				</div>	
				<div class="projectsText">
					Cow elit eiusmod, minim aliquip corned beef culpa excepteur cupim venison. Ea cillum kielbasa, tempor boudin est tenderloin. 
					Ground round voluptate biltong.
					
				</div>
				<button type="button" class="projectButton">LEARN MORE</button>				
			</div>
			
        </div>
		
		
		
		
		-->
        <!-- /.row -->
		
		<!-- include our footer file shared between pages -->
		<?php 
			require ('footer.php');
		?>

    </div>
	
	</div>
    <!-- /.container -->

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
			
			});
	</script>

</body>

</html>
