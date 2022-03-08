function makeTimer() {
	var endTime = new Date("08 December 2021 12:00:00 GMT+04:00");				
	endTime = (Date.parse(endTime) / 1000);

	var now = new Date();
	now = (Date.parse(now) / 1000);

	var timeLeft = endTime - now;

	var days = Math.floor(timeLeft / 86400); 
	var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
	var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
	var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

	if (hours < "10") { hours = "0" + hours; }
	if (minutes < "10") { minutes = "0" + minutes; }
	if (seconds < "10") { seconds = "0" + seconds; }

	$("#timer").html("Medicare Annual Enrollment Period ends in "+days+" days, "+hours+" hours, "+minutes+" minutes!");
	var dayArr = days.toString().split('');
	var hrArr = hours.toString().split('');
	var minArr = minutes.toString().split('');
	$("#newtimer").html('<p>Medicare’s Annual Election Ends in:</p> <div class="custom-time"><div><span>0</span><span>'+dayArr+'</span> <h6>Days</h6></div> <div class="colon">:</div> <div><span>'+hrArr[0]+'</span><span>'+hrArr[1]+'</span> <h6>Hours</h6></div> <div class="colon">:</div> <div><span>'+minArr[0]+'</span><span>'+minArr[1]+'</span> <h6>Minutes</h6></div></div>');
	//	$("#days").html(days + "<span> days</span>");
	//	$("#hours").html(hours + "<span> hours</span>");
	//	$("#minutes").html(minutes + "<span> minutes!</span>");
	//	$("#seconds").html(seconds + "<span>Seconds</span>");		
}

//	setInterval(function() { makeTimer(); }, 1000);
$( document ).ready(function() {
	makeTimer();
});

$(document).ready(function(){
	var temp_val = window.location.href.split("#");
	var tmpUrl = window.location.href.split("#");
	if(tmpUrl[1] =="videos"){
		setTimeout(function(){ $(".p-videos").click();}, 1000);
	}

	if(tmpUrl[1] =="learning-guides"){
		setTimeout(function(){ $(".p-learning-guides").click();}, 1000);
	}
	
	var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
		if (isMobile) {
			console.log('mobile');
			var scrollValVideo = 50;
			var scrollValLearningGuides = 120;
		}else{
			var scrollValVideo = 170;
			var scrollValLearningGuides = 250;
		}	

	if(temp_val[1] =='video'){ 
		$('.p-videos').addClass('active');
		$('html,body').animate({
			scrollTop: $('#videos').offset().top - scrollValVideo
		}, 600);
	}
	if(temp_val[1] =='learningGuides'){
		$('.p-learning-guides').addClass('active');
		$('html,body').animate({
			scrollTop: $('#learning-guides').offset().top - scrollValLearningGuides
		}, 1000);
	}

	$('.resource-header .navbar-nav > .dropdown').on('click', function(e) {
		$(this).find('.dropdown-menu').slideToggle();
	});

	$('.navbar-toggler').click(function() {
		$('.nav1').animate({left: '0'});
	});

	$('.close-toggle').click(function() {
		$('.nav1').animate({left: '-110%'});
	});

	$('.footer-menu-heading').click(function() {
		$(this).toggleClass('active');
		$(this).next('.footer-submenu').slideToggle();
	});

	$('.glossary-list-block a[href*=\\#]:not([href=\\#])').on('click', function() {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
		console.log('palsh',target);
		if (target.length) {
			$('html,body').animate({
				scrollTop: target.offset().top-140
			}, 1000);
			return false;
		}
	});

	$(".mobile-jumbotron a").on('click', function() {
		$('html, body').animate({
			scrollTop: $("#videos").offset().top - 80
		}, 1000);
	});

	$('.resource-submenu .p-videos').on('click', function() {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.substr(1) + ']');
		target = (this.hash.substr(1) =='video')?'videos':'';
		$('.sub-pr').removeClass('active');
		if (this.hash.substr(1) == 'video') { 
			$('.p-videos').addClass('active'); 
			if (target.length) {
				console.log('scrollValVideo',scrollValVideo);
				$('html,body').animate({
					scrollTop: $('#'+target).offset().top - scrollValVideo
				}, 1000);
				return false;
			}
		}
		if (this.hash.substr(1) == 'learningGuides') { 
			$('.p-learning-guides').addClass('active'); 
			if (target.length) {
				$('html,body').animate({
					scrollTop: $('#'+target).offset().top - scrollValLearningGuides
				}, 1000);
				return false;
			}
		}

	});

	$('.resource-submenu .p-learning-guides').on('click', function() {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.substr(1) + ']');
		target = (this.hash.substr(1) =='learningGuides')?'learning-guides':'';
		$('.sub-pr').removeClass('active');
		if (this.hash.substr(1) == 'video') {
			$('.p-videos').addClass('active'); 
			if (target.length) {
				$('html,body').animate({
					scrollTop: $('#'+target).offset().top - scrollValVideo
				}, 1000);
				return false;
			}
		}
		if (this.hash.substr(1) == 'learningGuides') {
			$('.p-learning-guides').addClass('active'); 
			if (target.length) {
				$('html,body').animate({
					scrollTop: $('#'+target).offset().top - scrollValLearningGuides
				}, 1000);
				return false;
			}
		}
		
	});
});


