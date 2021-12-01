const expandsP = document.querySelectorAll('.expand__paragraph');
const collapse = [...document.querySelectorAll('div.collapse')];

const sliceCard = (cards) => {
   
    if(cards.length > 9){
        const lastCard = cards.length;
        const cardSlice = cards.slice(9,lastCard);
        cardSlice.forEach(card => {
            card.classList.add('hidden');
            card.classList.remove('block');
        });
    }     
}

const expandCard = () => {

    expandsP.forEach(el => {
        
        el.addEventListener('click', function(){
            let closest = el.closest('div');
            let next = el.parentElement.nextElementSibling;
            closest.classList.add('hidden');
            next.classList.add('block');

            let childrens = el.parentElement.parentElement.querySelectorAll('div.hidden');
          
            childrens.forEach(children => {

                if(children.classList.contains('expand')){
                    children.classList.add('hidden');
                }else {
                    children.classList.remove('hidden');
                    children.classList.add('slice');
                };
            });
        });
    });    
}

const collapseCard = () => {

    collapse.forEach(el => {

        el.addEventListener('click', function(){
            let section = el.closest('section'); 
            let closest = el.closest('div').previousElementSibling;
            closest.classList.remove('hidden');
            section.scrollIntoView({behavior: "smooth"}); 
            el.classList.remove('block');

            let childrens = el.parentElement.parentElement.querySelectorAll('div.slice');
          
            childrens.forEach(children => {
                children.classList.add('hidden');
                children.classList.remove('slice');
            });
        });
    });    
}

export { sliceCard,expandCard,collapseCard }


