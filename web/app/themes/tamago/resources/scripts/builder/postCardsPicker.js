import Splide from '@splidejs/splide';
import '@splidejs/splide/css';

export default () => {
    const postCardCarousel = document.querySelectorAll('.list-card-carousel');    
    if (!postCardCarousel.length) {
        return;
    }

    postCardCarousel.forEach((carousel) => {
        const splide = new Splide(carousel, {
            type: 'loop',
            perPage: 1,
            gap: 40,
            pagination: false,
            arrows: true,
            mediaQuery: 'min',
            breakpoints: {
                1024: {
                    perPage: 3,
                },
            },
        });

        splide.mount();
    });
}
