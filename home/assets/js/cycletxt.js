var h4 = $('h4[id^="cycletxt-"]').hide(),
  i = 0;

(function cyclea() {

			 h4.eq(i).fadeIn(800)
							  .delay(5000)
			  				.fadeOut(800, cyclea);

		i = ++i % h4.length;

})();
