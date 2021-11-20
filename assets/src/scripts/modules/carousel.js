import slick from 'slick-carousel';

class Carousel {

	constructor() {
		this.init();
	}

	init() {
		$( '.review-highlight' ).slick({
			speed: 10000,
			autoplay: true,
			autoplaySpeed: 0,
			cssEase: 'linear',
			slidesToShow: 1,
			slidesToScroll: 1,
			variableWidth: true
		});

	}
}

export default Carousel;
