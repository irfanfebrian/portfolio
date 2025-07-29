
//fadeonload-irfan
window.addEventListener("beforeunload", function () {
	  document.body.classList.add("animate-out");
	});

		function closeMenu(){
			$('.menu').fadeOut('fast');
		}
		function openMenu(){
			$('.menu').fadeIn('fast');
		}
		
		
		
		
//scroll-hider-irfan		
	var didScroll;
	var lastScrollTop = 0;
	var delta = 5;
	var navbarHeight = $('div.nav1').outerHeight();

	$(window).scroll(function(event){
		didScroll = true;
	});

	setInterval(function() {
		if (didScroll) {
			hasScrolled();
			didScroll = false;
		}
	}, 250);

	function hasScrolled() {
		var st = $(this).scrollTop();
		
		// Make sure they scroll more than delta
		if(Math.abs(lastScrollTop - st) <= delta)
			return;
		
		// If they scrolled down and are past the navbar, add class .nav-up.
		// This is necessary so you never see what is "behind" the navbar.
		if (st > lastScrollTop && st > navbarHeight){
			// Scroll Down
			$('div.ifnav').removeClass('sl').addClass('sl-up');
		} else {
			// Scroll Up
			if(st + $(window).height() < $(document).height()) {
				$('div.ifnav').removeClass('sl-up').addClass('sl');
			}
		}
		
		lastScrollTop = st;
	}
	
//typedjs
$(function(){

		$("#typed").typed({
			// strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
			stringsElement: $('#typed-strings'),
			typeSpeed: 30,
			backDelay: 1500,
			loop: true,
			contentType: 'html', // or text
			// defaults to false for infinite loop
			loopCount: true,
			callback: function(){ foo(); },
			resetCallback: function() { newTyped(); }
		});

		$(".reset").click(function(){
			$("#typed").typed('reset');
		});

	});

	function newTyped(){ /* A new typed object */ }

	function foo(){ console.log("Callback"); }





