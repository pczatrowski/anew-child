/*
	scripts.js
	
	License: GNU General Public License v3.0
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
	
	Copyright: (c) 2013 Alexander "Alx" Agnarson, http://alxmedia.se
*/

function hasParentWithID( node, id )
{
     var n = node;
     while (n != null)
	 {
         if (n.id == id)
		 {
             return true;
         }
         n = n.parentNode;
     }
     return false;
}

jQuery(document).ready(function($) {

/*  Toggle header search
/* ------------------------------------ */
	$('.toggle-search').click(function(){
		$('.toggle-search').toggleClass('active');
		$('.search-expand').fadeToggle(250);
            setTimeout(function(){
                $('.search-expand input').focus();
            }, 300);
			return false;
	});
	
	$(window).click(function( e )
		{
			if ($("#search-window").is(":visible"))
			{
				//alert( e.target.className );
				if ( !hasParentWithID( e.target, 'search-window-inner' ) )
				{
					//alert( e.target.className );
					$("#search-window").toggle("slide");
				}
			}
		});
		
		/* resize begin */
		
		$(function()
		{
			var win = $(window),
				fullscreen = $('.single'),
				image = fullscreen.find('.full-screen'),
				imageWidth = image.width(),
				imageHeight = image.height(),
				imageRatio = imageWidth / imageHeight;

			function resizeImage()
			{
				var winWidth = $(window).innerWidth(),
					winHeight = win.innerHeight(),
					winRatio = winWidth / winHeight;
					p = image.parents('p', 'full-parent');
					//p = image.parent('p');
			
				if ( winRatio > imageRatio )
				{
					var newWidth = winWidth;
					var newHeight = Math.round( winWidth / imageRatio );
				}
				else
				{
					var newWidth = Math.round(winHeight * imageRatio);
					var newHeight = winHeight;
				}
				
				/*
				image.removeAttr('sizes').width( newWidth ).height( newHeight ).css({
						width: newWidth,
						height: newHeight
							});
				//*/
				//*
				image.removeAttr('sizes').removeAttr('width').removeAttr('height').css({
						width: newWidth,
						height: newHeight
							}).css("display","");
				//*/
				p.addClass('full-parent');

				jQuery( ".full-screen" ).each( function() 
				{
					imgHeight = $(this).height();
					$(this).parents( 'p', 'full-parent' ).css(
					//$(this).parent( 'p' ).css(
					{
						height: imgHeight
					}
					)
				});
			}

			win.bind(
			{
				load: function() { resizeImage(); },
				resize: function() { resizeImage(); }
			}
			);
	});
	/* resize end */	
	
/*  Scroll to top
/* ------------------------------------ */
	$('a#back-to-top').click(function() {
		$('html, body').animate({scrollTop:0},'slow');
		return false;
	});
	
/*  Tabs widget
/* ------------------------------------ */	
	(function() {
		var $tabsNav       = $('.alx-tabs-nav'),
			$tabsNavLis    = $tabsNav.children('li'),
			$tabsContainer = $('.alx-tabs-container');

		$tabsNav.each(function() {
			var $this = $(this);
			$this.next().children('.alx-tab').stop(true,true).hide()
			.siblings( $this.find('a').attr('href') ).show();
			$this.children('li').first().addClass('active').stop(true,true).show();
		});

		$tabsNavLis.on('click', function(e) {
			var $this = $(this);

			$this.siblings().removeClass('active').end()
			.addClass('active');
			
			$this.parent().next().children('.alx-tab').stop(true,true).hide()
			.siblings( $this.find('a').attr('href') ).fadeIn();
			e.preventDefault();
		}).children( window.location.hash ? 'a[href=' + window.location.hash + ']' : 'a:first' ).trigger('click');

	})();
	
/*  Comments / pingbacks tabs
/* ------------------------------------ */	
    $(".comment-tabs li").click(function() {
        $(".comment-tabs li").removeClass('active');
        $(this).addClass("active");
        $(".comment-tab").hide();
        var selected_tab = $(this).find("a").attr("href");
        $(selected_tab).fadeIn();
        return false;
    });

/*  Table odd row class
/* ------------------------------------ */
	$('table tr:odd').addClass('alt');

/*  Sidebar collapse
/* ------------------------------------ */
	$('body').addClass('s1-collapse');
	$('body').addClass('s2-collapse');
	
	$('.s1 .sidebar-toggle').click(function(){
		$('body').toggleClass('s1-collapse').toggleClass('s1-expand');
		if ($('body').is('.s2-expand')) { 
			$('body').toggleClass('s2-expand').toggleClass('s2-collapse');
		}
	});
	$('.s2 .sidebar-toggle').click(function(){
		$('body').toggleClass('s2-collapse').toggleClass('s2-expand');
		if ($('body').is('.s1-expand')) { 
			$('body').toggleClass('s1-expand').toggleClass('s1-collapse');
		}
	});

/*  Dropdown menu animation
/* ------------------------------------ */
	$('.nav ul.sub-menu').hide();
	$('.nav li').hover( 
		function() {
			$(this).children('ul.sub-menu').slideDown('fast');
		}, 
		function() {
			$(this).children('ul.sub-menu').hide();
		}
	);
	
/*  Mobile menu smooth toggle height
/* ------------------------------------ */	
	$('.nav-toggle').on('click', function() {
		slide($('.nav-wrap .nav', $(this).parent()));
	});
	 
	function slide(content) {
		var wrapper = content.parent();
		var contentHeight = content.outerHeight(true);
		var wrapperHeight = wrapper.height();
	 
		wrapper.toggleClass('expand');
		if (wrapper.hasClass('expand')) {
		setTimeout(function() {
			wrapper.addClass('transition').css('height', contentHeight);
		}, 10);
	}
	else {
		setTimeout(function() {
			wrapper.css('height', wrapperHeight);
			setTimeout(function() {
			wrapper.addClass('transition').css('height', 0);
			}, 10);
		}, 10);
	}
	 
	wrapper.one('transitionEnd webkitTransitionEnd transitionend oTransitionEnd msTransitionEnd', function() {
		if(wrapper.hasClass('open')) {
			wrapper.removeClass('transition').css('height', 'auto');
		}
	});
	}
	
});