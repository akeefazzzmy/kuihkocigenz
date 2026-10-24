//
const menuToggle = document.querySelector('.menu-toggle');
const primaryNavigation = document.querySelector('#primary-navigation');

if (menuToggle instanceof HTMLButtonElement && primaryNavigation instanceof HTMLElement) {
    const closeMenu = () => {
        menuToggle.setAttribute('aria-expanded', 'false');
        primaryNavigation.classList.remove('is-open');
    };

    menuToggle.addEventListener('click', () => {
        const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';

        menuToggle.setAttribute('aria-expanded', String(!isExpanded));
        primaryNavigation.classList.toggle('is-open', !isExpanded);
    });

    primaryNavigation.addEventListener('click', (event) => {
        if (event.target instanceof HTMLAnchorElement) {
            closeMenu();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeMenu();
            menuToggle.focus();
        }
    });
}

const carousel = document.querySelector('[data-carousel]');

if (carousel instanceof HTMLElement) {
    const track = carousel.querySelector('.carousel-track');
    const slides = carousel.querySelectorAll('.carousel-slide');
    const counter = document.querySelector('.carousel-counter');
    const caption = document.querySelector('.carousel-caption-text');
    const dots = document.querySelectorAll('.carousel-dots [data-carousel-index]');
    const previousButton = carousel.querySelector('.carousel-previous');
    const nextButton = carousel.querySelector('.carousel-next');

    if (
        track instanceof HTMLElement
        && slides.length > 0
        && counter instanceof HTMLElement
        && previousButton instanceof HTMLButtonElement
        && nextButton instanceof HTMLButtonElement
    ) {
        const getCurrentIndex = () => Math.min(
            slides.length - 1,
            Math.max(0, Math.round(track.scrollLeft / track.clientWidth)),
        );

        const updateCarousel = () => {
            const currentIndex = getCurrentIndex();
            const currentCaption = slides[currentIndex].querySelector('figcaption');

            counter.textContent = `${currentIndex + 1} / ${slides.length}`;

            if (caption instanceof HTMLElement && currentCaption instanceof HTMLElement) {
                caption.textContent = currentCaption.textContent ?? '';
            }

            dots.forEach((dot, index) => {
                if (index === currentIndex) {
                    dot.setAttribute('aria-current', 'true');
                } else {
                    dot.removeAttribute('aria-current');
                }
            });
        };

        const showSlide = (index) => {
            const nextIndex = (index + slides.length) % slides.length;
            const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            track.scrollTo({
                left: nextIndex * track.clientWidth,
                behavior: reduceMotion ? 'auto' : 'smooth',
            });
        };

        previousButton.addEventListener('click', () => showSlide(getCurrentIndex() - 1));
        nextButton.addEventListener('click', () => showSlide(getCurrentIndex() + 1));

        dots.forEach((dot) => {
            dot.addEventListener('click', () => {
                const index = Number(dot.getAttribute('data-carousel-index'));

                if (Number.isInteger(index) && index >= 0 && index < slides.length) {
                    showSlide(index);
                }
            });
        });

        track.addEventListener('scroll', () => window.requestAnimationFrame(updateCarousel), { passive: true });

        carousel.addEventListener('keydown', (event) => {
            if (event.key === 'ArrowLeft' || event.key === 'ArrowRight') {
                event.preventDefault();
                showSlide(getCurrentIndex() + (event.key === 'ArrowRight' ? 1 : -1));
            }
        });

        window.addEventListener('resize', updateCarousel, { passive: true });
        updateCarousel();
    }
}
