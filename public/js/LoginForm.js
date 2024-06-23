//elements to pull up the login form
const loginElBut = document.querySelector("#loginElBut");
const loginEl = document.querySelector("#loginEl");
const loginCloseBut = document.querySelector('#loginCloseBut');

async function AttemptLogin(formdata) {
    const resp = await fetch("/LogIn",{
        method:"POST",
        body:formdata
    })

    if (resp.ok){
        return resp.json();
    } else {
        return false;
    }
}

loginElBut.addEventListener("click",(e) => {
    e.preventDefault();
    loginEl.classList.toggle("active");
})

loginCloseBut.addEventListener("click",(e) => {
    e.preventDefault();
    loginEl.classList.toggle("active");
})


const loginForm = document.querySelector("#loginForm");
const msg = document.querySelector("#msg");

loginForm.addEventListener("submit",(e) =>{
    msg.textContent = "";
    msg.style.color = 'black';
    e.preventDefault();

    AttemptLogin(new FormData(loginForm))
        .then((success) => {
            if (!success) {
                msg.textContent = "password and username combination incorrect!";
                msg.style.color = 'red';
                return "";
            } else {
                location.href='/AdminPanel';
            }
        });
})