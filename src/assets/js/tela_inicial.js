const container = document.querySelector('.container_carrossel');
const slides = document.querySelectorAll('.item_carrossel');
const prev = document.getElementById('prev');
const next = document.getElementById('next');

let index = 0;

function updateCarousel() {
    container.style.transform = `translateX(${-index * 33.34}%)`;
}

function autoPlay() {
    index = (index + 1) % slides.length; 
    updateCarousel();
}

next.addEventListener('click', () => {
    index = (index + 1) % slides.length;
    updateCarousel();
    resetAutoPlay();
});

prev.addEventListener('click', () => {
    index = (index - 1 + slides.length) % slides.length;
    updateCarousel();
    resetAutoPlay();
});

let autoSlide = setInterval(autoPlay, 5000);

function resetAutoPlay() {
    clearInterval(autoSlide);
    autoSlide = setInterval(autoPlay, 5000);
}
