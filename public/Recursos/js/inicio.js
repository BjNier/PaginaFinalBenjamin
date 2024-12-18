let currentIndex = 0;
const images = document.querySelectorAll('.gallery-image');
const totalImages = images.length;

function showNextImage() {
    images[currentIndex].classList.remove('active');
    currentIndex = (currentIndex + 1) % totalImages;
    images[currentIndex].classList.add('active');
}

setInterval(showNextImage, 3000); // Cambia la imagen cada 3 segundos















