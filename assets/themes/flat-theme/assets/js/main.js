jQuery(function($) {

	//#main-slider
	$(function(){
		$('#main-slider.carousel').carousel({
			interval: 8000
		});
	});

	$( '.centered' ).each(function( e ) {
		$(this).css('margin-top',  ($('#main-slider').height() - $(this).height())/2);
	});

	$(window).resize(function(){
		$( '.centered' ).each(function( e ) {
			$(this).css('margin-top',  ($('#main-slider').height() - $(this).height())/2);
		});
	});

	//portfolio
	$(window).load(function(){
		$portfolio_selectors = $('.portfolio-filter >li>a');
		if($portfolio_selectors!='undefined'){
			$portfolio = $('.portfolio-items');
			$portfolio.isotope({
				itemSelector : 'li',
				layoutMode : 'fitRows'
			});
			$portfolio_selectors.on('click', function(){
				$portfolio_selectors.removeClass('active');
				$(this).addClass('active');
				var selector = $(this).attr('data-filter');
				$portfolio.isotope({ filter: selector });
				return false;
			});
		}
	});

	//contact form
	var form = $('.contact-form');
	form.submit(function () {
		$this = $(this);
		$.post($(this).attr('action'), function(data) {
			$this.prev().text(data.message).fadeIn().delay(3000).fadeOut();
		},'json');
		return false;
	});

	//goto top
	$('.gototop').click(function(event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: $("body").offset().top
		}, 500);
	});	

	//Pretty Photo
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false
	});
	
	//Team
    	$(document).ready(function(){
	  $('.team-list a').click(function(e) {
	    e.preventDefault();
	    $(this).siblings().removeClass('col-lg-4 col-md-4 col-sm-4').addClass('col-lg-2 col-md-2 col-sm-2');
	    $(this).removeClass('col-lg-2 col-md-2 col-sm-2').addClass('col-lg-4 col-md-4 col-sm-4');
	    $(this).closest('.team-list').next('.team-member').children('.team').addClass('hidden-lg hidden-md hidden-sm');
	    $(this).closest('.team-list').next('.team-member').children('.team').eq($(this).index()).removeClass('hidden-lg hidden-md hidden-sm');
	  });
	});
	
});