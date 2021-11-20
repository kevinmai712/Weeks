import slick from 'slick-carousel';

class HeroSlider {

	constructor() {
		this.init();
	}

	init() {
  $(document).ready(function() {
		$( '.heroSlider' ).slick({
      arrows:false,
      dots: true,
    });
  });
	}
}

export default HeroSlider;
