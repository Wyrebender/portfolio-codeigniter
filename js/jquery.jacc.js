/*
	jAcc: Accordion
	Compatibility: jQuery 1.4+
	Author: Franco Haley
	COMPANY NAME
*/

//**function use to prevent conflict on other programming languages**
(function($){

	$.fn.jacc = function(opts){
		
		//**create default object**
		opts = $.extend({
			headers: 'a',
			contents: 'div',
			duration: 600,
			easing: 'swing',
			multi: false,
			show: 0,
			activeClass: 'active'
		}, opts);
		
		//console.log(opts);
		//console.log(this);
		this.each(function(){
			//console.log(this);
			var acc = $(this),
				headers = acc.find(opts.headers),
				contents = acc.find(opts.contents)
			;
			
			if (opts.show === false){
				contents.hide();
			}else if(typeof opts.show === 'number'){
				headers.eq(opts.show).addClass(opts.activeClass);
				contents.not(":eq("+ opts.show +")").hide();
			};
			
			headers.bind('click', function(e){
				var that = $(this),
					opener = that.next()
				;
				
				if(!opener.is(":animated")){
					if(opts.multi === true){
					
						if(opts.activeClass !== false){
							if(opener.is(":hidden")){
								that.addClass(opts.activeClass);
							} else{
								that.removeClass(opts.activeClass);
							};
						}
					
						opener.slideToggle(opts.duration, opts.easing);
					}else{
					
					if(opts.activeClass !== false){
						headers.removeClass(opts.activeClass);
						that.addClass(opts.activeClass);
					};
					
						opener
							.slideDown(opts.duration, opts.easing)
							.siblings(opts.contents)
							.slideUp(opts.duration, opts.easing)
						;
					};
				};
				e.preventDefault();
			});
		});
	};
})(jQuery);