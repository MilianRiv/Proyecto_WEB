document.addEventListener('DOMContentLoaded', () => {
    const videos = [
        {
            src: 'https://www.youtube.com/embed/9KcPs4mmxms',
            description: 'Descripción del Video 1'
        },
        {
            src: 'https://www.youtube.com/embed/0ORDeCemSgk',
            description: 'Descripción del Video 2'
        },
        {
            src: 'https://www.youtube.com/embed/b0er7Tg7qOg',
            description: 'Descripción del Video 3'
        },
        {
            src: 'https://www.youtube.com/embed/9KcPs4mmxms',
            description: 'Descripción del Video 4'
        },
        {
            src: 'https://www.youtube.com/embed/0ORDeCemSgk',
            description: 'Descripción del Video 5'
        },
        {
            src: 'https://www.youtube.com/embed/b0er7Tg7qOg',
            description: 'Descripción del Video 6'
        }
    ];

    const gallery = document.querySelector('.videos-gallery');

    videos.forEach(video => {
        const videoItem = document.createElement('div');
        videoItem.classList.add('videos-item');

        const iframeElement = document.createElement('iframe');
        iframeElement.src = video.src;
        iframeElement.allowFullscreen = true;

        const descriptionElement = document.createElement('div');
        descriptionElement.classList.add('videos-description');
        descriptionElement.textContent = video.description;

        videoItem.appendChild(iframeElement);
        videoItem.appendChild(descriptionElement);

        gallery.appendChild(videoItem);

        videoItem.addEventListener('mouseenter', () => {
            iframeElement.src += "?autoplay=1&mute=1";
        });

        videoItem.addEventListener('mouseleave', () => {
            iframeElement.src = video.src;
        });
    });
});
