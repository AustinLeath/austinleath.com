var p = $('p[id^="cycletxt-"]').hide(),
  i = 0;

(function cyclea() {

			 p.eq(i).fadeIn(800)
							  .delay(5000)
			  				.fadeOut(800, cyclea);

		i = ++i % p.length;

})();
