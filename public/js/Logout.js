const logoutBut = document.querySelector('#logoutElBut');

// logs out user through the backend
async function LogoutUser(){
    const resp = await fetch("/Logout",{
        method:"POST",
    })

    if(resp.ok){
        return resp.json();
    } else {
        return false;
    }
}


logoutBut.addEventListener("click",(e) => {
    e.preventDefault();

    LogoutUser().then((sucess) => {
        if(sucess) {
            location.href='/index';
        }
    }) 
})