'use strict'

jQuery(document).ready(function($) {

	$(window).on('scroll', function (e) {
		if ($(window).scrollTop() > 40 && !$('.menu_wrap.mobile').hasClass('open')) {
			$('header').addClass('scroll');
		} else {
			$('header').removeClass('scroll');
		}
	});

	const header = document.querySelector('header');
	const menu = document.querySelector('.menu_wrap.mobile');
	document.querySelector('.menu_wrap.mobile').style.top =  "-" + menu.clientHeight + "px";
	document.querySelector('.site-main').style.paddingTop = header.clientHeight + "px";

	$(window).on('resize', function() {
		document.querySelector('.site-main').style.paddingTop = header.clientHeight + "px";
		document.querySelector('.menu_wrap.mobile').style.top =  "-" + menu.clientHeight + "px";
	});

	$('.mobile_menu_icon').click(function(e){
		e.preventDefault();
		if ($(this).hasClass('open')) {
			document.querySelector('.menu_wrap.mobile').style.top =  "-" + menu.clientHeight + "px";
		} else {
			document.querySelector('.menu_wrap.mobile').style.top = header.clientHeight + "px";
		}

		$(this).toggleClass('open');
		$('.menu_wrap.mobile').toggleClass('open');
	});

});