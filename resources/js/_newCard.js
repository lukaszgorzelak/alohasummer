const scrollToNewCard = function(pathname,card) {

    if(location.pathname==pathname) {
        const last = $(card).last();
        const allCard = $(card).length;
        const p = last.find("p.card__heading").first();
        const collapse = last.closest('section').find('.collapse');

        p.before(`<p class="new">NEW</p>`);
        const card__heading = $('.new');

        setTimeout(function(){
            card__heading.slideUp(); 
        }, 4000);

        if(allCard > 9) {
            const cardHidden = last.closest('section').find('.hidden').removeClass('hidden').addClass('slice');
            const expand = last.closest('section').find('.expand').addClass('hidden');
            const expandParagraph = last.closest('section').find('.expand > .expand__paragraph ');
            collapse.addClass('block');
        }

        var offset = last.offset();
       
        $('html, body').animate({
            scrollTop: offset.top,
            scrollLeft: offset.left,
            behavior: "smooth"
        });

        collapse.click(function() {
            const slice = last.closest('section').find('.slice').removeClass('slice').addClass('hidden');
        });
    };
};

export { scrollToNewCard }