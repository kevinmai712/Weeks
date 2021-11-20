import ScrollReveal from 'scrollreveal';

class ScrollRevealer {

	constructor() {
		this.init();
	}

	init() {
		var items = [
			document.querySelector('#about-blurb .inner'),
			document.querySelector('#coupons .container'),
			document.querySelector('#blog-spotlight .inner'),
			document.querySelector('#hero .container'),
			document.querySelector('#scheduleForm .container'),
			document.querySelector('#mapSection .container'),
			document.querySelector('#reviews .container'),
			document.querySelector('#mapSection .about_text'),
			document.querySelector('#calltoaction .container'),

		];

		var slideUp = {
  	  delay: 400,
			duration: 600,
			easing: 'ease-in-out',
			distance: '80px',
			interval: 200,
			mobile: false,
			origin: 'bottom'
		};

		ScrollReveal().reveal(items, slideUp);
		ScrollReveal().reveal('#service-selection .card', slideUp);
		ScrollReveal().reveal('.coupon-list .coupon-card', slideUp);
		ScrollReveal().reveal('#meet-the-team .inner', slideUp);
		// ScrollReveal().reveal('.header_c', slideUp);
	}
}

export default ScrollRevealer;
