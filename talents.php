<!DOCTYPE html>
<html lang="en">  

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Showcase of portfolio work for Vanderbloemen Creative">
    <meta name="author" content="Robert Petersen">

    <title>VBC - Talents</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">	
	<!--Import our own custom css file -->
	<link href="css/custom.css" rel="stylesheet">	
	<!-- lightbox css -->
	<link href="css/lightbox.min.css" rel="stylesheet">
	
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
    <div class="container" id="mainPage">

		<!-- just holds logo -->
        <div class="row botPad padTopSm">
            <div class="col-lg-12">                
				 <img src="img/mainLogo.png" class="img-responsive marginCenter logoImg" alt="Logo"> 
			</div>
        </div>
        <!-- /.row -->
		
		<!-- holds our main page header background -->		
		<div class="row botPad">
            <div class="col-lg-12">                
				 <img src="img/talents1.jpg" class="img-responsive marginCenter"  alt="Background"> 
			</div>
        </div>
        
		
		<div class="container removePadding negMarginRight marginBot">
  
		  <ul class="nav nav-tabs nav-justified">
			<!--talentTab class is only used in jquery to ignore these while setting navigation tabs -->
			<li class="active talentTab"><a data-toggle="tab" href="#marketing">Marketing Materials</a></li>
			<li class="talentTab"><a data-toggle="tab" href="#logo">Logo Design</a></li>
			<li class="talentTab"><a data-toggle="tab" href="#present">Presentations</a></li>
			<li class="talentTab"><a data-toggle="tab" href="#package">Packaging Design</a></li>
			<li class="talentTab"><a data-toggle="tab" href="#art">Art Direction</a></li>
		  </ul>

		  <div class="tab-content">
		  
			<div id="marketing" class="tab-pane fade in active ">
			<!-- 1000px by 800px ratio for pictures to keep consistent-->
				<!--* section for showcasing brochure work*-->
				<div class="row projectContent ">
					<h1 class="topPad botPad sectionLabel">BROCHURE DESIGN </h1>
					
					<div class="col-md-3 col-sm-3 col-xs-12 imgLabel" id="brochure1"> 					
						<a href="img/brochure1.png" class="thumbnail" data-lightbox="image-1" >
							<img class="img-responsive tabPic" src="img/brochure1thumb.jpg" alt="">
						</a>					
						<h4>Clifton Gunderson</h4>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-12 imgLabel" id="brochure2">					
						<a href="img/brochure2.png" class="thumbnail" data-lightbox="image-2" >
							<img class="img-responsive tabPic" src="img/brochure2thumb.jpg" alt="">
						</a>
						<h4>Zerand Corporation</h4>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-12 imgLabel" id="brochure3"> 					
						<a href="img/brochure3.png" class="thumbnail" data-lightbox="image-3" >
							<img class="img-responsive tabPic" src="img/brochure3thumb.jpg" alt="">
						</a>
						<h4>Approved Inspectors</h4>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-12 imgLabel" id="brochure4"> 					
						<a href="img/brochure4.png" class="thumbnail" data-lightbox="image-4" >
							<img class="img-responsive tabPic" src="img/brochure4thumb.jpg" alt="">
						</a>						
						
						<h4>Miwuakee Renaissance Academy</h4>
					</div>
				</div>
				
				
				<!--* section for showcasing information design work*-->
				<div class="row projectContent ">
					<h1 class="topPad botPad sectionLabel">INFORMATION DESIGN </h1>
					
					<div class="col-md-4 col-sm-4 col-xs-12 imgLabel" id="info1"> 					
						<a href="img/info1.png" class="thumbnail" data-lightbox="image-5" >
							<img class="img-responsive tabPic" src="img/info1thumb.jpg" alt="">
						</a>
						<h4>SOHO UnGeeked</h4>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12 imgLabel" id="info2"> 
						<a href="img/info2.png" class="thumbnail" data-lightbox="image-6" >
							<img class="img-responsive tabPic" src="img/info2thumb.jpg" alt="">
						</a>
						<h4>Experis</h4>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12 imgLabel" id="info3"> 
					<a href="img/info3.png" class="thumbnail" data-lightbox="image-7" >
							<img class="img-responsive tabPic" src="img/info3thumb.jpg" alt="">
						</a>
						<h4>E-Factor</h4>
					</div>
					
					
				</div>
				
				
				
				<!--* section for showcasing advertising work*-->
				<div class="row projectContent marginBotLarge">
					<h1 class="topPad botPad sectionLabel">ADVERTISING </h1>
					
					<div class="col-md-3 col-sm-3 col-xs-12 imgLabel" id="adv1"> 
						<a href="img/adv1.png" class="thumbnail" data-lightbox="image-8" >
							<img class="img-responsive tabPic" src="img/adv1thumb.jpg" alt="">
						</a>
						<h4>LaBlanc Chirophractic</h4>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-12 imgLabel" id="adv2"> 
						<a href="img/adv2.png" class="thumbnail" data-lightbox="image-9" >
							<img class="img-responsive tabPic" src="img/adv2thumb.jpg" alt="">
						</a>
						<h4>The Cake Lady</h4>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-12 imgLabel" id="adv3"> 
						<a href="img/adv3.png" class="thumbnail" data-lightbox="image-10" >
							<img class="img-responsive tabPic" src="img/adv3thumb.jpg" alt="">
						</a>
						<h4>SOHO biztube.com</h4>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-12 imgLabel" id="adv4"> 
						<a href="img/adv4.png" class="thumbnail" data-lightbox="image-11" >
							<img class="img-responsive tabPic" src="img/adv4thumb.jpg" alt="">
						</a>
						<h4>E-Factor</h4>
					</div>
				</div>
				
				<div style="position:relative; width:100%; height:0px; padding-bottom:75%;">
					<iframe style="position:absolute; left:0; top:0; width:100%; height:100%"
						src="https://player.vimeo.com/video/70183087?height=300&width=500&autoplay=0#t-16s">
					</iframe>
				</div>
				
			</div>
			
			<div id="logo" class="tab-pane fade">
			  
			  <!-- logo design showcase -->
			  <div class="row projectContent ">
					<h1 id="logoLabel" class="topPad botPad">LOGO DESIGN </h1>
					
					<div class="col-md-3 col-sm-3 col-xs-12 imgLabel" id="logo1"> 
						<a href="img/logo1.png" class="thumbnail" data-lightbox="image-12" >
							<img class="img-responsive tabPic" src="img/logo1.png" alt="">
						</a>
						<h4>Ruddy Water</h4>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-12 imgLabel" id="logo2"> 
						<a href="img/logo2.png" class="thumbnail" data-lightbox="image-13" >
							<img class="img-responsive tabPic" src="img/logo2.png" alt="">
						</a>
						<h4>Lynx</h4>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-12 imgLabel" id="logo3"> 
						<a href="img/logo3.png" class="thumbnail" data-lightbox="image-14" >
							<img class="img-responsive tabPic" src="img/logo3.png" alt="">
						</a>
						<h4>SOHO biztube.com</h4>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-12 imgLabel" id="logo4"> 
						<a href="img/logo4.png" class="thumbnail" data-lightbox="image-15" >
							<img class="img-responsive tabPic" src="img/logo4.png" alt="">
						</a>
						<h4>Dr. Leibsohn</h4>
					</div>
				</div>				 
				
				<!--* section for showcasing information design work*-->
				<div class="row projectContent marginBotLarge">
					<!-- logo continuation no need for heading -->
					<div class="col-md-4 col-sm-4 col-xs-12 imgLabel" id="logo5"> 
						<a href="img/logo5.png" class="thumbnail" data-lightbox="image-16" >
							<img class="img-responsive tabPic" src="img/logo5.png" alt="">
						</a>
						<h4>Blue Cross Blue Shield</h4>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12 imgLabel" id="logo6"> 
						<a href="img/logo6.png" class="thumbnail" data-lightbox="image-17" >
							<img class="img-responsive tabPic" src="img/logo6.png" alt="">
						</a>
						<h4>ACHM</h4>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12 imgLabel" id="logo7"> 
						<a href="img/logo7.png" class="thumbnail" data-lightbox="image-18" >
							<img class="img-responsive tabPic" src="img/logo7.png" alt="">
						</a>
						<h4>Finding Wanna</h4>
					</div>				
					
				</div>		
				
				
				<div style="position:relative; width:100%; height:0px; padding-bottom:75%;">
					<iframe style="position:absolute; left:0; top:0; width:100%; height:100%"
						src="https://player.vimeo.com/video/64855518?height=300&width=500&autoplay=0#t-16s">
					</iframe>
				</div>
				
			</div>
			
			
			<div id="present" class="tab-pane fade">
			  <!--* section for showcasing information design work*-->
				<div class="row projectContent marginBotLarge ">
					<!-- logo continuation no need for heading -->
					
					<div class="col-md-4 col-sm-4 col-xs-12" id="power1"> 
						<a href="img/power1.png" class="thumbnail" data-lightbox="image-19" >
							<img class="img-responsive tabPic" src="img/power1.png" alt="">
						</a>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12" id="power2"> 
						<a href="img/power2.png" class="thumbnail" data-lightbox="image-20" >
							<img class="img-responsive tabPic" src="img/power2.png" alt="">
						</a>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12" id="power3"> 
						<a href="img/power3.png" class="thumbnail" data-lightbox="image-21" >
							<img class="img-responsive tabPic" src="img/power3.png" alt="">
						</a>
					</div>
				</div>			
				
				<div style="position:relative; width:100%; height:0px; padding-bottom:75%;">
					<iframe style="position:absolute; left:0; top:0; width:100%; height:100%"
						src="https://player.vimeo.com/video/64855522?height=300&width=500&autoplay=0#t-16s">
					</iframe>
				</div>
				
			</div>
			
			<div id="package" class="tab-pane fade">
			
				 <div class="row projectContent topPadSmall">
						<!-- logo continuation no need for heading -->
						<div class="col-md-4 col-sm-4 col-xs-12 imgLabel" id="products3"> 
							<a href="img/products3.png" class="thumbnail" data-lightbox="image-22" >
								<img class="img-responsive tabPic" src="img/products3.png" alt="">
							</a>
							<h4>Ruddy Water</h4>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 imgLabel" id="products2"> 
							<a href="img/products2.png" class="thumbnail" data-lightbox="image-23" >
								<img class="img-responsive tabPic" src="img/products2.png" alt="">
							</a>
							<h4>Brady Corporation</h4>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 imgLabel" id="products1"> 
							<a href="img/products1.png" class="thumbnail" data-lightbox="image-24" >
								<img class="img-responsive tabPic" src="img/products1.png" alt="">
							</a>
							<h4>Brady Corporation</h4>
						</div>
						
				</div>
				
				
				<div style="position:relative; width:100%; height:0px; padding-bottom:75%;">
					<iframe style="position:absolute; left:0; top:0; width:100%; height:100%"
						src="https://player.vimeo.com/video/64855524?height=300&width=500&autoplay=0#t-16s">
					</iframe>
				</div>
		  </div>
		  
		  <!--ART TAB-->
		  <div id="art" class="tab-pane fade">
			
				<div class="row projectContent ">
					<!-- logo continuation no need for heading -->
					<div class="col-md-6 col-sm-6 col-xs-12" id="art1"> 
						<a href="img/art1.png" class="thumbnail" data-lightbox="image-25" >
							<img class="img-responsive tabPic" src="img/art1.png" alt="">
						</a>
					</div>
					
					<div class="col-md-6 col-sm-6 col-xs-12" id="art2"> 
						<a href="img/art2.png" class="thumbnail" data-lightbox="image-26" >
							<img class="img-responsive tabPic" src="img/art2.png" alt="">
						</a>
					</div>
					
					
				</div>
				
				<div class="row projectContent ">
					<!-- logo continuation no need for heading -->
					<div class="col-md-6 col-sm-6 col-xs-12" id="art3"> 
						<a href="img/art3.png" class="thumbnail" data-lightbox="image-27" >
							<img class="img-responsive tabPic" src="img/art3.png" alt="">
						</a>
					</div>
					
					<div class="col-md-6 col-sm-6 col-xs-12" id="art4"> 
						<a href="img/art4.png" class="thumbnail" data-lightbox="image-28" >
							<img class="img-responsive tabPic" src="img/art4.png" alt="">
						</a>
					</div>
					
					
				</div>
				
				<div class="row projectContent ">
					<!-- logo continuation no need for heading -->
					<div class="col-md-6 col-sm-6 col-xs-12" id="art5"> 
						<a href="img/art5.png" class="thumbnail" data-lightbox="image-29" >
							<img class="img-responsive tabPic" src="img/art5.png" alt="">
						</a>
					</div>
					
					<div class="col-md-6 col-sm-6 col-xs-12" id="art6"> 
						<a href="img/art6.png" class="thumbnail" data-lightbox="image-30" >
							<img class="img-responsive tabPic" src="img/art6.png" alt="">
						</a>
					</div>
				</div>
				
		  </div>
		</div>
    </div>
	
	<!-- include our footer file shared between pages -->
	<div class="negMarginLeft">
		<?php 
			require ('footer.php');
		?>
	</div>
	</div>
	
    <!-- jQuery Version 2.23 -->
    <script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
	<!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/lightbox.min.js"></script>
	<!-- our custom javascript functions -->
	<script src="js/custom.js"></script>
	
	<script>
		$( document ).ready(function() {
			//since header from include file, need to check our page name and highlight tab for right page
			SetNavigationTab();
			//
			SetSocialMedia();
			
			});
	</script>
	
</div>
</body>

</html>
