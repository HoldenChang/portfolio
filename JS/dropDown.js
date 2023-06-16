$(document).ready(()=>{
    $('.games').on('mouseenter', () =>{
        $('.gSubMenu').slideDown('slow');
        }).on('mouseleave', ()=>{
            $('.gSubMenu').slideUp();
    });
    $('.news').on('mouseenter', ()=>{
        $('.nSubMenu').slideDown('slow');
    }).on('mouseleave', () =>{
        $('.nSubMenu').slideUp();
    });
    $('.login').on('mouseenter', ()=>{
        $('.lCont').slideDown('slow').on('mouseleave',() =>{
            $('.lCont').slideUp();
        });
    });
});