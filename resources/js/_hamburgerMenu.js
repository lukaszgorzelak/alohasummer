const hamburger = document.querySelector('.hamburger');
const nav = document.querySelector('.navigation');

const handleClick = () => {

  hamburger.addEventListener('click', function(){
    hamburger.classList.toggle('hamburger--active');
    nav.classList.toggle('navigation--active');
  });
  
}

  export { handleClick }