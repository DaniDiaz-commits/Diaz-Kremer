document.addEventListener("DOMContentLoaded", initializeSlider);

let slideIndex = 0;
let intervalId = null;
let slides = null;

function initializeSlider() {
    slides = document.querySelectorAll(".slides .slide");
    if (!slides || slides.length === 0) return; 

    slides[slideIndex].classList.add("active");
    intervalId = setInterval(nextSlide, 10000);
}

function showSlide(index) {
    if (!slides || slides.length === 0) return;

    if (index >= slides.length) {
        slideIndex = 0;
    } else if (index < 0) {
        slideIndex = slides.length - 1;
    }

    slides.forEach(slide => {
        slide.classList.remove("active");
    });
    slides[slideIndex].classList.add("active");
}

function prevSlide() {
    clearInterval(intervalId);
    slideIndex--;
    showSlide(slideIndex);
}

function nextSlide() {
    slideIndex++;
    showSlide(slideIndex);
}
