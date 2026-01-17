/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

/**
 * Funcionalidad básica para un slider simple
 */
document.addEventListener('DOMContentLoaded', function () {
	const slider = document.querySelector('.pt-slider');
	if (!slider) return;

	const slides = Array.from(slider.querySelectorAll('.pt-slide'));
	if (slides.length === 0) return;

	let currentIndex = 0;

	function showSlide(index) {
		slides.forEach((slide, i) => {
			slide.classList.toggle('active', i === index);
		});
	}

	function nextSlide() {
		currentIndex = (currentIndex + 1) % slides.length;
		showSlide(currentIndex);
	}

	function prevSlide() {
		currentIndex = (currentIndex - 1 + slides.length) % slides.length;
		showSlide(currentIndex);
	}

	const prevBtn = slider.querySelector('.pt-slider-prev');
	const nextBtn = slider.querySelector('.pt-slider-next');

	if (prevBtn) prevBtn.addEventListener('click', prevSlide);
	if (nextBtn) nextBtn.addEventListener('click', nextSlide);

	showSlide(currentIndex);
});

/**
 * Funcionalidad básica para un carrusel simple
 */
document.addEventListener('DOMContentLoaded', function () {
	const carousel = document.querySelector('.reviews.overflow-x-auto');
	const prevBtnCarrousel = document.querySelector('[data-prev]');
	const nextBtnCarrousel = document.querySelector('[data-next]');
	
	prevBtnCarrousel.addEventListener('click', () => {
		carousel.scrollBy({ left: -422, behavior: 'smooth' });
	});

	nextBtnCarrousel.addEventListener('click', () => {
		carousel.scrollBy({ left: 422, behavior: 'smooth' });
	});
});

/**
 * Funcionalidad del Menú Hamburguesa
 */
document.addEventListener('DOMContentLoaded', function () {
	const mobileMenuBtn = document.getElementById('mobile-menu-btn');
	const mobileMenu = document.getElementById('mobile-menu');

	if (mobileMenuBtn && mobileMenu) {
		mobileMenuBtn.addEventListener('click', () => {
			mobileMenu.classList.toggle('hidden');
			mobileMenuBtn.classList.toggle('text-white');
			mobileMenuBtn.classList.toggle('text-[var(--color-primary)]');
		});
	}
});