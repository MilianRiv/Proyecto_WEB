document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.querySelector('.video-carousel');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    let currentIndex = 0;

    function scrollToVideo(index) {
        carousel.scrollTo({
            left: carousel.offsetWidth * index,
            behavior: 'smooth'
        });
    }

    prevBtn.addEventListener('click', function() {
        currentIndex = Math.max(currentIndex - 1, 0);
        scrollToVideo(currentIndex);
    });

    nextBtn.addEventListener('click', function() {
        currentIndex = Math.min(currentIndex + 1, carousel.children.length - 1);
        scrollToVideo(currentIndex);
    });

    setInterval(function() {
        currentIndex = (currentIndex + 1) % carousel.children.length;
        scrollToVideo(currentIndex);
    }, 6000);
});
