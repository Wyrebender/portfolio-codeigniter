/*------------------------------------------------------------------
[Custom Script]

Project:	Portfolio
Version:	1.1
Last change:	09/03/13 [add comments]
Author:		Franco Haley
-------------------------------------------------------------------*/

(function($){
	
	$toTop = $('#toTop');
	$floaterbox = $('.floaterbox');
	
	// UI top button settings
	$toTop.UItoTop({ easingType: 'easeOutQuart' });
	$floaterbox.jfollow('.followbox', 20); // Target the selector and pass in two arguements: follower, pad(ding pixels)
	
})(jQuery);