const slides = Array.from(document.querySelectorAll('.slide'));
let currentIndex = 0;
let intervalId = null;

function showSlide(index) {
    slides.forEach((slide, i) => slide.classList.toggle('active', i === index));
}

function showNextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
}

function showPreviousSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    showSlide(currentIndex);
}

function startSlideShow() {
    intervalId = setInterval(showNextSlide, 3000);
    document.getElementById("play").style.display = "none";
    document.getElementById("pause").style.display = "";
}

function stopSlideShow() {
    clearInterval(intervalId);
    intervalId = null;
    document.getElementById("play").style.display = "";
    document.getElementById("pause").style.display = "none";
}

document.getElementById("next").addEventListener("click", showNextSlide);
document.getElementById("prev").addEventListener("click", showPreviousSlide);
document.getElementById("play").addEventListener("click", startSlideShow);
document.getElementById("pause").addEventListener("click", stopSlideShow);

startSlideShow();
