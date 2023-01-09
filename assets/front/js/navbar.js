const navbar = document.querySelector(".navbar");
const menuList = document.querySelector('.mobile-navbar-wrapper');
const menuButtonIcon = document.querySelector('.menu-button > .uil');
const menuButtonToggleIcon = document.querySelector('.menu-button-toggle > .uil');

window.onscroll = function() {
    if (menuList.classList.contains('show')) {
        toggleMenu();
    }
    if (navbar.classList.contains('expanded')) {
        toggleSubMenu();
    }
}

function toggleMenu() {
    menuList.classList.toggle('show');
    menuButtonIcon.classList.toggle('uil-multiply');
}
function toggleSubMenu() {
    navbar.classList.toggle('expanded');
    menuButtonToggleIcon.classList.toggle('uil-multiply');
}
function toggleDropdown() {
    menuDropdown.classList.toggle('active');
}
