let navigationList = document.querySelector(".navigation__list");
let burgerButton = document.querySelector("#navIconSVG");
let parentNavItems = document.querySelectorAll(".navigation__item--parent");

const toggleSubMenus = function (oEvent) {
    let width = window.innerWidth || document.body.clientWidth;
    if(width <= 450) {
        oEvent.preventDefault();
        console.log(oEvent.target.parentNode);
        oEvent.target.parentNode.classList.toggle("navigation__item--toggled");
    }
};

burgerButton.addEventListener("click", () => {
        navigationList.classList.toggle("navigation__list");
        navigationList.classList.toggle("navigation__list--toggled");
});
parentNavItems.forEach((currentItem) => {
    console.log(currentItem);
    currentItem.querySelector(".navigation__link").addEventListener("click", toggleSubMenus);
});
