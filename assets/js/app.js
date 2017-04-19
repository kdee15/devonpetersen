// JAVASCRIPT LAYER [APP.JS]  =========================================================================================

// ====== INDEX  ======================================================================================================
// ==
// == A. BURGER MENU
// == B. HOMEPAGE CAROUSEL
// ==
// ====== INDEX  ======================================================================================================

jQuery(document).ready(function($) {

// A. SHOW/HIDE +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    
// A.1. BURGER MENU --------------------------------------------------------------------------------------------------- 
    
$('.reveal').click(function(e) {
    
    var target = $(this).attr('href');
    
    if ($(target).hasClass('hide-nav') ) {
        
        $(target).removeClass('hide-nav');
        $('.reveal').addClass('is-active');
        
    } else {
        
        $(target).addClass('hide-nav');
        $('.reveal').removeClass('is-active');
        
    }
    
    e.preventDefault();
    
  });
    
// A.1. END -----------------------------------------------------------------------------------------------------------
    
// A.2. GENERAL SHOW --------------------------------------------------------------------------------------------------
    
$('.showhide').click(function(e) {
    
    var target = $(this).attr('href');
    
    if ($(target).hasClass('hidden') ) {
        
        $(target).removeClass('hidden');
        $('.showhide').addClass('close');
        
    } else {
        
        $(target).addClass('hidden');
        $('.showhide').removeClass('close'); 
        
    }
    
    e.preventDefault();
    
  });
    
// A.2. END -----------------------------------------------------------------------------------------------------------
    
// A.2. END -----------------------------------------------------------------------------------------------------------
    
var currentContent = '';	
	$(".toggle-div").on('click', function(){
		currentContent = $(this).attr('name');
		if($('#'+currentContent).hasClass('on')){
			$('#'+currentContent).removeClass('on');
            $("body").removeClass("modal-open");
		}else{
			hideAllContent();
			showCurrentContent(currentContent);
		}
	});

	function hideAllContent(){
		$('.toggle-content').removeClass('on');
        $("body").removeClass("modal-open");
	};
	
	function showCurrentContent(currentContentDiv){
		$('#'+currentContentDiv).addClass('on');
        $("body").addClass("modal-open");
	};	
			 
// A.2. END -----------------------------------------------------------------------------------------------------------
    
// A.3. SCROLL TO LINK ------------------------------------------------------------------------------------------------
    
    
    $('.scroll-to, .email-us, .home-link').click(function(event){
        
        event.preventDefault();
        // calculate destination place
        var dest=0;
        if($(this.hash).offset().top > $(document).height()-$(window).height()){
            dest=$(document).height()-$(window).height();
        }else{
            dest=$(this.hash).offset().top;
        }
        // go to destination
        $('html,body').animate({scrollTop:dest}, 1000,'swing');
        
        // BURGER MENU
        $('#mobi-nav').addClass('hide-nav');
        $('.burger').removeClass('is-active');
        
    });
    
    
// A.3. END -----------------------------------------------------------------------------------------------------------
    
// A.4. SHOW HIDE LOGO ------------------------------------------------------------------------------------------------

    var t = $(".wrapper").offset().top;

    $(document).scroll(function(){

        if (document.documentElement.clientWidth > 640) {

            // Hide the logo, and show as you scroll
            if($(this).scrollTop() > t)
            {   
                $('.logo').addClass('not-top');
                $('.logo-figure').addClass('not-top');
                $('#masthead').addClass('not-top');

            }else{
                $('#masthead').removeClass('not-top');
                $('.logo').removeClass('not-top');
                $('.logo-figure').removeClass('not-top');
            }
        }

    });
    
// A.4. END -----------------------------------------------------------------------------------------------------------
    
// A.5. SCREEN SIZE CHECK ---------------------------------------------------------------------------------------------
    
    var screen = $( window ).width();
    console.log('I am a phone, and my width is: ' + screen);
    
// A.5. END -----------------------------------------------------------------------------------------------------------
    
// A.6. RESOURCE PATHS ------------------------------------------------------------------------------------------------
    
    var icons = 'assets/includes/icons/';
    
// A.6. END -----------------------------------------------------------------------------------------------------------
    
// A.7. RANDOM IMAGE SELECTOR -----------------------------------------------------------------------------------------
	
    var totalImages = 6;

    var RandomNum = Math.floor( Math.random() * totalImages);

    $(document).ready(function(){

        $('body.home').attr("style","background-image:url('wp-content/themes/spartan/assets/images/background/bg-main"+RandomNum+".jpg')");

    }); 
    
// A.7. END -----------------------------------------------------------------------------------------------------------
    
// A.8. OWL CAROUSEL --------------------------------------------------------------------------------------------------
 
    $(document).ready(function() { 
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: true
                },
                1000: {
                    items: 6,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    margin: 15
                }
            }
        })
    })
    
