import Countable from 'countable';

class ReadTime {

	constructor() {
		this.init();
	}

	init() {

		Countable.on($('.singles-content')[0], function (counter) {
			var wpm = 200,
			estimatedRaw = counter.words / wpm,
			minutes = Math.round(estimatedRaw);

			var effectiveTime = (minutes < 1) ? "a couple of secs" : minutes + " min. read";

			//display it
			$('.reading-time').html(effectiveTime);
			})


	}
}

export default ReadTime;
