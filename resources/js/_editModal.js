let mask = document.createElement("div");
const body = document.body;

const roadEditBtn = document.querySelectorAll('.card__action__edit');

const editModal = () => {

    roadEditBtn.forEach(el => {
        el.addEventListener('click', function(e){
            e.preventDefault();
            let closest = el.previousElementSibling;
            closest.style.display = "block";
            mask.classList.add("mask");
            body.appendChild(mask);  
        })
    });
}

export { editModal }