// A.8. END -----------------------------------------------------------------------------------------------------------
   
    
    
// A.9. AUTO HEIGHT ---------------------------------------------------------------------------------------------------
    
    /*
        http://codepen.io/micahgodbolt/pen/FgqLc

        Thanks to CSS Tricks for pointing out this bit of jQuery
        http://css-tricks.com/equal-height-blocks-in-rows/
        It's been modified into a function called at page load and then each time the page is resized.
        One large modification was to remove the set height before each new calculation.
    */
    var equalheight;
    equalheight = function(container){
        var currentTallest = 0,
            currentRowStart = 0,
            topPosition = 0,
            currentDiv = 0,
            rowDivs = [],
            $el;
        $(container).each(function() {

            $el = $(this);
            $($el).height('auto');
            topPosition = $el.position().top;

            if (currentRowStart != topPosition) {
                for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
                    rowDivs[currentDiv].height(currentTallest);
                }
                rowDivs.length = 0; // empty the array
                currentRowStart = topPosition;
                currentTallest = $el.height();
                rowDivs.push($el);
            } else {
                rowDivs.push($el);
                currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
            }
            for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
        });
    };

    $(window).load(function() {
        
        equalheight('.section__articles .article:nth-child(n+2) .image-wrapper');
        equalheight('.section__articles .article:nth-child(n+2) h3');
        equalheight('.section__articles .article:nth-child(n+2) p');
        
        if($(window).width() >= 480) {
        
            // SPONSOR CAROUSEL
            equalheight('.owl-stage .item');
            
            // EVENTS BLOCKS
            equalheight('.section__events .list__schedule .schedule .title');
            equalheight('.section__events .list__schedule .schedule p:nth-child(2)');
            
            // HOMEPAGE BLOG BLOCKS
            equalheight('.section-blog .section__articles .article__body h3');
            equalheight('.section-blog .section__articles .article__body p');
        
        }
                
        if($(window).width() > 480) {
        
            // SECTION FIXTURE CARDS
            equalheight('.section__fixtures .list__fixtures > li');
            equalheight('.section__fixtures .list__fixtures > li h3');
            equalheight('.section__fixtures .list__fixtures > li .opponent');
            equalheight('.section__fixtures .list__fixtures > li .venue');
            
            // PAGE FIXTURE CARDS
            equalheight('.section__fixtures > li');
            equalheight('.section__fixtures > li h3');
            equalheight('.section__fixtures > li .opponent');
            equalheight('.section__fixtures > li .venue');
        
        }
        
    });

    $(window).resize(function() {
        
        equalheight('.section__articles .article:nth-child(n+2) .image-wrapper');
        equalheight('.section__articles .article:nth-child(n+2) h3');
        equalheight('.section__articles .article:nth-child(n+2) p');
        
        if($(window).width() >= 480) {
        
            // SPONSOR CAROUSEL
            equalheight('.owl-stage .item');
            
            // EVENTS BLOCKS
            equalheight('.section__events .list__schedule .schedule .title');
            equalheight('.section__events .list__schedule .schedule p:nth-child(2)');
            
            // HOMEPAGE BLOG BLOCKS
            equalheight('.section-blog .section__articles .article__body h3');
            equalheight('.section-blog .section__articles .article__body p');
        
        }
                
        if($(window).width() > 480) {
        
            // SECTION FIXTURE CARDS
            equalheight('.section__fixtures .list__fixtures > li');
            equalheight('.section__fixtures .list__fixtures > li h3');
            equalheight('.section__fixtures .list__fixtures > li .opponent');
            equalheight('.section__fixtures .list__fixtures > li .venue');
            
            // PAGE FIXTURE CARDS
            equalheight('.section__fixtures > li');
            equalheight('.section__fixtures > li h3');
            equalheight('.section__fixtures > li .opponent');
            equalheight('.section__fixtures > li .venue');
        
        }
        
    });
    
// A.9. END -----------------------------------------------------------------------------------------------------------
    
// A. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	
});