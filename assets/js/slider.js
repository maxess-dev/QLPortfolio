// Slider
const slides = document.getElementsByClassName("item-slider");
const buttonSlide = document.getElementsByClassName("round");
const indicatorSlider = document.getElementById("indicator-slider");
const nbSlide = slides.length;
const time = 6000;
let initSlider = 0;
let clicked = false;
let count = 0;

function changeSlide() {
    // Automated Slideshow
    if(!clicked){
        if(initSlider !== nbSlide){
            if(slides[initSlider - 1]){
                slides[initSlider - 1].classList.remove("active");
                buttonSlide[initSlider - 1].classList.remove("r-active")
            }
            slides[initSlider].classList.add("active");
            buttonSlide[initSlider].classList.add("r-active");
            initSlider++;
        } else if(initSlider === nbSlide) {
            slides[initSlider - 1].classList.remove("active");
            buttonSlide[initSlider - 1].classList.remove("r-active");
            initSlider = 0;
            slides[initSlider].classList.add("active");
            buttonSlide[initSlider].classList.add("r-active");
            initSlider = 1;
        }
    } else {
        clicked = false;
        slides[initSlider].classList.remove("active");
        initSlider++;
        changeSlide();
    }
}

// Click to next slide
for (let i = 0; i < buttonSlide.length; i++) {
    buttonSlide[i].addEventListener("click", () => {
        clearInterval(run)
        clearInterval(indicator)
        run = window.setInterval(changeSlide,time);
        indicator = window.setInterval(progressBar,50);
        count = (i / nbSlide) * 100;
        buttonSlide[i].classList.add("r-active");
        for(const slide of slides) {
            slide.classList.remove("active");
        }
        for (const btn of buttonSlide) {
            btn.classList.remove("r-active");
        }
        clicked = true;
        initSlider = i;
        slides[i].classList.add("active");
        buttonSlide[i].classList.add("r-active");
    })
}

// Change slide-image every 6s
let run = window.setInterval(changeSlide,time); 

// Start slider
changeSlide();

function progressBar(){
    if(count < 100){
        count+= 1 / ((time * nbSlide) / 5000)
        indicatorSlider.style.width = count + "%";
    } else {
        count = 0;
    }
}

// Start progress bar
let indicator = window.setInterval(progressBar,50);
progressBar();