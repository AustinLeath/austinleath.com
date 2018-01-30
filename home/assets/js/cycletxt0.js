
var h5 = $('h5[id^="cycletxt-"]').hide(),
 i = 0;

(function cycletxt() {

			 h5.eq(i).fadeIn(500)
							  .delay(100)
			  				.fadeOut(500, cycletxt);

		 i = ++t % h5.length;

});

var img = $('img[id^="image-"]').hide(),
  i = 0;

(function cycle() {

			 img.eq(i).fadeIn(500)
							  .delay(100)
			  				.fadeOut(500, cycle);

		i = ++i % img.length;

})();
