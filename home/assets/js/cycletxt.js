var h4 = $('h4[id^="cycletxt-"]').hide(),
		i = 0;

(function cycle() {

		h4.eq(i).fadeIn(600)
							.delay(3000)
							.fadeOut(600, cycle);

		i = ++i % h4.length;

})();
