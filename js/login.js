const _name = document.querySelector("#username");
const session = document.querySelector("#ac_session");
const pass = document.querySelector("#userpass");
const msg = document.querySelector("#msg");
const feedback = document.querySelector("#feedback");
const __form = document.querySelector("#_form");

__form.addEventListener("submit", (e) => {
    e.preventDefault();

    // console.log(pass.value);
    // console.log(_name.value);
    console.log(strcmp(_name.value, "dipta") + ' ' + strcmp(pass.value, "111"));

    if(strcmp(pass.value, "111") && strcmp(_name.value, "dipta")){
        //clear all fields
        _name.value = "";
        pass.value = "";
        msg.value = "";
        feedback.classList.add("successLogin");
        feedback.innerHTML = "Login Successful";

        setTimeout(() => feedback.remove(), 3000);
    }
    else{
        feedback.classList.add("credentialsError");
        feedback.innerHTML = "Incorrect name/password";

        setTimeout(() => feedback.remove(), 3000);
    }
});

//returns true if c_str is the same as r_str
const strcmp = (c_str, r_str, locale = "en-US") => c_str.localeCompare(r_str, locale, {sensitivity: "base"}) === 0;
