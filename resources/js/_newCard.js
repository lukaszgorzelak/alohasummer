const scrollToNewCard = function(pathname,card) {

    if(location.pathname==pathname) {
        const last = $(card).last();
        // last.addClass("last")
        const p = last.find("p.card__heading").first();
        p.before(`<p class="new">NEW</p>`);
        // $('.last').removeClass("hidden");
        const card__heading = $('.new');
        setTimeout(function(){
            card__heading.slideUp(); 
        }, 4000);

        var offset = last.offset();
       
        // const expand = last.closest('section').find('.expand').addClass('hidden');
        // const collapse = last.closest('section').find('.collapse').addClass('block');
        
        $('html, body').animate({
            scrollTop: offset.top,
            scrollLeft: offset.left,
            behavior: "smooth"
        });

        // console.log(expand)
    };
};

export { scrollToNewCard }