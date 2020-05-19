const slides = document.querySelectorAll('.carousel__photo');
const next = document.querySelector('.carousel__button--next');
const back = document.querySelector('.carousel__button--prev');
let slideArray = [];
let slide = 0;

slides.forEach(s => {
slideArray.push(s);
});


next.addEventListener('click', () => {
    slideArray[slide].classList.remove('active');
    if (slide == slideArray.length - 1) {
      slide = 0;
      slideArray[slide].classList.add('active');
    } else {
      slide += 1;
      slideArray[slide].classList.add('active');
    }  
}); 
back.addEventListener('click', () => {
    slideArray[slide].classList.remove('active');
    if (slide == 0) {
      slide = slideArray.length - 1;
      slideArray[slide].classList.add('active');
    } else {
      slide -= 1;
      slideArray[slide].classList.add('active');
    }
}); 
  
