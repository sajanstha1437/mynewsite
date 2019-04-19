'use strict';

$(function() {
	setInterval(function(){
		${'#slider .slides'}.animate({'margin-left':'-=600px'},1000);

	},3000);

})