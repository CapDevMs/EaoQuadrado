let currentSlide = 1;
const totalSlides = 4;

function changeSlide() {
    document.getElementById(`slide${currentSlide}`).checked = false;

    currentSlide = (currentSlide % totalSlides) + 1;

    document.getElementById(`slide${currentSlide}`).checked = true;
}
setInterval(changeSlide, 3500);
