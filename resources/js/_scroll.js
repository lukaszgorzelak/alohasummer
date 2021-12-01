const scrollItem = document.querySelector('#scroll');

const changeScroll = function(){
  let y = window.pageYOffset;
  if(y>=500){
    scrollItem.style.display = 'block'
    scrollItem.classList.add('scrollBox');
  }
  if(y == 0){
    scrollItem.style.display = 'none'
    scrollItem.classList.remove('scrollBox');
  }
}

const upper = function(){
    let y = window.pageYOffset;
    if(y >=500){
        window.scrollTo({
            top: 0,
            behavior: 'smooth',
        });
      y = 0;
    }
    if(y == 0){
        scrollItem.style.display = 'none'
        scrollItem.classList.remove('scrollBox');
    }
  }

window.addEventListener('scroll',changeScroll);
scrollItem.addEventListener('click',upper);

export { changeScroll,upper }