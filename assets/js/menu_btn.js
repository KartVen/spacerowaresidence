const menuBtn = document.querySelector('.menu-btn');
const navMenu = document.querySelector('.navmenu-nav');

const menuClick = () => {
    menuBtn.classList.toggle('menu-btn-active');
    navMenu.classList.toggle('navmenu-nav-active');
}