import Nanobar from 'nanobar';

class Nano {

	constructor() {
		this.init();
	}

	init() {

		var options = {
			classname: 'nano',
		  id: 'nano',
			target: document.getElementById('nano')
		};
		var nanobar = new Nanobar( options );
		//move bar
		nanobar.go( 30 ); // size bar 30%
		document.addEventListener("DOMContentLoaded",function(){
		   nanobar.go(100);
			 console.log('Bar loaded')
		});

	}
}

export default Nano;
