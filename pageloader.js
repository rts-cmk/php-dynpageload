(function () {
	const nav = document.querySelector('header nav');
	nav.addEventListener('click', (element) => {
		element.preventDefault();
		window.history.pushState('', '', element.target.getAttribute('href'));
		generatePage(element.target.dataset.id);
	});

	const generatePage = function (id) {
		fetch(`page.php?p=${id}`)
			.then((response) => response.json())
			.then((response) => {
				document.querySelector('.mainTitle').innerHTML = response.title;
				document.querySelector('.mainContent').innerHTML = response.content;
			});
	};

	generatePage(1);
	window.history.pushState('', '', '?p=1');
})();