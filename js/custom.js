//so need a function that sets the navigation "active" class dynamically now that using php

function SetNavigationTab(){ 
 
		var pageName = GetCurrentFileName(); 
		
		//for our navigation bar so through each list item, it a href equals this page, then set then add active class to the li
		$children = $('.nav').children('li');
		
		//remove our active class from our navigation tabs, but not from class=talentTab on our talents page
		$('.nav li:not(.talentTab)').each(function () {
			$(this).removeClass('active');			
		});
		
		//find the tab that matches our open page and set it to be the active tab
		$('.nav a').each(function () {
			if($(this).attr('href').trim() == pageName.trim()){
				$(this).parent().addClass('active');
			}
		});  
}

function ClearData() {
	  //clear all our data so user can start over
	  $(document).ready(function () {	
			$( "input:text" ).val("")
			//turn off all our checkboxes
			$( "input:checked" ).each(function() {
				$( this ).removeAttr("checked");
			});
		  $("#firstName").focus();		
		})
   }

function SetSocialMedia(){
	//so need to add data to our social media buttons	
	$(".fb").data("link", "https://www.facebook.com/vanderbloemenkern");
	$(".tw").data("link", "https://twitter.com/StephanieKern");
	$(".go").data("link", "https://plus.google.com/+StephanieKernsuperhero");
	$(".li").data("link", "https://www.linkedin.com/in/vanderbloemencreative");
	
	//add on click event that used the data as an href basically
	$( ".socialSize, .contactSocialImg" ).click(function() {
		window.open($(this).data("link"));		
	});
	
	//add fade opacity to image on hover to simulate button
	$(".socialSize, .contactSocialImg" ).hover(function() {
		$( this ).addClass("fade");
	  }, function() {
		$( this ).removeClass("fade");
	  }					
	);	
}

function SetContactIcons(){
	
	//add on click event that just redirects to our contact page...
	$( ".contactIcon" ).click(function() {
		window.open("http://www.rpetersen4.btcwsd.com/vbc/contact.php","_self")		
	});
	
	//add fade opacity to image on hover to simulate button
	$(".contactIcon" ).hover(function() {
		$( this ).addClass("iconFade");
	  }, function() {
		$( this ).removeClass("iconFade");
	  }					
	);
}



function GetCurrentFileName(){
	//alert("Called getting file name ? ")
	//this gets the current file name, then grabs just that after the last / - or the real page name
    	var pagePathName= window.location.pathname;
		//alert(pagePathName + " " + pagePathName.substring(pagePathName.lastIndexOf("/") + 1));
    	return pagePathName.substring(pagePathName.lastIndexOf("/") + 1);
	}