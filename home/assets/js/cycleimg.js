var img = $('img[id^="image-"]').hide(),
  i = 0;

(function cycle() {

			 img.eq(i).fadeIn(800)
							  .delay(200)
			  				.fadeOut(800, cycle);

		i = ++i % img.length;

})();
