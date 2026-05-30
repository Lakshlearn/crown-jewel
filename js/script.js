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

        image.style.transform = 'scale(1.12)';

    });

    card.addEventListener('mouseleave', () => {

        const image = card.querySelector('img');

        image.style.transform = 'scale(1)';

    });

});


    const track = document.getElementById('testimonialTrack');
    const slides = Array.from(track.querySelectorAll('.testimonial__slide'));
    let current = 0;
 
    function goTo(index) {
      // Exit current
      slides[current].classList.remove('active');
      slides[current].classList.add('exit');
      setTimeout(() => slides[current].classList.remove('exit'), 500);
 
      current = (index + slides.length) % slides.length;
      slides[current].classList.add('active');
    }
 
    document.getElementById('prevBtn').addEventListener('click', () => goTo(current - 1));
    document.getElementById('nextBtn').addEventListener('click', () => goTo(current + 1));


    const igSection = document.getElementById('igSection');
const bgCircle = document.querySelector('.ig-bg-circle');

window.addEventListener('scroll', () => {

    if (!igSection || !bgCircle) return;

    const rect = igSection.getBoundingClientRect();
    const windowHeight = window.innerHeight;

    // Detect section visibility
    const visible = 1 - (rect.top / windowHeight);

    // Scale limits
    let scale = visible * 8;

    // Clamp values
    scale = Math.max(1, Math.min(scale, 12));

    bgCircle.style.transform =
        `translate(-50%, -50%) scale(${scale})`;
});

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