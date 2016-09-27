<!DOCTYPE html>
<html lang="en">  

<head>

    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VBC - Submit</title>

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
		 
		<div class="row botPad">
            <div class="col-lg-12">
			<h1 class="submitText "> Form Submitted!</h1>
                
				 <img src="img/mask.png" class="img-responsive marginCenter outline"  alt="Background"> 
				
            </div>
        </div>
		
		
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
