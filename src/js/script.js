
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