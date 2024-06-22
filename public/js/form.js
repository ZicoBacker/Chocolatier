const form = document.querySelector("form.w-full");
const msgForm = document.querySelector("#msgForm");

form.addEventListener("submit", (e) => {
    e.preventDefault();
    msgForm.classList.remove("red");
    msgForm.classList.remove("green");
    msgForm.textContent = "";

    if (!confirmEmail()) {
         msgForm.classList.add("red");
        msgForm.textContent = "emails komen niet overeen";
        return "";
    }
    //clears form if the data is sucesfully uploaded.
    GetApi(new FormData(form)).then((sucess) => {
        if(sucess){
            msgForm.classList.add("green");
            msgForm.textContent = "je inschrijving is toegevoegd!";
            clearForm(form);
        } else {
            msgForm.classList.add("red");
            msgForm.textContent = sucess;
        }
    });
});

// calls the fake ass api to add the application to the database
async function GetApi(data) {
    const response = await fetch("/addIns", {
        method: "POST",
        body: data,
    });

    if (response.ok) {
        return response.json();
    } else {
        return false;
    }
}
// confirms that the emails are the same
function confirmEmail() {
    const email = form.querySelector("#email").value;
    const confirmEmail = form.querySelector("#email_confirm").value;
    return email == confirmEmail;
}


// clears a form, including checkboxes
function clearForm(formEl){
    let inputs = formEl.querySelectorAll("input");
    inputs.forEach((input) =>{
        input.value = null;
        if(input.type == "checkbox"){
            input.checked = false;
        }
    })
}
