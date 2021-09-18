// 
// DOM Sidebar
const dataMasterList = document.querySelector('#navbarDropdown');
const dataMasterMenu = document.querySelector('.datamaster-menu');
const arrow = document.querySelector('#arrow');

dataMasterList.onclick = function () {
    dataMasterMenu.classList.toggle("disable-menu");
    dataMasterMenu.classList.toggle("show-menu");
    arrow.classList.toggle("fa-caret-up");
    arrow.classList.toggle("fa-caret-down");
};

// DOM Mobile Sidebar
const dataMasterMobile = document.querySelector('#navbarDropdown-mobile');
const dataListMobile = document.querySelector('.datamaster-mobile');
const arrowMobile = document.querySelector('#arrow-mobile');
const iconBar = document.querySelector('#bar-icon');
const sideBarMobile = document.querySelector('.sidebar-mobile');
const container = document.querySelector('.container');
const closeBar = document.querySelector('.close-bar');

iconBar.onclick = function () {
    sideBarMobile.classList.remove("disable-mobile-sidebar");
};

closeBar.onclick = function () {
    sideBarMobile.classList.add("disable-mobile-sidebar");
}

container.onclick = function () {
    sideBarMobile.classList.add("disable-mobile-sidebar");
}

dataMasterMobile.onclick = function () {
    dataListMobile.classList.toggle("disable-menu");
    dataListMobile.classList.toggle("show-menu");
    arrowMobile.classList.toggle("fa-caret-up");
    arrowMobile.classList.toggle("fa-caret-down");
};
