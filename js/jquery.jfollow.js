// jQuery jFollow
// v1.0
//Dependency, jQuery 1.4+
//Author: Franco Haley

(function($){
	$.fn.jfollow = function(follower, pad){
		pad = pad || 0;
		
		if (!follower){
			throw("No follow selector passed.");
			return false;
		};
		
		return this.each(function(){
			var sticky = $(this),
				follow = $(follower),
				win = $(window),
				followTop = follow.offset().top,
				followLeft,
				oldcss = {
					position: sticky.css('position'),
					top: sticky.css('position'),
					left: sticky.css('left')
				};
			;
			
		var followfn = function(){
			followLeft = follow.offset().left - win.scrollLeft()
			
			if (win.scrollTop() >= followTop - pad){
				sticky.css({
					position:'fixed',
					top: pad,
					left: followLeft - win.scrollLeft()
				});
			}else{
				sticky.css(oldcss);
			};
		};
		
		followfn();
		
		win.bind('scroll resize', followfn);
		});
	};
})(jQuery);