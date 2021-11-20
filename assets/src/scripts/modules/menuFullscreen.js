class MenuFullscreen {
	constructor() {
		this.init();
	}

	init() {

		// This function catches if the navigation has a background or not.
			// If the navigation has a background then the page content under the nav is moved down for spacing
			// If the navigation background is transparent then the page content will adjust itself
		let removeMarginTop = () => {
			var page = document.querySelector('#content');
			var headerName = $("#mainheader").children().attr('id');
			var headerContainer = document.getElementById(headerName);
			return ($(headerContainer).css('background-color') == 'rgba(0, 0, 0, 0)') ? page.classList.add('removed-margin') : '';
		};

		var fullscreenMenu = document.querySelector('#fullscreen-menu');
		var body = document.querySelector('body');


		document.querySelector('#toggle-button').addEventListener('click', (e) => {
			e.preventDefault();
			console.log('Nav open');
			fullscreenMenu.classList.add('grow-navigation-fullscreen');
			body.classList.add('hidden');
		});

		document.querySelector('.close-menu').addEventListener('click', (e) => {
			e.preventDefault();
			console.log('Nav Close');
			fullscreenMenu.classList.remove('grow-navigation-fullscreen');
			body.classList.remove('hidden');
		});

		$('#toggle-button').on('click', function() {
			$(this).toggleClass('animate');
			$('.bar').toggleClass('animate');
		});


		removeMarginTop();
	}
}

export default MenuFullscreen;
