const logo = document.querySelector("#logo");
let click = 0;
logo.addEventListener("click",(e) => {
    e.preventDefault();
    if(click >= 2){
        location.href="/Game";
    }
    click++
})