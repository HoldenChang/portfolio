$(document).ready(()=>{
    $('img').on('mouseenter', (event)=>{
        $(event.target).css({
            'transform':'scale(1.10)',
            'border':'solid deepskyblue',
            'transition':'.5s'
        });
    }).on('mouseleave', (event) =>{
        $(event.target).css({
            'transform':'scale(1)',
            'border':'none',
            'transition':'.5s'
        });
    })
    // scroll effect
    $(window).scroll(() => {
        $('.content2').each((i, element) => {
            const bottom_of_element = $(element).offset().top + $(element).outerHeight() / 30;
            const bottom_of_window = $(window).scrollTop() + $(window).height();

            if (bottom_of_window > bottom_of_element) {
                $(element).animate({'opacity':'1'}, 1000);
            }
        });
    });
});
