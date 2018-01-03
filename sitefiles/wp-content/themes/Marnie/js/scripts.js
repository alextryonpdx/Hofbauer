(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';




		$('#contactform').submit(function(){
			var action = $(this).attr('action');
			$("#message").slideUp(250,function() {
	            $('#message').hide();
	            $('#submit')
	                .after('<img src="wp-content/themes/Marnie/img/contact-form-loader.gif" class="form-loader" />')
	                .attr('disabled','disabled');
	            $.post(action, {
	                name: $('#name').val(),
	                email: $('#email').val(),
	                phone: $('#phone').val(),
	                patientType: $("input[type='radio'][name='patientType']:checked").val(),
	                contactBy: $("input[type='radio'][name='contactBy']:checked").val(),
	                comments: $('#comments').val(),
	            },
	                function(data){
	                    document.getElementById('message').innerHTML = data;
	                    $('#message').slideDown(250);
	                    $('#contactform img.form-loader').fadeOut('slow',function(){$(this).remove()});
	                    $('#submit').removeAttr('disabled');
	                    if(data.match('success') != null) $('#contactform').slideUp(850, 'easeInOutExpo');
	                }
	            );
			});
			return false;
		});


		gradients();

		
		// DOM ready, take it away
		scrollCheckMenu();

		$('nav li a').each(function(){
			$(this).addClass('smoothScroll');
		});


		if( $('body.single').length || $('.archive').length ){
			console.log('single');
			fixLinks();
		} else {
			initMap();
			$('.smoothScroll').on('click', function(e){
				hideMenu();
				var target = $(this).attr('href');
				console.log(target);
				if( target ){
					var position = $(target).offset()['top'];
				} else {
					position - 0;
				}
				$('html, body').animate({ scrollTop: position }, 2000, 'easeInOutExpo', function(){
					window.location.hash = target;
				});
			});
		}
			
		
		showMore();
		readMore();
		teamGallery();
		overlayGallery();
		
		$(".page-anchor").mouseenter(function(){
			 var id = $(this).attr('id');
			 $('a').removeClass('active');
			 $("[href=#"+id+"]").addClass('active');
		});

		$('nav li a').each(function(){
			$(this).on('click', function(){
				$('a').removeClass('active');
				$(this).addClass('active');
			})
		})

		// settings for element reveals
		window.sr = ScrollReveal();
		if ( $('.reveal-up') ){
			sr.reveal('.reveal-up', {
				origin: 'bottom',
				distance: '80px',
				duration: 850,
				viewFactor: 0.2
			});
		}
		if ( $('.reveal-left') ){
			sr.reveal('.reveal-left', {
				origin: 'right',
				duration: 850,
				viewFactor: 0.2,
				distance: '80px'
			});
		}
		if ( $('.reveal-right') ){
			sr.reveal('.reveal-right', {
				origin: 'left',
				duration: 850,
				viewFactor: 0.2,
				distance: '80px'
			});
		}


		// scroll check
		$(window).on('scroll', function(){
			scrollCheckMenu();
			autoHide();
		})
	});
	




	



})(jQuery, this);







function initMap(){
	var clinic = {lat: 45.208660, lng: -123.229060};
	$("#map").gmap3({
		address:"2260 SW 2ND Street - McMinnville, Oregon 97128",
    	options:{
    		zoom: 12,
			scrollwheel:true,
			draggable: true
		}
	})
	.marker({
		position: clinic,
		icon: "/wp-content/themes/Marnie/img/map-icon-magento.png"
	})
	.infowindow({
		content: "2260 SW 2ND Street<br/>McMinnville, Oregon 97128<br/>503.474.9888"
    })
    .then(function (infowindow) {
        var map = this.get(0);
        var marker = this.get(1);
        marker.addListener('mouseover', function() {
          infowindow.open(map, marker);
        });
        marker.addListener('mouseout', function() {
          infowindow.close(map, marker);
        });
        marker.addListener('click', function() {
          window.open('https://www.google.com/maps/place/2260+SW+2nd+St,+McMinnville,+OR+97128/@45.2084334,-123.2312057,17z/data=!3m1!4b1!4m5!3m4!1s0x54954910e8dcc141:0xbdc3b833bac7c4c!8m2!3d45.2084334!4d-123.229017', '_blank');
        });
    });
}

