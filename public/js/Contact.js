const form = document.querySelector("#contactForm");
const contactMsg = document.querySelector('#contactMsg');

async function SendForm(form)
{
    const resp = await fetch('/AddContact',{
        method: "POST",
        body:form
    })

    if( resp.ok) {
        return resp.json();
    } else {
        return false;
    }
}

form.addEventListener("submit",(e) =>{
    e.preventDefault();

    contactMsg.classList.remove("red");
    contactMsg.classList.remove("green");
    contactMsg.textContent = "";

    //upload from to the database and on sucession gives the a green message.
    SendForm(new FormData(form)).then((success) => {
        if(success) {
            contactMsg.classList.add('green');
            contactMsg.textContent = "Contact succesvol aangevraagd!";
            clearForm(form);
        } else {
            contactMsg.classList.add('red');
            contactMsg.textContent = "er is wat fout gegaan!";
        }
    })
})

function clearForm(formEl){
    let inputs = formEl.querySelectorAll("input,textarea");
    inputs.forEach((input) =>{
        input.value = null;
        if(input.type == "checkbox"){
            input.checked = false;
        }
    })
}
