window.addEventListener('scroll', () => {
    const scrollAnima = document.querySelector('[data-anima ="scroll"]');
    const metadeWindow = window.innerHeight * 4.3;
    const topoItem = scrollAnima.getBoundingClientRect().top;
    if (topoItem - metadeWindow < 0) {
        scrollAnima.classList.add('show-button');
    } else {
        scrollAnima.classList.remove('show-button');
    };
});



var menu = document.querySelector('nav ul');
var menuBar = document.querySelector('nav .menu-icon');
var iconMenu = document.querySelector('nav .menu-icon img');

menuBar.addEventListener('click',function(){

    if (iconMenu.getAttribute("src") == "assets/img/Logos/icone-menu.png") {
        iconMenu.setAttribute("src","assets/img/cpaas/closemenu.png");
    }else{
        iconMenu.setAttribute("src","assets/img/Logos/icone-menu.png");
    }

   menu.classList.toggle('active');
});