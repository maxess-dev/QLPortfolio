const goToMenuBtn = document.getElementById("goToMenuBtn");
const title = document.getElementsByClassName("returnHome");
const menu = document.getElementById("menu");
console.log(goToMenuBtn);

goToMenuBtn.addEventListener("click",() => {
    menu.classList.add("active-menu");
})


for (const el of title) {
    el.addEventListener("click", () => {
        menu.classList.remove("active-menu");
    })
}

console.log(title)
