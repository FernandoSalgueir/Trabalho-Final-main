let slideIndex = 0; //slide inicial
let timechange = 5000; //tempo em milisegundos

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}
 
// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}
 
function showSlides(n) {
  if(n === undefined) {
    n=slideIndex;
  }
  console.log(n);
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n >= slides.length) {slideIndex = 0}
  if (n < 0) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex].style.display = "block";
  dots[slideIndex].className += " active";
  slideIndex++;
  setTimeout(showSlides, timechange);
  
  /*console.log(slides.length); */
}

showSlides(slideIndex);
