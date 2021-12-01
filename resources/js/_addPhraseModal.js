let mask = document.createElement("div");
const body = document.body;

const addPhraseBtn = document.querySelectorAll('.card__add-btn');

const addPhraseModal = () => {

    addPhraseBtn.forEach(el => {
        el.addEventListener('click', function(e){
            e.preventDefault();
            let closest = el.previousElementSibling;
            closest.style.display = "block";
            mask.classList.add("mask");
            body.appendChild(mask);
        })
    });
}

export { addPhraseModal }
