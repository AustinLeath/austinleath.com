var h5 = $('h5[id^="cycletxt-"]').hide(),
 i = 0;

(function cycletxt() {

			 h5.eq(i).fadeIn(1000)
							  .delay(3500)
			  				.fadeOut(1000, cycletxt);

		 i = ++i % h5.length;

})();
