$(document).ready(()=>{
    // scroll effect
    $(window).scroll(() => {
        $('.background2').each((i, element) => {
            const bottom_of_element = $(element).offset().top + $(element).outerHeight() / 30;
            const bottom_of_window = $(window).scrollTop() + $(window).height();
            if (bottom_of_window > bottom_of_element) {
                $(element).animate({'opacity':'1'}, 1000);
            }
        });
    });
    if ($(document).height() <= $(window).height()) {
        $('.background2').animate({'opacity': '1'}, 1000);
    }
    // fadein
    $('.background1').fadeIn(2000);
    $('.background2').fadeIn(2000);
});