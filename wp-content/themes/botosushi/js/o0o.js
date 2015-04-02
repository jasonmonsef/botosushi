jQuery( document ).ready(function() {
	
  jQuery("#content").isotope({
    itemSelector: ".module",
    layoutMode: "packery"
  });
  

  jQuery("body").delay(300).addClass("loaded");
  jQuery( "input#choice_4_3" ).removeProp("checked");
  jQuery( "input#choice_4_4" ).removeProp("checked");
  jQuery( "input#choice_4_0" ).removeProp("checked");
  jQuery( "input#choice_4_1" ).removeProp("checked");
  jQuery( "input#choice_4_2" ).removeProp("checked");
	

});
/*
		  jQuery("#label_1star").click(function() {
  	    jQuery("input.gform_hidden").val("1star");
  	  });
  	  
		  
	    jQuery("#label_2star").click(function() {
  	    jQuery("input.gform_hidden").val("2star");
  	  });
		  
	    jQuery("#label_3star").click(function() {
  	    jQuery("input.gform_hidden").val("3starz");
  	  });
*/

	  	jQuery("label.star-1").click(function() {
  		  jQuery("#ratingsForm").fadeOut(function() {
					jQuery(".gform-wrap").fadeIn();
				});
  		});
			
	  	jQuery("label.star-2").click(function() {
  		  jQuery("#ratingsForm").fadeOut(function() {
					jQuery(".gform-wrap").fadeIn();
				});
 			});
			
	  	jQuery("label.star-3").click(function() {
  		  jQuery("#ratingsForm").fadeOut(function() {
					jQuery(".gform-wrap").fadeIn();
				});
  		});
  		
	  	jQuery("label.star-4").click(function() {
  		  jQuery("#ratingsForm").fadeOut(function() {
					jQuery('.review_links').fadeIn();
				});
  		});
			
	  	jQuery("label.star-5").click(function() {
  		  jQuery("#ratingsForm").fadeOut(function() {
					jQuery('.review_links').fadeIn();
				});
  		});
  	

//hide the stars after click
jQuery(document).on("click", "#feedback .stars label", function () {
	jQuery( "#ratingsForm .stars" ).fadeOut();
	jQuery( "#feedback" ).append("<p>Thank you!</p>");
});


// open menu in modal dialog
jQuery(document).on("click", "#menu-box .trigger-overlay, #header .trigger-overlay.menu", function () {
	jQuery("#menu-box .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#menu-box .overlay").toggleClass("open");
	jQuery("#menu-box .trigger-overlay.close").show()
	jQuery("#menu-box .gform-wrap").removeClass("expand")
	jQuery("#menu-box .deals-cta").show()
});
// open About Us in modal dialog
jQuery(document).on("click", "#aboutus .trigger-overlay, #header .trigger-overlay.aboutus", function () {
	jQuery("#aboutus .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#aboutus .overlay").toggleClass("open");
	jQuery("#aboutus .trigger-overlay.close").show()
	jQuery("#aboutus .gform-wrap").removeClass("expand")
	jQuery("#aboutus .deals-cta").show()
});
// open feedback form in modal dialog
jQuery(document).on("click", "#feedback #ratingsForm .stars label, #feedback .trigger-overlay.close", function () {
	jQuery("#feedback .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#feedback .overlay").toggleClass("open");
	jQuery("#feedback .trigger-overlay.close").show()
	jQuery("#feedback .gform-wrap").removeClass("expand")
	jQuery("#feedback .deals-cta").show()
});
// open Custom Reviews Form in modal dialog
jQuery(document).on("click", "#customer_reviews .trigger-overlay, #customer_reviews label", function () {
	jQuery("#feedback .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#feedback .overlay").toggleClass("open");
	jQuery("#feedback .trigger-overlay.close").show()
	jQuery("#feedback .gform-wrap").removeClass("expand")
	jQuery("#feedback .deals-cta").show()
	jQuery( ".review_links" ).show();
});
// open E-Club form in modal dialog
jQuery(document).on("click", "#eclub .trigger-overlay", function () {
	jQuery("#eclub .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#eclub .overlay").toggleClass("open");
	jQuery("#eclub .trigger-overlay.close").show()
	jQuery("#eclub .gform-wrap").removeClass("expand")
	jQuery("#eclub .deals-cta").show()
});
// open Meet The chefs form in modal dialog
jQuery(document).on("click", "#meetchef .trigger-overlay", function () {
	jQuery("#meetchef .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#meetchef .overlay").toggleClass("open");
	jQuery("#meetchef .trigger-overlay.close").show()
	jQuery("#meetchef .gform-wrap").removeClass("expand")
	jQuery("#meetchef .deals-cta").show()
});
// show specific chef bio
jQuery(document).on("click", "#meetchef .trigger-overlay.1", function () {
	jQuery(".chef.1").show();
});
jQuery(document).on("click", "#meetchef .trigger-overlay.2", function () {
	jQuery(".chef.2").show();
});
jQuery(document).on("click", "#meetchef .trigger-overlay.3", function () {
	jQuery(".chef.3").show();
});
jQuery(document).on("click", "#meetchef .trigger-overlay.4", function () {
	jQuery(".chef.4").show();
	
});
jQuery(document).on("click", "#meetchef .trigger-overlay.close", function () {
	jQuery(".chef").delay(1000).fadeOut();
});
// open E-Club form in modal dialog
jQuery(document).on("click", "#catering .trigger-overlay", function () {
	jQuery("#catering .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#catering .overlay").toggleClass("open");
	jQuery("#catering .trigger-overlay.close").show()
	jQuery("#catering .gform-wrap").removeClass("expand")
	jQuery("#catering .deals-cta").show()
});
// open FiveStar form in modal dialog
jQuery(document).on("click", "#fivestar .trigger-overlay", function () {
	jQuery("#fivestar .switch").addClass("overlay").removeClass("switch").show();
	jQuery("#fivestar .overlay").toggleClass("open");
	jQuery("#fivestar .trigger-overlay.close").show()
	jQuery("#fivestar .gform-wrap").removeClass("expand")
	jQuery("#fivestar .deals-cta").show()
});



