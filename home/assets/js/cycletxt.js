var divs = $('div[id^="content-"]').hide(),
		i = 0;

(function cycle() {

		divs.eq(i).fadeIn(700)
							.delay(5000)
							.fadeOut(700, cycle);

		i = ++i % divs.length;

})();
