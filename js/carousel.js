const slides = document.querySelectorAll('.carousel__photo');
const next = document.querySelector('.carousel__button--next');
const back = document.querySelector('.carousel__button--prev');
const dots = document.querySelectorAll('.dot');
const dotOne = document.querySelector('.dot-one');
const dotTwo = document.querySelector('.dot-two');
const dotThree = document.querySelector('.dot-three');
const dotFour = document.querySelector('.dot-four');

let slideArray = [];
let slide = 0;
let dotArray = [];

slides.forEach(s => {
slideArray.push(s);
});

dots.forEach(d => {
  dotArray.push(d);
});

next.addEventListener('click', () => {
    slideArray[slide].classList.remove('active');
    dotArray[slide].classList.remove('active');
    if (slide == slideArray.length - 1) {
      slide = 0;
      slideArray[slide].classList.add('active');
      dotArray[slide].classList.add('active');
    } else {
      slide += 1;
      slideArray[slide].classList.add('active');
      dotArray[slide].classList.add('active');
    }  
}); 
back.addEventListener('click', () => {
    slideArray[slide].classList.remove('active');
    dotArray[slide].classList.remove('active');
    if (slide == 0) {
      slide = slideArray.length - 1;
      slideArray[slide].classList.add('active');
      dotArray[slide].classList.add('active');
    } else {
      slide -= 1;
      slideArray[slide].classList.add('active');
      dotArray[slide].classList.add('active');
    }
}); 
dotOne.addEventListener('click', () => {
  slideArray[slide].classList.remove('active');
  dotArray[slide].classList.remove('active');
    slide = 0;
    slideArray[slide].classList.add('active');
    dotArray[slide].classList.add('active');
}); 
dotTwo.addEventListener('click', () => {
  slideArray[slide].classList.remove('active');
  dotArray[slide].classList.remove('active');
    slide = 1;
    slideArray[slide].classList.add('active');
    dotArray[slide].classList.add('active');
}); 
dotThree.addEventListener('click', () => {
  slideArray[slide].classList.remove('active');
  dotArray[slide].classList.remove('active');
    slide = 2;
    slideArray[slide].classList.add('active');
    dotArray[slide].classList.add('active');
}); 
dotFour.addEventListener('click', () => {
  slideArray[slide].classList.remove('active');
  dotArray[slide].classList.remove('active');
    slide = 3;
    slideArray[slide].classList.add('active');
    dotArray[slide].classList.add('active');
}); 
  
