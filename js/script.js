const carousel = document.querySelector('.carousel');
const images = document.querySelectorAll('.carousel img');
const totalImages = images.length / 2; // La mitad porque duplicamos las imágenes

let currentIndex = 0;

function nextImage() {
    currentIndex++;
    carousel.style.transform = `translateX(${-currentIndex * 100}%)`;

    // Cuando llegamos al final de las imágenes originales
    if (currentIndex === totalImages) {
        setTimeout(() => {
            // Quitamos la animación temporalmente
            carousel.style.transition = 'none';
            currentIndex = 0; // Reiniciamos al inicio real
            carousel.style.transform = `translateX(0)`;

            // Rehabilitamos la animación
            setTimeout(() => {
                carousel.style.transition = 'transform 0.5s ease-in-out';
            }, 50);
        }, 500); // Espera el tiempo de transición antes de reiniciar
    }
}

// Cambiar la imagen cada 5 segundos
setInterval(nextImage, 5000);
