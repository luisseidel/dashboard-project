function openMenu() {
    var sidenav = document.getElementById("sideNav");
    sidenav.classList.remove('closed');
    sidenav.classList.add('open');

    var openMenuBtn = document.getElementById("openMenu");
    openMenuBtn.classList.add("hidden");
    openMenuBtn.classList.remove("visible");
}

function closeMenu() {
    var sidenav = document.getElementById("sideNav");
    sidenav.classList.remove('open');
    sidenav.classList.add('closed');

    var openMenuBtn = document.getElementById("openMenu");
    openMenuBtn.classList.add("visible");
    openMenuBtn.classList.remove("hidden");
}

function dropDown(menuItem) {
    var menuItemBody = menuItem.parentNode.querySelector('.menu-item-body');
    var setaDown = menuItem.querySelector('.seta-down');

    if (menuItemBody.classList.contains('close-item')) {
        menuItemBody.classList.remove('close-item');
        menuItemBody.classList.add('open-item');
        setaDown.classList.add('gira-seta');
    } else {
        menuItemBody.classList.remove('open-item');
        menuItemBody.classList.add('close-item');
        setaDown.classList.remove('gira-seta');
    }
}