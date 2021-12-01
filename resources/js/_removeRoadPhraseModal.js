let mask = document.createElement("div");
const body = document.body;

const removeBtn = document.querySelectorAll('.card__action__road-remove');

const removeRoadPhrase = () => {

    removeBtn.forEach(el => {
        el.addEventListener('click', function(e){
            e.preventDefault();
            let closest = el.previousElementSibling;
            closest.style.display = "block";
            mask.classList.add("mask");
            body.appendChild(mask);  
        })
    });
}

export { removeRoadPhrase }