function scrollFix(){
	console.log(window.location.hash);
	hash = window.location.hash;
	if( hash.length > 1 ){
		position = $(hash).offset().top;
		if( position !== $(document).scrollTop() ){
			console.log('scrolling');
			$('html, body').animate({ scrollTop: position }, 'slow');
		}
	}
}


function teamGallery(){
	$('#team-photos').on('init', function () {
		$('#team-photos').show();
	}).slick({
	  autoplay: true,
	  autoplaySpeed: 10000,
	  pauseOnHover: true,
	  pauseOnFocus: true,
	  pauseOnDotsHover: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: true,
	  dots: false,
	  fade: false,
	  centerMode: true,
	  infinite: true,
	  focusOnSelect: false,
	  asNavFor: '#team-bios, #team-photos-mobile',
	  prevArrow: '#prev-arrow, .prevUp',
	  nextArrow: '#next-arrow, .nextUp',
	  centerPadding: '33.4%',
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        infinite: true,
	        dots: false,
	        centerMode: false,
	        arrows: true,
	        centerPadding: '0'
	      }
	  }]
	});
	$('#team-bios').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  dots: false,
	  arrows: false,
	  fade: true,
	  centerMode: false,
	  focusOnSelect: false,
	  asNavFor: '#team-photos, #team-photos-mobile',
	  infinite: true
	});

	$('#team-photos').on('afterChange', function(event, slick, currentSlide, nextSlide){
		$('.slick-slide').removeClass('nextUp');
		$('.slick-slide').removeClass('prevUp');
		$('.slick-center').next('.slick-slide').addClass('nextUp');
		$('.slick-center').prev('.slick-slide').addClass('prevUp');
		$('.prevUp').unbind();
		$('.nextUp').unbind();
		$('.nextUp').on('click', function(){
			$('#team-photos').slick('slickNext');
		});
		
		$('.prevUp').on('click', function(){
			$('#team-photos').slick('slickPrev');
		})
	});
	// attach classes and click actions to prev/next team photo before first navigation
	$('.slick-center').next('.slick-slide').addClass('nextUp');
	$('.slick-center').prev('.slick-slide').addClass('prevUp');
	$('.nextUp').on('click', function(){
		$('#team-photos').slick('slickNext');
	});
	
	$('.prevUp').on('click', function(){
		$('#team-photos').slick('slickPrev');
	})
}


function fixLinks(){
	$('a.smoothScroll').each(function(){
		$(this).attr('href', '/' + $(this).attr('href') );
	})
}

function scrollCheckMenu(){
	if( $(window).width() > 768 ){
		if( $(window).scrollTop() >= ( $(window).height() ) ) {
			$('.header').addClass('scrolled');
		} else {
			$('.header').removeClass('scrolled');
		}
	} else {
		if( $(window).scrollTop() >= $('#home').height() - 100 ) {
			$('.header').addClass('scrolled');
		} else {
			$('.header').removeClass('scrolled');
		}
	}
	
}


function overlayGallery(){
	$('.overlay-slider').slick({
	  prevArrow: '#overlay-prev-arrow',
	  nextArrow: '#overlay-next-arrow',
	  fade: true,
	  infinite: true
	});
}
function autoHide(){
	if( $(window).scrollTop() < ($('#procedures').offset()['top'] - $(window).height() ) || $(window).scrollTop() > ($('#procedures').offset()['top'] + $('#procedures').height()) ) {
		hideOverlay();
	}
}
function showOverlay(count){
	console.log(count);
	// $('.overlay').css('z-index', '2');
	$('.overlay-slider').slick('slickGoTo', count);
	$('.overlay').addClass('showverlay');
	// $('.overlay').animate({'opacity':1, 'z-index': '2'}, 500);
	// scrollLock();
}
function hideOverlay(){
	// $('.overlay').animate({'opacity':0, 'z-index': '-1'}, 500);
	$('.overlay').removeClass('showverlay');
	// scrollUnlock();
}
function showMore(){
	$('.show-button').on('click', function(){
		$(this).next('.more-items').show();
		$(this).next('.more-items').children('.blog-preview').unwrap();
		$(this).remove();
	}) 
}
function readMore(){
	$('.excerpt a').on('click', function(){
		$(this).parent('.excerpt').hide();
		content = $(this).parents('.readmore').find('.content');
		content.show();
		$(this).parent('.excerpt').hide();
		autoCollapse(content);
	})
}

