import smoothscroll from "smoothscroll-polyfill";
import hamburger from "./../part/hamburger";

export default {
	init() {
		// JavaScript to be fired on all pages

		// kick off the polyfill!
		smoothscroll.polyfill();

		// Hamburger event listener
		hamburger();

		// Lazy load image with lozad.js https://github.com/ApoorvSaxena/lozad.js
	},

	finalize() {
		// JavaScript to be fired on all pages, after page specific JS is fired
		// SLIDER
		// const sliderLink = document.querySelector(".wpwax-lsu-item-inner a");

		// sliderLink.addEventListener("click", e => e.preventDefault);

		// STICKY NAV
		const header = document.querySelector(".site-header");

		// Reference: http://www.html5rocks.com/en/tutorials/speed/animations/
		let lastKnownScrollPosition = 0;
		let ticking = false;

		function doSomething(scrollPos) {
			if (scrollPos > 10) {
				header.classList.add("s-sticky");
			} else {
				header.classList.remove("s-sticky");
			}
		}

		document.addEventListener("scroll", function(e) {
			lastKnownScrollPosition = window.scrollY;

			if (!ticking) {
				window.requestAnimationFrame(function() {
					doSomething(lastKnownScrollPosition);
					ticking = false;
				});

				ticking = true;
			}
		});
		// STICKY NAV END

		// ACCORDION
		const questions = document.querySelectorAll(".question-set .question");
		questions.forEach(element => {
			element.addEventListener("click", e => {
				element.nextElementSibling.classList.toggle("s-active");
				element.firstElementChild.classList.toggle("s-active");
			});
		});


		// TAB APPOINTMENT 


		const fdry =  document.getElementById('fdryAction');
		if (typeof(fdry) != 'undefined' && fdry != null)
		{
			const tab = document.querySelectorAll('.single-action')
			const btn = document.querySelectorAll('.cta-summary .outline')

			btn.forEach(el => {
				el.addEventListener('click', openTab)
			});

			function openTab(e){
				let target = e.target.dataset.cta;
				btn.forEach(a=>{a.classList.remove('primary')})
				e.target.classList.add('primary')


				tab.forEach(element => {
					element.classList.remove('active')
					if(element.dataset.sell === target){
						element.classList.add('active')
					}
				});
			}

		}



	}
};
