var h5 = $('h5[id^="cycletxt-"]').hide(),
   i = 0;

(function cycletxt() {

			 h5.eq(i).fadeIn(900)
							  .delay(500)
			  				.fadeOut(900, cycletxt);

		 i = ++i % h5.length;

})();
