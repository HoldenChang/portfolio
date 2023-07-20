var currentPage = "page1";

function leftSlide() {
    var current = document.querySelector("." + currentPage);
    var next = currentPage === "page1" ? "page2" : "page1";
    var nextPage = document.querySelector("." + next);

    current.style.animation = 'slideLeft 1s';

    setTimeout(function() {
        current.style.display = 'none';
        nextPage.style.display = 'block';

        setTimeout(function(){
            nextPage.style.animation = 'slideRightAppear 1s';
        })
    }, 900);
    currentPage = next;
}

function rightSlide() {
    var current = document.querySelector("." + currentPage);
    var next = currentPage === "page1" ? "page2" : "page1";
    var nextPage = document.querySelector("." + next);

    current.style.animation = 'slideRight 1s';

    setTimeout(function() {
        current.style.display = 'none';
        nextPage.style.display = 'block';

        setTimeout(function(){
            nextPage.style.animation = 'slideLeftAppear 1s';
        })
    }, 900);
    currentPage = next;
}