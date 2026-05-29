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
