var h5 = $('h5[id^="cycletxt-"]').hide(),
  i = 0;

(function cycle() {

			 h5.eq(i).fadeIn(900)
							  .delay(6500)
			  				.fadeOut(900, cycle);

		i = ++i % h5.length;

})();
