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

function logOutConfirm(){
    var confirmation = window.confirm("Are sure you want to log out?");

    if(confirmation){
        window.location.href ="php/logOut.php";
    }
}