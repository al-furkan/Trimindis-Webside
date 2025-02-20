document.addEventListener('DOMContentLoaded', function() {
    const services = document.querySelectorAll('.service');
    services.forEach(service => {
        service.addEventListener('mouseover', function() {
            this.style.transform = 'scale(1.05)';
        });
        service.addEventListener('mouseout', function() {
            this.style.transform = 'scale(1)';
        });
    });
});




document.addEventListener("DOMContentLoaded", () => {
	const sliders = document.querySelectorAll(".emotions-slider");

	if (!sliders.length) return;

	const list = [];

	sliders.forEach((element) => {
		const [slider, prevEl, nextEl, pagination] = [
			element.querySelector(".swiper"),
			element.querySelector(".slider-nav__item_prev"),
			element.querySelector(".slider-nav__item_next"),
			element.querySelector(".slider-pagination")
		];

		list.push(
			new Swiper(slider, {
				slidesPerView: "auto",
				spaceBetween: 20,
				speed: 600,
				observer: true,
				watchOverflow: true,
				watchSlidesProgress: true,
				centeredSlides: true,
				initialSlide: 1,
				navigation: { nextEl, prevEl, disabledClass: "disabled" },
				pagination: {
					el: pagination,
					type: "bullets",
					modifierClass: "slider-pagination",
					bulletClass: "slider-pagination__item",
					bulletActiveClass: "active",
					clickable: true
				},
				breakpoints: {
					768: { spaceBetween: 40 }
				}
			})
		);
	});
});



const nextBtn = document.querySelector(".next");
const prevBtn = document.querySelector(".prev");
const track = document.querySelector(".track");

// You can also calculate this dynamically by calling querySelectorAll(".slide")
// and then using the length property.
const NUM_SLIDES = 3;

// The current slide that's being displayed
let currSlide = 0;

// Slide the track onto the current slide
function slideTrack() {
  track.style.transform = `translateX(${-currSlide * 100}%)`;
}

// Go to the next slide. Loop back to the first slide if you overflow.
nextBtn.addEventListener("click", () => {
  currSlide = (currSlide + 1) % NUM_SLIDES;
  slideTrack();
});

// Go to the previous slide. Loop to the last slide if you overflow.
prevBtn.addEventListener("click", () => {
  currSlide = (currSlide - 1 + NUM_SLIDES) % NUM_SLIDES;
  slideTrack();
});