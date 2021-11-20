class PostLength {
	constructor() {
		this.init();
	}

	init() {

		//grab length of post container
			const articleHTML = document.querySelector('article');
			const articleId = articleHTML.getAttribute('id');
			const article = document.getElementById(articleId)


			const articleHeight = article.clientHeight;

			console.log(articleHeight);



		//log the precentage of the scroll
		window.onscroll = (y) => {
			console.log(y);
		}
			//once the end of the container is reached then stop scroll

	}
}

export default PostLength;
