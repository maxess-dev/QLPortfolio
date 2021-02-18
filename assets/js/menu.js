const goToMenuBtn = document.getElementById("goToMenuBtn");
const title = document.getElementsByClassName("returnHome");
const menu = document.getElementById("menu");
const innerMenuList = document.querySelector(".inner-menu-list");
const closeMenu = document.querySelector(".close-menu");
const listIcon = document.querySelector(".list-icons");

goToMenuBtn.addEventListener("click",() => {
    menu.classList.add("active-menu");
    innerMenuList.classList.add("active-inner-menu");
    closeMenu.classList.add("active-close-menu");
    listIcon.classList.add("active-list-icon");
})

for (const el of title) {
    el.addEventListener("click", () => {
        window.location.href = "/QL_Portfolio/index.php";
    })
}
