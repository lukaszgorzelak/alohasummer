const confirm = document.querySelector('.confirm');

const addAnimation = function(){
    
    if(location.pathname=="/home") {
        confirm.classList.add("animationSlide");  
    };
}

export { addAnimation }

