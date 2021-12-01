const close = document.querySelectorAll('.modal__close');

const closeModal = () => {
    close.forEach(el => {
        el.addEventListener('click', function(){
            const mask = document.querySelector('div.mask');
            let closest = el.closest('div');
            closest.style.display = "none";
            mask.remove();
        })
    });
}

export { closeModal }