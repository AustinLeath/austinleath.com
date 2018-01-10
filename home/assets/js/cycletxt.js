var h4 = $('h4[id^="cycletxt-"]').hide(),
		i = 0;

(function cycle() {

		h4.eq(i).fadeIn(700)
							.delay(4000)
							.fadeOut(700, cycle);

		i = ++i % h4.length;

})();
