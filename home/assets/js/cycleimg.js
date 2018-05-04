var img = $('img[id^="image-"]').hide(),
  i = 0;

(function cycle() {

			 img.eq(i).fadeIn(900)
							  .delay(8000)
			  				.fadeOut(900, cycle);

		i = ++i % img.length;

})();
