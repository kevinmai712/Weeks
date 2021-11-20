import Headroom from 'headroom.js';


class HeadroomNavi {
	constructor() {
		this.init();
	}

	init() {

		//Replace harded coded id with global id pickup

		var myElement = document.querySelector("#nav");
		// construct an instance of Headroom, passing the element
		var headroom  = new Headroom(myElement);
		// initialise
		headroom.init();

	}
}

export default HeadroomNavi;