function autoCollapse(element){
	$(window).on('scroll', function(){
		if ( $(element).offset()['top'] + $(element).height()  <= $(window).scrollTop() || $(element).offset()['top'] >= $(window).scrollTop() + $(window).height() ){
			console.log('element: ', element);
			console.log('element top: ', $(element).offset()['top'] );
			console.log('element bottom: ', $(element).offset()['top']+$(element).height() );
			console.log('window top: ', $(window).scrollTop());
			console.log('window bottom: ', $(window).scrollTop() + $(window).height() );
			if( $(window).scrollTop() > $(element).offset()['top']+$(element).height()){
				position = $(window).scrollTop() - $(element).height();
				$('html, body').animate({ scrollTop: position }, 1, 'easeInOutExpo');
			}
			$(element).hide();
			$(element).parents('.readmore').find('.excerpt').show();
		}
	})
}

function showMenu(){

	$('.nav').animate({'left': 0}, 750, function(){
		console.log('faded');
	});
	// $('body').animate({'margin-right': '150%', 'margin-left': '-150%'}, 750);
	// $('.menu li').animate({'margin-top':'-8px', 'opacity':1}, 1250);
	// scrollLock();
}
function hideMenu(){
	$('.nav').animate({'opacity': '0'}, 750, function(){
		$('.nav').animate({'left': '100%'}, 400, function(){
			$('.nav').animate({'opacity': '1'});
		})
		// $('.menu li').animate({'margin-top':'20px', 'opacity':0}, 600);
	});
	// $('body').animate({'margin-right': '0', 'margin-left': '0'}, 750, 
		// scrollUnlock()
		// );
	
}
function scrollLock(){
	$('body').addClass('scroll-lock');
}
function scrollUnlock(){
	$('body').removeClass('scroll-lock');
}

function gradients(){
	var img_array = [1, 2, 3, 4, 5],
        newIndex = 0,
        index = 0,
        interval = 5000;

	setInterval(function() {
		index = (index + 1) % (img_array.length);
	    $('.gradient').attr('bg', index);
	}, interval);
}
$('#bgs').load( function(event) {
    console.log('BGs loaded');
    gradients();
    $('.gradient').attr('bg', '1');
  });

// function gradients(){
//     var img_array = [1, 2, 3, 4],
//         newIndex = 0,
//         index = 0,
//         interval = 5000;
//     (function changeBg() {

//         //  --------------------------
//         //  For random image rotation:
//         //  --------------------------

//         //  newIndex = Math.floor(Math.random() * 10) % img_array.length;
//         //  index = (newIndex === index) ? newIndex -1 : newIndex;

//         //  ------------------------------
//         //  For sequential image rotation:
//         //  ------------------------------

//         index = (index + 1) % img_array.length;

//         $('.gradient').css('backgroundImage', function () {
//             $('.gradient').animate({
//                 backgroundColor: 'transparent'
//             }, 1000, function () {
//                 setTimeout(function () {
//                     $('#.gradient').animate({
//                         backgroundColor: 'rgb(255,255,255)'
//                     }, 1000);
//                 }, 3000);
//             });
//             return 'url(wp-content/themes/Marnie/img/bg/set1/' + img_array[index] +'.jpg)';
//         });
//         setTimeout(changeBg, interval);
//     })();
// }