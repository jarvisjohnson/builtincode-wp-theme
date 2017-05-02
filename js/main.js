jQuery(document).ready(function(){


	"use strict";

    $('.navigation').singlePageNav({
        currentClass : 'active',
				// offset: 300,
				updateHash: true
    });


		$(document).on('click', '.toggle-menu', function(event){
        $('.responsive-menu').stop(true,true).slideToggle();
        return false;
    });


		$(document).on('click', '.contact-scroll', function(event){
				var hashTagActive = "";
				if(hashTagActive != this.hash) { //this will prevent if the user click several times the same link to freeze the scroll.
						event.preventDefault();
						//calculate destination place
						var dest = 0;
						if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
								dest = $(document).height() - $(window).height();
						} else {
								dest = $(this.hash).offset().top;
						}
						//go to destination
						$('html,body').animate({
								scrollTop: dest
						}, 400, 'swing');
						hashTagActive = this.hash;
				}
		});


  });
