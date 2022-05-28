
function namePartHover(e){
    let part = e.classList[0].slice(-2);

    switch(part) {
    case "SY":
        e.parentElement.parentElement.getElementsByClassName("sykos-container__word__SY")[0].style.visibility="visible";
        break;
    case "_K":
        e.parentElement.parentElement.getElementsByClassName("sykos-container__word__K")[0].style.visibility="visible";
        break;
    case "_O":
        e.parentElement.parentElement.getElementsByClassName("sykos-container__word__O")[0].style.visibility="visible";
        break;
    case "_S":
        e.parentElement.parentElement.getElementsByClassName("sykos-container__word__S")[0].style.visibility="visible";
        break;
    default:
        // code block
    } 
}
function namePartClick(e, path){
    let part = e.classList[0].slice(-2);

    switch(part) {
    case "SY":
        window.location.href = path;
        break;
    case "_K":
        window.location.href = path;
        break;
    case "_O":
        window.location.href = path;
        break;
    case "_S":
        window.location.href = path;
        break;
    default:
        // code block
    } 
}
function toggleBurgerMenu(){
    document.getElementsByClassName("navbar")[0].classList.toggle('open-menu');
}

function namePartHoverOut(e){
    let part = e.classList[0].slice(-2);

    switch(part) {
    case "SY":
        e.parentElement.parentElement.getElementsByClassName("sykos-container__word__SY")[0].style.visibility="hidden";
        break;
    case "_K":
        e.parentElement.parentElement.getElementsByClassName("sykos-container__word__K")[0].style.visibility="hidden";
        break;
    case "_O":
        e.parentElement.parentElement.getElementsByClassName("sykos-container__word__O")[0].style.visibility="hidden";
        break;
    case "_S":
        e.parentElement.parentElement.getElementsByClassName("sykos-container__word__S")[0].style.visibility="hidden";
        break;
    default:
        // code block
    } 
}


let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("sp-testimonial-item");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
} 