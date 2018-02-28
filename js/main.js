/*============================ Navigation ============================*/
$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 100) {
	    $(".navbar").css("background" , "#333");
	  }

	  else{
		  $(".navbar").css("background" , "unset");  	
	  }
  })
})
/*============================ Navigation ============================*/
/*============================ Parallax ============================*/

 $('body').scrollspy({ target: '#navbar-example' })
/*============================ parallax ============================*/