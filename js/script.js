// script.js

const zoomElements = document.querySelectorAll('.zoom-scroll');

function imageZoomEffect() {

    zoomElements.forEach((element) => {

        const rect = element.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        if (rect.top < windowHeight && rect.bottom > 0) {

            let visible = 1 - (rect.top / windowHeight);

            visible = Math.max(0, Math.min(1, visible));

            // MAX ZOOM 15%
            const scale = 1 + (visible * 0.15);

            element.querySelector('img').style.transform =
                `scale(${scale})`;

        }

    });

}

// RUN ON SCROLL
window.addEventListener('scroll', imageZoomEffect);

// RUN ON LOAD
imageZoomEffect();

// script.js

const categoryCards = document.querySelectorAll('.category-card');

categoryCards.forEach((card) => {

    card.addEventListener('mouseenter', () => {

        const image = card.querySelector('img');
        if (!image) return;

        image.style.transform = 'scale(1.12)';

    });

    card.addEventListener('mouseleave', () => {

        const image = card.querySelector('img');
        if (!image) return;

        image.style.transform = 'scale(1)';

    });

});

function initTestimonialCarousel() {
    const track = document.getElementById('testimonialTrack');
    if (!track) return;

    const slides = Array.from(track.querySelectorAll('.testimonial__slide'));
    if (!slides.length) return;

    let currentSlide = slides.findIndex((slide) => slide.classList.contains('active'));
    if (currentSlide === -1) currentSlide = 0;

    slides.forEach((slide, index) => {
        slide.classList.toggle('active', index === currentSlide);
        slide.classList.remove('exit');
    });

    function goTo(index, direction) {
        const nextIndex = (index + slides.length) % slides.length;
        if (nextIndex === currentSlide) return;

        const outgoing = slides[currentSlide];
        const incoming = slides[nextIndex];
        const exitClass = direction === 'next' ? 'exit-left' : 'exit-right';
        const enterClass = direction === 'next' ? 'enter-right' : 'enter-left';

        outgoing.classList.remove('active');
        outgoing.classList.add(exitClass);

        incoming.classList.add(enterClass);
        requestAnimationFrame(() => {
            incoming.classList.add('active');
            incoming.classList.remove(enterClass);
        });

        currentSlide = nextIndex;

        window.setTimeout(() => {
            outgoing.classList.remove('exit-left', 'exit-right');
        }, 500);
    }

    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    if (prevBtn) {
        prevBtn.addEventListener('click', () => goTo(currentSlide - 1, 'prev'));
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => goTo(currentSlide + 1, 'next'));
    }
}

initTestimonialCarousel();


const igSection = document.getElementById('igSection');
const bgCircle = document.querySelector('.ig-bg-circle');

function updateIgBg() {
    if (!igSection || !bgCircle) return;

    const rect = igSection.getBoundingClientRect();
    const windowHeight = window.innerHeight;

    // Only animate while section is visible in viewport
    if (rect.top >= windowHeight || rect.bottom <= 0) {
        // Reset to default scale when out of view
        bgCircle.style.transform = `translate(-50%, -50%) scale(1)`;
        return;
    }

    // Detect section visibility (0..1)
    const visible = 1 - (rect.top / windowHeight);

    // Scale limits
    let scale = visible * 8;

    // Clamp values
    scale = Math.max(1, Math.min(scale, 12));

    bgCircle.style.transform = `translate(-50%, -50%) scale(${scale})`;
}

window.addEventListener('scroll', updateIgBg);
window.addEventListener('resize', updateIgBg);
document.addEventListener('DOMContentLoaded', updateIgBg);
// Ensure correct state immediately (in case script runs after DOM is ready)
updateIgBg();

document.addEventListener('DOMContentLoaded', () => {

    const image = document.querySelector('.about-image-parallax');

    if (!image) return;

    let current = 0;
    let target = 0;

    function updateParallax() {

        const section = image.closest('.about-section-one');

        const rect = section.getBoundingClientRect();

        const windowHeight = window.innerHeight;

        const progress =
            (windowHeight - rect.top) /
            (windowHeight + rect.height);

        target = (progress - 0.5) * -120;

        current += (target - current) * 0.08;

        image.style.transform =
            `translate3d(0, ${current}px, 0)`;

        requestAnimationFrame(updateParallax);
    }

    updateParallax();

});

// Dynamically load header and popup scripts from root js folder
(function loadScripts() {
    const baseUrl = '/js/';
    const scripts = ['header.js', 'popup.js'];

    scripts.forEach((filename) => {
        const script = document.createElement('script');
        script.src = baseUrl + filename;
        script.async = true;
        document.body.appendChild(script);
    });
})();