$(function(){
	// fixed-scroll-top
	$(window).scroll(function(){
		if($(window).scrollTop() >= 600){
			$('.scroll-top').css('display','block');
		}else{
			$('.scroll-top').css('display','none');
		}
	});   

	// call-scroll-top
	$(document).ready(function(){
		$(".scroll-top").click(function(){
			$("html,body").animate({
				scrollTop: 0
			});
			return false
		});

		$('.search-link').on('click', function() {
			$('.search-form-block').addClass('active');
		});

		$('.close-search').on('click', function() {
			$('.search-form-block').removeClass('active');
		});
	});

	// Preloading animation 
	$(window).on("load", function() {
		preloaderFadeOutTime = 500;
		function hidePreloader() {
			var preloader = $('.spinner-wrapper');
			preloader.fadeOut(preloaderFadeOutTime);
		}
		hidePreloader();
	});

	// navbar-fixed    
	$(window).scroll(function(){
		if($(window).scrollTop() >= 133){
			$('header').addClass('fixed-heade')
		}else{
			$('header').removeClass('fixed-heade')
		}
	});


	//page-scrollreveal
	window.sr = ScrollReveal();
	sr.reveal('.top-reveal', {
		origin: 'top',
		duration: 1200,
		distance: '15px',
		delay: 200,
		easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)'
	});
	sr.reveal('.bottom-reveal', {
		origin: 'bottom',
		duration: 1100,
		distance: '15px',
		delay: 200,
		easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)'
	});
	sr.reveal('.left-reveal', {
		scale: 0,
		origin: 'left',
		duration: 2000,
		delay: 200,
		distance: '15px'
	});
	sr.reveal('.right-reveal', {
		origin: 'right',
		duration: 1600,
		distance: '15px',
		delay: 200,
		easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)'
	});

	// Toggle Menu
	$(document).ready(function(){
		$('.navbar-toggler').click(function() {
			$('.nav1').animate({left: '0'});
		});

		$('.close-toggle').click(function() {
			$('.nav1').animate({left: '-110%'});
		});

		$('.footer-menu-heading').click(function() {
			$(this).toggleClass('active');
			$(this).next('.footer-submenu').slideToggle();
		});

		$('.glossary-list-block a[href*=\\#]:not([href=\\#])').on('click', function() {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top-140
				}, 1000);
				return false;
			}
		});
	});
});


// Comment section
$(document).ready(function(){
	$('#join-conversation').click(function() {
		$('.disqus-block').slideToggle();
	});
});

function setCookie(cname, cvalue, exdays) {
	sessionStorage[cname] =cvalue;
}

function getCookie(cname) {
	var temp = sessionStorage[cname];
	if(temp === undefined){
		return '';
	}else{
		return temp;
	}
}


$(document).ready(function(){
	$('.videoModal').on('hidden.bs.modal', function() {
		var $this = $(this).find('iframe'),
			tempSrc = $this.attr('src');
		$this.attr('src', "");
		$this.attr('src', tempSrc);
	});
});


$(document).ready(function(){
	if (/Mobi/.test(navigator.userAgent)) {
		$(window).scroll(function() {
			if ($(this).scrollTop() > 150){// this refers to window
				var sticky_blogw = getCookie("sticky_blog_block");
				console.log(sticky_blogw);
				if (sticky_blogw == "") 
				{
					$('.sticky-blog-block').removeClass('d-none'); 
					//$(".sticky-blog-block").css('bottom',0);
					$(".sticky-blog-block").animate({ bottom: '0',}, 1000);
				}
			}
		});
	}else{
		setTimeout(function(){ 
			var sticky_blogw = getCookie("sticky_blog_block");
			if (sticky_blogw == "") 
			{
				$('.sticky-blog-block').removeClass('d-none'); 
				$(".sticky-blog-block").animate({ bottom: '0',}, 2000);
			}
		}, 2000);
	}

	$('.sticky-blog-block .btn-close').on('click', function() {
		setCookie("sticky_blog_block", "open", 1);
		$('.sticky-blog-block').addClass('d-none');
	});
});