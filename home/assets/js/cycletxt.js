<<<<<<< HEAD
var h4 = $('h4[id^="cycletxt-"]').hide(),
  i = 0;
=======
var h4 = $('h4[id^="cycle-"]').hide(),
		i = 0;
>>>>>>> c35c963897a3c2f35860b0f1bbba8bf12f9ae0cc

(function cyclea() {

			 h4.eq(i).fadeIn(800)
							  .delay(5000)
			  				.fadeOut(800, cyclea);

		i = ++i % h4.length;

})();
