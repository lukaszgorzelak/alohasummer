const dropdown = document.querySelector('.dropdown');
const navExpand = document.querySelector('.nav--expand');

const toogleUl = function(){

    if(dropdown) {
        dropdown.addEventListener('click', function(){

            navExpand.classList.toggle("show");    
        });
    }
}

export { toogleUl }

    